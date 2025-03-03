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

<<<<<<< HEAD
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
=======
//    /**
//     * @return InscriptionCours[] Returns an array of InscriptionCours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InscriptionCours
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function findInscriptionsByApprenant(Apprenant $apprenant): array
    {
        return $this->createQueryBuilder('i')
            ->where('i.apprenant = :apprenant')
            ->setParameter('apprenant', $apprenant)
            ->orderBy('i.dateInscreption', 'DESC')
            ->getQuery()
            ->getResult();
    }


    public function searchByFormationTitle(string $query): array
{
    return $this->createQueryBuilder('i')
        ->join('i.formation', 'f') // Assure-toi que la relation existe
        ->where('f.titre LIKE :query')
        ->setParameter('query', '%' . $query . '%')
        ->getQuery()
        ->getResult();
}
>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa
}
