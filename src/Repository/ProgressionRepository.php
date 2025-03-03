<?php

namespace App\Repository;

use App\Entity\Progression;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Progression>
 */
class ProgressionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Progression::class);
    }

    public function save(Progression $progression, bool $flush = false): void
    {
        $this->getEntityManager()->persist($progression);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Progression $progression, bool $flush = false): void
    {
        $this->getEntityManager()->remove($progression);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findApprenantProgress(int $apprenantId, int $formationId): ?Progression
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.apprenant = :apprenantId')
            ->andWhere('p.formation = :formationId')
            ->setParameter('apprenantId', $apprenantId)
            ->setParameter('formationId', $formationId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function countCompletedLessons(int $apprenantId, int $formationId): int
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(l.id)')
            ->join('p.leconsTerminees', 'l')
            ->andWhere('p.apprenant = :apprenantId')
            ->andWhere('p.formation = :formationId')
            ->setParameter('apprenantId', $apprenantId)
            ->setParameter('formationId', $formationId)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
