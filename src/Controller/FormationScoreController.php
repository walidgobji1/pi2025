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



final class FormationScoreController extends AbstractController
{
    private $formationScoreService;

    // Inject the FormationScoreService into the controller
    public function __construct(FormationScoreService $formationScoreService)
    {
        $this->formationScoreService = $formationScoreService;
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
        // Fetch the formation using the ID
        $formation = $em->getRepository(Formation::class)->find($id);

        // Check if the formation exists
        if (!$formation) {
            throw $this->createNotFoundException('Formation not found');
        }
        // Initialize HTTP client and cache
        $client = HttpClient::create();
        $cache = new FilesystemAdapter();
        // $badWords = ['badword1', 'badword2', 'badword3'];
        // Fetch the avis associated with the formation
        $apiUser = '1126907624';
        $apiSecret = 'CL3tBwEJEJuRU9vZTaAre4KeVkVx5e6A';
        $avisList = $em->getRepository(Avis::class)->findBy(['formation' => $formation]);
        foreach ($avisList as $avis) {
            $cacheKey = 'sightengine_moderation_' . md5($avis->getCommentaire());
            $cacheItem = $cache->getItem($cacheKey);

            if (!$cacheItem->isHit()) {
                try {
                    $response = $client->request('GET', 'https://api.sightengine.com/1.0/text/check.json', [
                        'query' => [
                            'text' => $avis->getCommentaire(),
                            'lang' => 'en', // Change to 'fr' for French comments
                            'mode' => 'ml,rules', // Options: standard, strict
                            'api_user' => $apiUser,
                            'api_secret' => $apiSecret,
                        ],
                    ]);

                    $result = $response->toArray();
                    
                    
                    $insultScore = $result['moderation_classes']['insulting'] ?? 0;
                    $toxicScore = $result['moderation_classes']['toxic'] ?? 0;

                    // Flag comment if insult or toxicity score exceeds threshold
                    $containsBadWords = ($insultScore >= 0.7 || $toxicScore >= 0.7);
                } catch (\Exception $e) {
                    $containsBadWords = false; // Fallback if API fails
                }

                $cacheItem->set($containsBadWords);
                $cacheItem->expiresAfter(86400); // Cache for 24 hours
                $cache->save($cacheItem);
            }

            $avis->setIsFlagged($cacheItem->get());
            $em->flush();
        }
        // Pass the formation and avis to the template
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
