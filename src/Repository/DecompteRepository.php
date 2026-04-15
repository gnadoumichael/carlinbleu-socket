<?php

namespace App\Repository;

use App\Entity\Decompte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Decompte|null find($id, $lockMode = null, $lockVersion = null)
 * @method Decompte|null findOneBy(array $criteria, array $orderBy = null)
 * @method Decompte[]    findAll()
 * @method Decompte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DecompteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Decompte::class);
    }

    public function findByChan($user, $chantier): mixed
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.chantier = :chan')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('chan', $chantier)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findOneLast($user,$devis): ?Decompte
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.user = :val')
            ->andWhere('d.devis = :vale')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.etat = :st')
            ->setParameter('val', $user)
            ->setParameter('vale', $devis)
            ->setParameter('st', "valide")
            ->orderBy('d.id', 'desc')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByeDate($user, $date)
    {
        $start = new \DateTime($date . ' 00:00:00');
        $end = new \DateTime($date . ' 23:59:59');

        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date BETWEEN :start AND :end')
            ->setParameter('user', $user)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('d.id', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findDecDec($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.client', 'cl')
            ->leftJoin('d.chantier', 'ch')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('cl.corbeille IS NULL')
            ->andWhere('ch.corbeille IS NULL')
            ->setParameter('user', $user)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

}
