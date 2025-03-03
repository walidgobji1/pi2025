<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FormationRepository;
use App\Repository\AvisRepository;
use App\Repository\FormationScoreRepository;
use App\Service\FormationScoreService;
use App\Entity\Formation;
use App\Entity\Avis;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Psr\Log\LoggerInterface;


final class FormationScoreController extends AbstractController

{
    private $logger;
    private $formationScoreService;


    // Inject the FormationScoreService into the controller
    public function __construct(FormationScoreService $formationScoreService, LoggerInterface $logger)
    {
        $this->formationScoreService = $formationScoreService;
        $this->logger = $logger;
    }
    #[Route('/score', name: 'app_formation_score_list')]
    public function index(FormationRepository $formationRepository, FormationScoreRepository $formationScoreRepository): Response
    {
        // Fetch all formations
        $formations = $formationRepository->findAll();

        $formationScores = $this->formationScoreService->getAllScores();

        // Debugging output for formationScores
        dd($formationScores); // Check if the formationScores are returned here

        return $this->render('formation/formations.html.twig', [
            'formations' => $formations,
            'formationScores' => $formationScores,
        ]);
    }

    // all the back office methode for gestion avis 
    // Fetch formation, avis et score avec la nouvelle fonction
    #[Route('/admin/formations', name: 'admin_formation_list')]
    public function fetchAll(FormationRepository $formationRepository, AvisRepository $avisRepository, FormationScoreRepository $scoreRepository): Response
    {
        // Récupérer toutes les formations
        $formations = $formationRepository->findAll();

        // Récupérer tous les avis et les scores
        $avisList = $avisRepository->findAll();
        $scoresList = $scoreRepository->findAll();

        // Associer avis et scores aux formations
        $formationsData = [];
        foreach ($formations as $formation) {
            // Récupérer les avis associés à la formation
            $avis = array_filter($avisList, fn($avis) => $avis->getFormation()->getId() === $formation->getId());

            // Récupérer les scores associés à la formation
            $scores = array_filter($scoresList, fn($score) => $score->getFormation()->getId() === $formation->getId());

            // Réindexer le tableau des scores pour pouvoir accéder à l'index 0
            $scores = array_values($scores);

            // Vérifier si des scores existent et prendre le premier score
            $score = null;
            if (count($scores) > 0) {
                $score = $scores[0]->getNoteMoyenne();  // Get the actual score value, not the object
            }


            // Ajouter la formation avec ses avis et score dans le tableau
            $formationsData[] = [
                'formation' => $formation,
                'avis' => $avis,
                'score' => $score,  // Ajouter le score associé à la formation
            ];
        }

        return $this->render('admin/AvisEtScore.html.twig', [
            'formationData' => $formationsData,
        ]);
    }
    #[Route("/admin/formation/{id}", name: "admin_formation_show")]
    public function showAvis(int $id, EntityManagerInterface $em)
    {
        $formation = $em->getRepository(Formation::class)->find($id);
        if (!$formation) {
            throw $this->createNotFoundException('Formation non trouvée');
        }

        $client = HttpClient::create();
        $cache = new FilesystemAdapter();
        // Clear the cache (temporary for testing)
        $cache->clear();
        $this->logger->info('Cache vidé avant traitement');
        $apiUser = '1126907624';
        $apiSecret = 'CL3tBwEJEJuRU9vZTaAre4KeVkVx5e6A';

        $avisList = $em->getRepository(Avis::class)->findBy(['formation' => $formation]);

        foreach ($avisList as $avis) {
            $commentaire = $avis->getCommentaire();
            if (empty($commentaire)) {
                $this->logger->warning('Commentaire vide pour avis ID: ' . $avis->getId());
                continue; // Skip empty comments
            }

            $cacheKey = 'sightengine_moderation_' . md5($commentaire);
            $cacheItem = $cache->getItem($cacheKey);

            if (!$cacheItem->isHit()) {
                try {
                    $response = $client->request('GET', 'https://api.sightengine.com/1.0/text/check.json', [
                        'query' => [
                            'text' => $commentaire,
                            'lang' => 'en,fr',
                            'mode' => 'ml,rules',
                            'api_user' => $apiUser,
                            'api_secret' => $apiSecret,
                        ],
                    ]);

                    $result = $response->toArray();
                    $this->logger->info('Réponse Sightengine pour "' . $commentaire . '"', ['result' => $result]);

                    $reasons = [];
                    $moderation = $result['moderation_classes'] ?? [];
                    if (($moderation['insulting'] ?? 0) >= 0.5) $reasons[] = 'insult';
                    if (($moderation['toxic'] ?? 0) >= 0.5) $reasons[] = 'toxic';
                    if (($moderation['sexual'] ?? 0) >= 0.5) $reasons[] = 'sexual'; // Added sexual
                    if (($moderation['profanity'] ?? 0) >= 0.5) $reasons[] = 'profanity'; // Added profanity
                    if (($moderation['discriminatory'] ?? 0) >= 0.5) $reasons[] = 'discriminatory'; 
                    if (($moderation['violent'] ?? 0) >= 0.5) $reasons[] = 'violent'; 



                    $containsBadWords = !empty($reasons); // True if any reason applies
                    $reason = $containsBadWords ? implode(', ', $reasons) : ''; // Combine reasons
                    // Extract flagged words with positions
                $flaggedWords = [];
                
                $seenPositions = [];
                foreach ($result['profanity']['matches'] ?? [] as $match) {
                    $start = $match['start'];
                    $end = $match['end'];
                    // Extend end to next space or end of string
                    $nextSpace = strpos($commentaire, ' ', $start) ?: strlen($commentaire);
                    $actualWord = substr($commentaire, $start, $nextSpace - $start);
                    $key = $start . '-' . $actualWord;
                    if (!in_array($key, $seenPositions)) {
                        $flaggedWords[] = [
                            'word' => $actualWord,
                            'start' => $start,
                            'end' => $nextSpace
                        ];
                        $seenPositions[] = $key;
                        if (!in_array($match['type'], $reasons)) {
                            $reasons[] = $match['type']; // e.g., "sexual"
                        }
                    }
                }

                // Ensure "profanity" is included if matches exist, even if type is specific
                if (!empty($flaggedWords) && !in_array('profanity', $reasons)) {
                    $reasons[] = 'profanity';
                }
                $this->logger->info('Flagged words for "' . $commentaire . '"', ['flaggedWords' => $flaggedWords]);
                
                    // Cache both the flag and the reason
                    $cacheItem->set(['isFlagged' => $containsBadWords, 'reason' => $reason ,'flaggedWords' => $flaggedWords]);
                    $cacheItem->expiresAfter(86400);
                    $cache->save($cacheItem);
                } catch (\Exception $e) {
                    $this->logger->error('Erreur API pour "' . $commentaire . '"', ['exception' => $e->getMessage()]);
                    $containsBadWords = false;
                }

               
            } else {
                $cachedData = $cacheItem->get();
                // Handle old boolean cache values
                if (is_bool($cachedData)) {
                    $cachedData = ['isFlagged' => $cachedData, 'reason' => $cachedData ? 'unknown' : '', 'flaggedWords' => []];
                }
                $this->logger->info('Résultat en cache pour "' . $commentaire . '"', ['flagged' => $cacheItem->get()]);
            }

            // Get cached data and update avis
            $cachedData = $cacheItem->get();
            if (is_bool($cachedData)) {
                $cachedData = ['isFlagged' => $cachedData, 'reason' => $cachedData ? 'unknown' : ''];
            }
            $avis->setIsFlagged($cachedData['isFlagged']); 
            $avis->setFlaggedReason($cachedData['reason']); 
            $avis->flaggedWords = $cachedData['flaggedWords']; // Transient property, not persisted

            
        }

        try {
            $em->flush();
            $this->logger->info('Mise à jour de la base de données réussie');
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors du flush', ['exception' => $e->getMessage()]);
        }

        return $this->render('admin/formation_avis.html.twig', [
            'formation' => $formation,
            'avisList' => $avisList,
        ]);
    }

    #[Route('/admin/avis/{id}', name: 'admin_avis_delete', methods: ['POST'])]
    public function deleteAvis(Request $request, Avis $avi, EntityManagerInterface $entityManager, FormationScoreRepository $formationScoreRepository): Response
    {
        // Get the formation related to the review
        $formation = $avi->getFormation();
        $formationScore = $formationScoreRepository->findOneBy(['formation' => $formation]);

        // Get the current number of reviews and the average score
        $count = $formationScore->getNombreAvis();
        $oldNote = $avi->getNote();

        if ($count > 1) {
            // Recalculate the new average after deleting the review
            $newTotal = ($formationScore->getNoteMoyenne() * $count) - $oldNote;
            $newAverage = $newTotal / ($count - 1);
        } else {
            $newAverage = 0; // If there are no reviews left, set average to 0
        }

        // Update the FormationScore with the new values
        $formationScore->setNoteMoyenne($newAverage);
        $formationScore->setNombreAvis($count - 1);

        // Persist the updated FormationScore
        $entityManager->persist($formationScore);

        // CSRF validation
        if ($this->isCsrfTokenValid('delete' . $avi->getId(), $request->request->get('_token'))) {
            // Remove the review (Avis) from the database
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        // Optionally add a flash message to notify the admin of the deletion
        $this->addFlash('success', 'L\'avis a été supprimé avec succès.');

        // Redirect back to the formation's review page
        return $this->redirectToRoute('admin_formation_show', ['id' => $formation->getId()], Response::HTTP_SEE_OTHER);
    }
}
