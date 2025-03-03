<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\User;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;

class SecurityController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_redirect_after_login');
        }

        return $this->render('home/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/redirect', name: 'app_redirect_after_login')]
    public function redirectAfterLogin(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_home');
        }

        return in_array('ROLE_ADMIN', $user->getRoles())
            ? $this->redirectToRoute('app_dashboard')
            : $this->redirectToRoute('app_home');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method should never be reached.');
    }


    #[Route("/forgot-password", name: "app_forgot_password")]
    public function forgotPassword(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');

            // Vérifier si l'utilisateur existe
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

            if ($user) {
                // Générer un token de réinitialisation
                $resetToken = bin2hex(random_bytes(32));

                // Enregistrer le token en base de données
                $user->setResetToken($resetToken);
                $this->entityManager->flush();

                // Configuration du mailer avec SMTP (suivant ta méthode)
                $transport = Transport::fromDsn('smtp://amroush123@gmail.com:npcfowmbtolgyqfe@smtp.gmail.com:587');
                $mailer = new Mailer($transport);

                // Création de l'email
                $recipientEmail = $user->getEmail();
                $emailMessage = (new Email())
                    ->from('amroush123@gmail.com')
                    ->to($recipientEmail)
                    ->subject('Réinitialisation de votre mot de passe')
                    ->text(sprintf(
                        "Bonjour %s,\n\nVous avez demandé à réinitialiser votre mot de passe.\n\nCliquez sur le lien ci-dessous :\nhttp://127.0.0.1:8000/reset-password/%s\n\nSi vous n'êtes pas à l'origine de cette demande, ignorez cet email.\n\nCordialement,\nL'équipe.",
                        $user->getNom(),
                        $resetToken
                    ));

                try {
                    $mailer->send($emailMessage);    
                    // return new Response("Un email de réinitialisation a été envoyé à $recipientEmail.");
                    return $this->render('home/login.html.twig');
                } catch (\Exception $e) {
                    return new Response("Erreur lors de l'envoi de l'email : " . $e->getMessage());
                }
            } else {
                return new Response("Aucun utilisateur trouvé avec cet email.");
            }
        }

        return $this->render('home/forgetpassword.html.twig');
    }

    #[Route("/reset-password/{token}", name: "app_reset_password")]
    public function resetPassword(Request $request, UserPasswordHasherInterface $passwordHasher, string $token): Response
    {
        // Trouver l'utilisateur avec le token
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['resetToken' => $token]);

        if (!$user) {
            return new Response("Token invalide ou expiré.");
        }

        if ($request->isMethod('POST')) {
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm-password');

            if ($password !== $confirmPassword) {
                return new Response("Les mots de passe ne correspondent pas.");
            }

            // Hacher et sauvegarder le mot de passe
            $user->setPassword($passwordHasher->hashPassword($user, $password));
            $user->setResetToken(null);
            $this->entityManager->flush();

            // Rediriger vers la page de connexion
            return $this->render('home/login.html.twig');
        }

        return $this->render('home/resetpassword.html.twig', [
            'token' => $token
        ]);
    }
}
