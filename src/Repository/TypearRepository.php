<?php

namespace App\Repository;

use App\Entity\Typear;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Typear|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typear|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typear[]    findAll()
 * @method Typear[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypearRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typear::class);
    }

    // /**
    //  * @return Typear[] Returns an array of Typear objects
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
    public function findOneBySomeField($value): ?Typear
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
