<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

final class AdminController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/dashboard/users', name: 'app_users_list')]
    public function usersList(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->createQueryBuilder('u')
            ->where("u.roles LIKE :role_instructeur")
            ->orWhere("u.roles LIKE :role_apprenant")
            ->setParameter('role_instructeur', '%ROLE_INSTRUCTEUR%')
            ->setParameter('role_apprenant', '%ROLE_APPRENANT%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/users_list.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/dashboard/users/delete/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function deleteUser(int $id, EntityManagerInterface $entityManager): RedirectResponse
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash('danger', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_users_list');
        }

        // Prevent Admin from being deleted
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            $this->addFlash('warning', 'Impossible de supprimer un administrateur.');
            return $this->redirectToRoute('app_users_list');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', 'Utilisateur supprimé avec succès.');
        return $this->redirectToRoute('app_users_list');
    }

    #[Route('/create-admin', name: 'app_create_admin', methods: ['GET'])]
    public function createAdmin(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        // Check if admin already exists
        $existingAdmin = $entityManager->getRepository(User::class)->findOneBy(['email' => 'admin@example.com']);
        if ($existingAdmin) {
            return new Response('<h3>Admin user already exists!</h3>');
        }

        // Create Admin User
        $admin = new User();
        $admin->setEmail('admin@example.com');
        $admin->setNom('Admin');
        $admin->setPrenom('Super');
        $admin->setRoles(['ROLE_ADMIN']);

        // Hash password
        $hashedPassword = $passwordHasher->hashPassword($admin, '123456789');
        $admin->setPassword($hashedPassword);

        // Save to database
        $entityManager->persist($admin);
        $entityManager->flush();

        return new Response('<h3>Admin user created successfully!</h3>');
    }
}
