<?php

namespace App\Repository;

use App\Entity\Sousfamille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sousfamille|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sousfamille|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sousfamille[]    findAll()
 * @method Sousfamille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousfamilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sousfamille::class);
    }

    // /**
    //  * @return Sousfamille[] Returns an array of Sousfamille objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sousfamille
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
