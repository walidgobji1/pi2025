<?php

namespace App\Controller;

use App\Entity\Apprenant;
use App\Entity\Instructeur;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard'); // Redirect if already logged in
        }

        // ✅ Get user type from URL parameter
        $role = strtolower($request->query->get('role', 'apprenant')); // Default to 'apprenant'

        // ✅ Create an Apprenant or Instructeur instance directly
        if ($role === 'instructeur') {
            $user = new Instructeur();
            $user->setRoles(['ROLE_INSTRUCTEUR']);
        } else {
            $user = new Apprenant();
            $user->setRoles(['ROLE_APPRENANT']);
        }

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Set user fields correctly
            if ($user instanceof Apprenant) {
                $user->setNomApprenant($form->get('nom')->getData());
                $user->setPrenomApprenant($form->get('prenom')->getData());
                $user->setEmailApprenant($form->get('email')->getData());
            } elseif ($user instanceof Instructeur) {
                $user->setNomInstructeur($form->get('nom')->getData());
                $user->setPrenomInstructeur($form->get('prenom')->getData());
                $user->setEmailInstructeur($form->get('email')->getData());
            }

            // ✅ Handle Image Upload
            $imageFile = $form->get('image')->getData();
            if ($imageFile instanceof UploadedFile) {
                $newImageFilename = $this->uploadFile($imageFile, $this->getParameter('profile_images_directory'));
                if ($newImageFilename) {
                    $user->setImage($newImageFilename);
                } else {
                    $this->addFlash('danger', 'Erreur lors du téléchargement de l\'image.');
                    return $this->redirectToRoute('app_register', ['role' => $role]);
                }
            }

            // ✅ Hash the password before saving
            $user->setPassword(
                $passwordHasher->hashPassword($user, $form->get('password')->getData())
            );

            // ✅ Persist the Apprenant or Instructeur directly
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Inscription réussie ! Veuillez vous connecter.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('home/register.html.twig', [
            'registrationForm' => $form->createView(),
            'role' => $role
        ]);
    }

    /**
     * Handles file uploads safely.
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
