<?php

namespace App\Repository;

use App\Entity\FormationScore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FormationScore>
 */
class FormationScoreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationScore::class);
    }

//    /**
//     * @return FormationScore[] Returns an array of FormationScore objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FormationScore
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function calculateClassement(FormationScore $formationScore): int
{
    $query = $this->createQueryBuilder('fs')
        ->orderBy('fs.noteMoyenne', 'DESC') // Sort by highest average rating
        ->getQuery();

    $allScores = $query->getResult();
    
    // Find the position of the current formation in the ranking
    foreach ($allScores as $index => $score) {
        if ($score === $formationScore) {
            return $index + 1; // Rank starts from 1, not 0
        }
    }

    return 1; // Default to 1 if something goes wrong
}

}
