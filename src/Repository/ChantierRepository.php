<?php

namespace App\Repository;

use App\Entity\Chantier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chantier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chantier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chantier[]    findAll()
 * @method Chantier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChantierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chantier::class);
    }

    public function findChantiers($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('c IS NOT NULL')
            ->andWhere('p.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findChantiersWindows($user, $type): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('c IS NOT NULL')
            ->andWhere('p.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->andWhere('p.etat =:etat')
            ->setParameter('user', $user)
            ->setParameter('etat', $type)
            ->orderBy('c.nomclient', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findMost($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('c IS NOT NULL')
            ->andWhere('p.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->andWhere('p.most > :most')
            ->setParameter('user', $user)
            ->setParameter('most', 0)
            ->orderBy('c.nomclient', 'asc')
            ->setMaxResults(10);
        return $query->getQuery()->getResult();
    }

    public function findChantiersCours($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('c IS NOT NULL')
            ->andWhere('p.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findChantiersReleves($user, $id): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->innerJoin('p.devis', 'd')
            ->where('p.user = :user')
            ->andWhere('c.id = :id')
            ->andWhere('c.type IS NULL')
            ->andWhere('c IS NOT NULL')
            ->andWhere('p.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->andWhere('d.etat = :valide')
            ->setParameter('valide', 'valide')
            ->setParameter('user', $user)
            ->setParameter('id', $id)
            ->orderBy('p.nomchantier', 'asc');
        return $query->getQuery()->getResult();
    }


    public function findChantieres($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('p.corbeille IS NOT NULL')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc');
        return $query->getQuery()->getResult();
    }


    public function chChantiers($value, $user)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.nomchantier LIKE :val')
            ->andWhere('a.user =:vale')
            ->setParameter('val', '%'.$value.'%')
            ->setParameter('vale', $user)
            ->getQuery()
            ->execute();
    }

    public function findPlannings($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.plannings', 'c')
            ->where('p.user = :user')
            ->andWhere('c.id IS NOT NULL')
            ->setParameter('user', $user);
        return $query->getQuery()->getResult();
    }

    public function findChanBilan($user,$debut): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->andWhere('p.ddebut IS NOT NULL')
            ->andWhere('p.ddebut > :debut')
            ->setParameter('user', $user)
            ->setParameter('debut', $debut)
            ->orderBy('p.ddebut', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findChanStart($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->innerJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findStart($user, $a): array
    {
        $query = $this->createQueryBuilder('p')
            ->innerJoin('p.client', 'c')
            ->where('p.user = :user')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('p.corbeille IS NULL')
            ->andWhere('c.nomclient LIKE :val')
            ->setParameter('user', $user)
            ->setParameter('val', '%'.$a.'%')
            ->orderBy('c.nomclient', 'asc');
        return $query->getQuery()->getResult();
    }


    public function findValide($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.validers', 'v')
            ->where('p.user = :user')
            ->andWhere('v.type= :typ')
            ->setParameter('user', $user)
            ->setParameter('typ', 3)
            ->orderBy('v.date', 'asc');
        return $query->getQuery()->getResult();
    }


}
