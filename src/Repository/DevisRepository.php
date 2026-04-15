<?php

namespace App\Repository;

use App\Entity\Devis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Devis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Devis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Devis[]    findAll()
 * @method Devis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DevisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Devis::class);
    }

    public function findDevis($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user);
        return $query->getQuery()->getResult();
    }
    public function findOneLast($value): ?Devis
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.user = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'desc')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function findByeDate($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->andWhere('d.etat = :valide')
            ->setParameter('user', $user)
            ->setParameter('date', $date . '%')
            ->setParameter('valide', 'valide')
            ->orderBy('d.id', 'desc')
            ->getQuery()
            ->getResult();
    }
    public function findByChan($user, $chantier): mixed
    {
        return $this->createQueryBuilder('d')

            ->where('d.user = :user')
            ->andWhere('d.chantier = :chan')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.type IS NULL')
            ->setParameter('user', $user)
            ->setParameter('chan', $chantier)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }
    public function findByyChan($user, $chantier): mixed
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.chantier = :chan')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('chan', $chantier)
            ->orderBy('d.iddevis', 'asc')
            ->getQuery()
            ->getResult();
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function findByeDater($user, $date)
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
    public function chDevis($value, $user)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.iddevis LIKE :val')
            ->andWhere('a.user =:vale')
            ->setParameter('val', '%' . $value . '%')
            ->setParameter('vale', $user)
            ->getQuery()
            ->execute();
    }

    public function findDevDev($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.client', 'cl')
            ->leftJoin('d.chantier', 'ch')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('cl.corbeille IS NULL')
            ->andWhere('ch.corbeille IS NULL')
            ->andWhere('d.type IS NULL')
            ->setParameter('user', $user)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }


}
