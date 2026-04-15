<?php

namespace App\Repository;

use App\Entity\Caisse;
use App\Entity\Valider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Valider|null find($id, $lockMode = null, $lockVersion = null)
 * @method Valider|null findOneBy(array $criteria, array $orderBy = null)
 * @method Valider[]    findAll()
 * @method Valider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValiderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Valider::class);
    }

    /**
    * @return Valider[] Returns an array of Valider objects
    */
    public function findByChantier($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.chantier = :val')
            ->setParameter('val', $value)
            ->orderBy('v.date', 'desc')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @param $user
     * @param $date
     * @return mixed
     */
    public function findByeDater($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->andWhere('d.type = :ty')
            ->setParameter('user', $user)
            ->setParameter('date', $date.'%')
            ->setParameter('ty', 3)
            ->getQuery()
            ->getResult();
    }


    public function findByDate($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->andWhere('d.type = :ty OR d.type = :tye')
            ->setParameter('user', $user)
            ->setParameter('date', $date.'%')
            ->setParameter('ty', 3)
            ->setParameter('tye', 1)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findAlle($user)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.type = :ty OR d.type = :tye')
            ->setParameter('user', $user)
            ->setParameter('ty', 3)
            ->setParameter('tye', 1)
            ->orderBy('d.date', 'asc')
            ->getQuery()
            ->getResult();
    }


    public function findByChantiers($user, $chantier)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andwhere('d.chantier = :chan')
            ->andWhere('d.type = :ty OR d.type = :tye')
            ->setParameter('user', $user)
            ->setParameter('chan', $chantier)
            ->setParameter('ty', "3")
            ->setParameter('tye', 1)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }


}
