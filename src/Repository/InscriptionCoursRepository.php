<?php

namespace App\Repository;

use App\Entity\InscriptionCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Apprenant;

class InscriptionCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionCours::class);
    }

    // Custom method to find inscription by formation and user (apprenant)
    public function findByFormationAndUser($formation, $user): ?InscriptionCours
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.formation = :formation')
            ->andWhere('i.apprenant = :user')
            ->setParameter('formation', $formation)
            ->setParameter('user', $user)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
