<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends AbstractController
{
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
    public function redirectAfterLogin(): RedirectResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_home'); // Redirect to home if not logged in
        }

        // Redirect based on user role
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return $this->redirectToRoute('app_dashboard');
        }

        if (in_array('ROLE_INSTRUCTEUR', $user->getRoles()) || in_array('ROLE_APPRENANT', $user->getRoles())) {
            return $this->redirectToRoute('app_home'); // Redirect Apprenant & Instructeur to home
        }

        return $this->redirectToRoute('app_home'); // Default redirection
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method should never be reached.');
    }
}
