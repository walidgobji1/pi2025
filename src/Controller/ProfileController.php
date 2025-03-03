<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

final class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }

    #[Route('/profile/edit', name: 'app_profile_edit', methods: ['POST'])]
    public function editProfile(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException();
        }

        // Récupérer les données du formulaire
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $dateDeNaissanceInput = $request->request->get('dateDeNaissance');

        // Conversion de la date
        try {
            $dateDeNaissance = new \DateTime($dateDeNaissanceInput);
        } catch (\Exception $e) {
            if ($request->isXmlHttpRequest()) {
                return $this->json([
                    'status'  => 'error',
                    'message' => "Date de naissance invalide."
                ]);
            }
            $this->addFlash('error', "Date de naissance invalide.");
            return $this->redirectToRoute('app_profile');
        }

        // Mise à jour de l'utilisateur
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setDateDeNaissance($dateDeNaissance);
        $entityManager->flush();

        // Réponse en JSON pour une requête Ajax
        if ($request->isXmlHttpRequest()) {
            return $this->json([
                'status'  => 'success',
                'message' => "Votre profil a été mis à jour avec succès.",
                'data'    => [
                    'nom'             => $user->getNom(),
                    'prenom'          => $user->getPrenom(),
                    'dateDeNaissance' => $user->getDateDeNaissance()->format('d/m/Y')
                ]
            ]);
        }

        $this->addFlash('success', "Votre profil a été mis à jour avec succès.");
        return $this->redirectToRoute('app_profile');
    }
}
