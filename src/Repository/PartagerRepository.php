<?php

namespace App\Repository;

use App\Entity\Partager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Partager|null find($id, $lockMode = null, $lockVersion = null)
 * @method Partager|null findOneBy(array $criteria, array $orderBy = null)
 * @method Partager[]    findAll()
 * @method Partager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartagerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Partager::class);
    }

    // /**
    //  * @return Partager[] Returns an array of Partager objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Partager
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
