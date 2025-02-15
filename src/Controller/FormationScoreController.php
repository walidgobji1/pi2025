<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\FormationRepository;
use App\Repository\FormationScoreRepository;


final class FormationScoreController extends AbstractController
{
    #[Route('/formation/score', name: 'app_formation_score')]
    public function index(formationRepository $formationRepository , formationScoreRepository $formationScoreRepository): Response
    {
         // Fetch all formations
         $formations = $formationRepository->findAll();

         // Fetch all formation scores (indexed by formation ID)
         $formationScores = [];
         foreach ($formationScoreRepository->findAll() as $score) {
             $formationScores[$score->getFormation()->getId()] = $score;
         }
 
         return $this->render('formation/index.html.twig', [
             'formations' => $formations,
             'formationScores' => $formationScores,
         ]);
    }
}
