<?php

namespace App\Repository;

use App\Entity\Inlog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Inlog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inlog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inlog[]    findAll()
 * @method Inlog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InlogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inlog::class);
    }

    // /**
    //  * @return Inlog[] Returns an array of Inlog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Inlog
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
