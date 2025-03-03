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
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
            // ✅ Set values correctly
            $instructeur->setNomInstructeur($form->get('nom')->getData());
            $instructeur->setPrenomInstructeur($form->get('prenom')->getData());
            $instructeur->setEmailInstructeur($form->get('email')->getData());

            // ✅ Hash the password
            $instructeur->setPassword(
                $passwordHasher->hashPassword($instructeur, $form->get('password')->getData())
            );
            $instructeur->setRoles(['ROLE_INSTRUCTEUR']);

            // ✅ Handle CV upload
            $cvFile = $form->get('cv')->getData();
            if ($cvFile instanceof UploadedFile) {
                $newCvFilename = $this->uploadFile($cvFile, $this->getParameter('cv_directory'));
                if ($newCvFilename) {
                    $instructeur->setCv($newCvFilename);
                } else {
                    $this->addFlash('danger', 'Erreur lors du téléchargement du CV.');
                    return $this->redirectToRoute('app_register_instructeur');
                }
            }

            // ✅ Handle Image upload
            $imageFile = $form->get('image')->getData();
            if ($imageFile instanceof UploadedFile) {
                $newImageFilename = $this->uploadFile($imageFile, $this->getParameter('profile_images_directory'));
                if ($newImageFilename) {
                    $instructeur->setImage($newImageFilename);
                } else {
                    $this->addFlash('danger', 'Erreur lors du téléchargement de l\'image.');
                    return $this->redirectToRoute('app_register_instructeur');
                }
            }

            // ✅ Persist the instructeur to the database
            $entityManager->persist($instructeur);
            $entityManager->flush();

            // ✅ Flash success message
            $this->addFlash('success', 'Inscription réussie ! Veuillez vous connecter.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('home/instructeur_register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * Handle file uploads safely.
     *
     * @param UploadedFile $file
     * @param string $targetDirectory
     * @return string|null
     */
    private function uploadFile(UploadedFile $file, string $targetDirectory): ?string
    {
        $newFilename = uniqid() . '.' . $file->guessExtension();

        try {
            $file->move($targetDirectory, $newFilename);
            return $newFilename;
        } catch (FileException $e) {
            return null;
        }
    }
}
