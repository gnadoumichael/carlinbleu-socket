<?php

namespace App\Repository;

use App\Entity\Caisse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Caisse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Caisse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Caisse[]    findAll()
 * @method Caisse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaisseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Caisse::class);
    }

    public function findCaisses($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user);
        return $query->getQuery()->getResult();
    }

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

    public function findInerve($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.intervenant = :val')
            ->setParameter('val', $value)
            ->orderBy('c.date', 'asc')
            ->getQuery()
            ->getResult()
            ;
    }

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

    public function findByeDater($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->andWhere('d.etat = :et')
            ->setParameter('user', $user)
            ->setParameter('date', $date.'%')
            ->setParameter('et', "valide")
            ->orderBy('d.id', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findByAller($chantier)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.chantier = :val')
            ->andWhere('c.corbeille IS NULL')
            ->setParameter('val', $chantier)
            ->orderBy('c.id', 'desc')
            ->getQuery()
            ->getResult()
        ;
    }

    public function chCaisses($value, $user)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.numcaisse LIKE :val')
            ->andWhere('a.user =:vale')
            ->setParameter('val', '%'.$value.'%')
            ->setParameter('vale', $user)
            ->getQuery()
            ->execute();
    }

    public function caissePaie($user)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.paie IS NOT NULL')
            ->andWhere('a.user =:vale')
            ->orderBy('a.chantier', 'asc')
            ->setParameter('vale', $user)
            ->getQuery()
            ->getResult();
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

    public function findByTresor($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.etat = :et')
            ->setParameter('user', $user)
            ->setParameter('et', "valide")
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findByMois($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.bon', 'b')
            ->leftJoin('d.devis', 'dev')
            ->where('d.user = :user')
            ->andWhere('b IS NOT NULL')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('dev.corbeille IS NULL')
            ->andWhere('b.corbeille IS NULL')
            ->andWhere('d.etat = :et')
            ->orWhere('d.type = :aa')
            ->orWhere('d.type = :bb')
            ->andWhere('d.user =:vale')
            ->setParameter('user', $user)
            ->setParameter('et', "valide")
            ->setParameter('aa', "3")
            ->setParameter('bb', "1")
            ->setParameter('vale', $user)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findByPerso($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.etat = :et')
            ->andWhere('d.type = :aa')
            ->setParameter('user', $user)
            ->setParameter('et', "valide")
            ->setParameter('aa', "5")
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findByMonth($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->setParameter('user', $user)
            ->setParameter('date', $date . '%')
            ->orderBy('d.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findCharges($user)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.personnel IS NOT NULL')
            ->setParameter('user', $user)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findCaisCais($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.client', 'cl')
            ->leftJoin('d.chantier', 'ch')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('cl.corbeille IS NULL')
            ->andWhere('ch.corbeille IS NULL')
            ->andWhere('d.type IS NOT NULL')
            ->setParameter('user', $user)
            ->orderBy('d.date', 'desc')
            ->getQuery()
            ->getResult();
    }


    public function findByMonthInterne($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.chantier', 'chan')
            ->where('d.user = :user')
            ->andWhere('chan.type = :tu')
            ->andWhere('d.date LIKE :date')
            ->setParameter('user', $user)
            ->setParameter('date', $date . '%')
            ->setParameter('tu', 'frais')
            ->orderBy('d.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

}
