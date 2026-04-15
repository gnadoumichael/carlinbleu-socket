<?php

namespace App\Repository;

use App\Entity\Livraison;
use App\Entity\Bon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
/**
 * @method Livraison|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livraison|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livraison[]    findAll()
 * @method Livraison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivraisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livraison::class);
    }


    /**
     * @param $value
     * @return mixed
     */
    public function findLast($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.user = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'desc')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
            ;
    }


    /**
     * @param $user
     * @param $date
     * @return mixed
     */
    public function findByeDate($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->setParameter('user', $user)
            ->setParameter('date', $date.'%')
            ->orderBy('d.id', 'desc')
            ->getQuery()
            ->getResult();
    }


    // /**
    //  * @return Livraison[] Returns an array of Livraison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Livraison
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
