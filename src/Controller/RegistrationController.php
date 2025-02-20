<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard'); // Redirect if user is already logged in
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordHasher->hashPassword($user, $form->get('password')->getData())
            );

            // Determine user role from form selection
            if ($form->has('role') && $form->get('role')->getData() === 'ROLE_INSTRUCTEUR') {
                $user->setRoles(['ROLE_INSTRUCTEUR']);
            } else {
                $user->setRoles(['ROLE_APPRENANT']);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Inscription réussie ! Veuillez vous connecter.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('home/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
