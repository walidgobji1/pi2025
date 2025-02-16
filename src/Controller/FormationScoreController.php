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
 #[Route("/admin/formation/{id}", name:"admin_formation_show")]
public function showAvis(int $id, EntityManagerInterface $em)
    {
        // Fetch the formation using the ID
        $formation = $em->getRepository(Formation::class)->find($id);

        // Check if the formation exists
        if (!$formation) {
            throw $this->createNotFoundException('Formation not found');
        }

        // Fetch the avis associated with the formation
        $avisList = $em->getRepository(Avis::class)->findBy(['formation' => $formation]);

        // Pass the formation and avis to the template
        return $this->render('admin/formation_avis.html.twig', [
            'formation' => $formation,
            'avisList' => $avisList,
        ]);
    }

}
