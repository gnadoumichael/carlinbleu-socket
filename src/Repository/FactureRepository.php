<?php

namespace App\Repository;

use App\Entity\Devis;
use App\Entity\Facture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Facture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Facture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Facture[]    findAll()
 * @method Facture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Facture::class);
    }


    /**
     * @param $value
     * @return Facture|null
     * @throws NonUniqueResultException
     */
    public function findOneLast($value): ?Facture
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.user = :val')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'desc')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
            ;
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
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param $user
     * @param $chantier
     * @return mixed
     */
    public function findByChan($user, $chantier): mixed
    {
        return $this->createQueryBuilder('f')
            ->where('f.user = :user')
            ->andWhere('f.chantier = :chan')
            ->andWhere('f.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('chan', $chantier)
            ->orderBy('f.date', 'desc')
            ->getQuery()
            ->getResult();
    }


    public function findFacFac($user): mixed
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
