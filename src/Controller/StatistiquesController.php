<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;

class StatistiquesController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/statistics', name: 'statistics')]
    public function statistics(UserRepository $userRepository): Response
    {
        // Définition des rôles à inclure dans les statistiques
        $roles = ['Apprenant', 'Instructeur', 'Admin'];

        $statistics = [];
        $totalUsers = 0;

        foreach ($roles as $role) {
            $count = $userRepository->countUsersByType($role);
            $statistics[$role] = $count;
            $totalUsers += $count;
        }

        return $this->render('statistiques/index.html.twig', [
            'labels' => array_keys($statistics),
            'data' => array_values($statistics),
            'totalUsers' => $totalUsers,
        ]);
    }
}
