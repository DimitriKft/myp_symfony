<?php

namespace App\Repository;

use App\Entity\Technologies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Technologies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Technologies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Technologies[]    findAll()
 * @method Technologies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechnologiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Technologies::class);
    }

    // /**
    //  * @return Technologies[] Returns an array of Technologies objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Technologies
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
