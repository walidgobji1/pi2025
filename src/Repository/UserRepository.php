<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Compter le nombre d'utilisateurs par rôle (Admin, Apprenant, Instructeur)
     */
    public function countUsersByType(string $type): int
    {
        $role = 'ROLE_' . strtoupper($type); // Transforme "admin" -> "ROLE_ADMIN"

        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%"' . $role . '"%') // Recherche dans JSON
            ->getQuery()
            ->getSingleScalarResult();
    }
}
