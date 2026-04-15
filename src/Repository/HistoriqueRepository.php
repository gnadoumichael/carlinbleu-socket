<?php

namespace App\Repository;

use App\Entity\Bon;
use App\Entity\Historique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Historique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Historique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Historique[]    findAll()
 * @method Historique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoriqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Historique::class);
    }


    /**
     * @param $user
     * @return mixed
     */
    public function findBa($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :vale')
            ->setParameter('vale', $user)
            ->orderBy('d.date', 'desc')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param $user
     * @return mixed
     */
    public function findBas($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :vale')
            ->setParameter('vale', $user)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }



    /*
    public function findOneBySomeField($value): ?Historique
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
