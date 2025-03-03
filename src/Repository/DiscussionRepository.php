<?php

namespace App\Repository;
use App\Entity\User;
use App\Entity\Discussion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Discussion>
 */
class DiscussionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Discussion::class);
    }

    public function findBySearchQueryAndUser(string $query, User $user)
{
    $qb = $this->createQueryBuilder('d')
        ->leftJoin('d.receiver', 'r')
        ->leftJoin('d.sender', 's')
        ->where('r.id = :userId OR s.id = :userId')
        ->andWhere('r.nom LIKE :query OR s.nom LIKE :query OR r.prenom LIKE :query OR s.prenom LIKE :query')
        ->setParameter('userId', $user->getId())
        ->setParameter('query', '%' . $query . '%')
        ->getQuery();

    return $qb->getResult();
}

//    /**
//     * @return Discussion[] Returns an array of Discussion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Discussion
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
