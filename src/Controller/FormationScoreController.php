<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\FormationRepository;
use App\Repository\FormationScoreRepository;
use App\Service\FormationScoreService; // Import the service

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
}
