<?php

namespace App\Controller;

use App\Entity\Instructeur;
use App\Form\InstructeurRegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class InstructeurRegistrationController extends AbstractController
{
    #[Route('/register_instructeur', name: 'app_register_instructeur', methods: ['GET', 'POST'])]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard'); // Prevent logged-in users from registering again
        }

        $instructeur = new Instructeur();
        $form = $this->createForm(InstructeurRegistrationFormType::class, $instructeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash the password
            $instructeur->setPassword(
                $passwordHasher->hashPassword($instructeur, $form->get('password')->getData())
            );
            $instructeur->setRoles(['ROLE_INSTRUCTEUR']);

            // Handle CV upload
            $cvFile = $form->get('cv')->getData();
            if ($cvFile) {
                $newCvFilename = uniqid().'.'.$cvFile->guessExtension();
                try {
                    $cvFile->move($this->getParameter('cv_directory'), $newCvFilename);
                    $instructeur->setCv($newCvFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Erreur lors du téléchargement du CV.');
                    return $this->redirectToRoute('app_register_instructeur');
                }
            }

            // Handle Image upload
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newImageFilename = uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move($this->getParameter('profile_images_directory'), $newImageFilename);
                    $instructeur->setImage($newImageFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Erreur lors du téléchargement de l\'image.');
                    return $this->redirectToRoute('app_register_instructeur');
                }
            }

            $entityManager->persist($instructeur);
            $entityManager->flush();

            // Flash message for success
            $this->addFlash('success', 'Inscription réussie ! Veuillez vous connecter.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('home/instructeur_register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
