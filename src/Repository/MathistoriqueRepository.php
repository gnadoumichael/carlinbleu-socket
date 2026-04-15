<?php

namespace App\Repository;

use App\Entity\Mathistorique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mathistorique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mathistorique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mathistorique[]    findAll()
 * @method Mathistorique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MathistoriqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mathistorique::class);
    }

    // /**
    //  * @return Mathistorique[] Returns an array of Mathistorique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mathistorique
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
