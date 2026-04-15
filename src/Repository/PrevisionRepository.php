<?php

namespace App\Repository;

use App\Entity\Prevision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Prevision|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prevision|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prevision[]    findAll()
 * @method Prevision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrevisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prevision::class);
    }

    /**
     * @param $value
     * @return Prevision|null
     * @throws NonUniqueResultException
     * @throws NonUniqueResultException
     */
    public function findOneLast($value): ?Prevision
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.user = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'desc')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?Prevision
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
