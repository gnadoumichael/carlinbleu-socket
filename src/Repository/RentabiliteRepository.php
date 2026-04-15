<?php

namespace App\Repository;

use App\Entity\Rentabilite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rentabilite>
 *
 * @method Rentabilite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rentabilite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rentabilite[]    findAll()
 * @method Rentabilite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RentabiliteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rentabilite::class);
    }

//    /**
//     * @return Rentabilite[] Returns an array of Rentabilite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Rentabilite
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
