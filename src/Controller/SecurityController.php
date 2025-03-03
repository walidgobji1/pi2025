<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

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

    #[Route('/login/admin', name: 'app_login_admin', methods: ['GET', 'POST'])]
    public function loginAdmin(
        Request $request,
        AuthenticationUtils $authenticationUtils,
        UserProviderInterface $userProvider,
        UserPasswordHasherInterface $passwordHasher,
        TokenStorageInterface $tokenStorage
    ): Response {
        if ($request->isMethod('POST')) {
            $credentials = $request->request->all();

            $email = $credentials['_username'] ?? null;
            $password = $credentials['_password'] ?? null;

            try {
                $user = $userProvider->loadUserByIdentifier($email);
            } catch (\Exception $e) {
                dump('User not found: ' . $e->getMessage());
                exit;
            }

            if ($user instanceof PasswordAuthenticatedUserInterface && $passwordHasher->isPasswordValid($user, $password)) {
                $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
                $tokenStorage->setToken($token);

                $request->getSession()->set('_security_main', serialize($token));

                $request->getSession()->migrate(true);

                return $this->redirectToRoute('app_dashboard');
                return $this->render('home/login_admin.html.twig', [
                    'error' => 'Identifiants incorrects. Veuillez réessayer.',
                    'last_username' => $email
                ]);
            }

            exit;
        }

        return $this->render('home/login_admin.html.twig', [
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

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return $this->redirectToRoute('app_dashboard');
        }

        if (in_array('ROLE_INSTRUCTEUR', $user->getRoles()) || in_array('ROLE_APPRENANT', $user->getRoles())) {
            return $this->redirectToRoute('app_dashboard');
        }

        return $this->redirectToRoute('app_home');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method should never be reached.');
    }
}
