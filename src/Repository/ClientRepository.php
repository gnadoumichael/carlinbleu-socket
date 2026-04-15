<?php

namespace App\Repository;

use App\Entity\Chantier;
use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Client|null find($id, $lockMode = null, $lockVersion = null)
 * @method Client|null findOneBy(array $criteria, array $orderBy = null)
 * @method Client[]    findAll()
 * @method Client[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }


    public function GetAllUser($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.user = :val')
            ->setParameter('val', $value)
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }


    public function finddClients($user)
    {
        return $this->createQueryBuilder('c')
            ->where('c.corbeille IS NULL')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findClients($user)
    {
        return $this->createQueryBuilder('c')
            ->where('c.corbeille IS NULL')
            ->andWhere('c.etat = :tt')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->setParameter('tt', "bon")
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findClientas($user)
    {
        return $this->createQueryBuilder('c')
            ->where('c.corbeille IS NULL')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findClientsPython($user)
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.chantiers', 'ch')
            ->where('c.corbeille IS NULL')
            ->andWhere('ch.corbeille IS NULL')
            ->andWhere('c.type IS NULL')
            ->andWhere('ch.client IS NOT NULL')
            ->andWhere('ch.type IS NULL')
            ->andWhere('c.user = :user')
            ->andWhere('c.etat = :tt')
            ->setParameter('tt', "bon")
            ->setParameter('etat', "archiver")
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findClientsChantiersCoursPython($user)
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.chantiers', 'ch')
            ->where('c.corbeille IS NULL')
            ->andWhere('ch.corbeille IS NULL')
            ->andWhere('c.type IS NULL')
            ->andWhere('ch.client IS NOT NULL')
            ->andWhere('ch.type IS NULL')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findClientInventaire($user)
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.chantiers', 'ch')
            ->leftJoin('ch.lignes', 'li')
            ->where('c.corbeille IS NULL')
            ->andWhere('c.type IS NULL')
            ->andWhere('ch.client IS NOT NULL')
            ->andWhere('ch.type IS NULL')
            ->andWhere('li.type = :val')
            ->andWhere('li.article IS NOT NULL')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->setParameter('val', '2')
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findClientes($user)
    {
        return $this->createQueryBuilder('c')
            ->where('c.corbeille IS NOT NULL')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findByUser($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.user = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findPlannings($user): array
    {
        $query = $this->createQueryBuilder('cl')
            ->leftJoin('cl.plannings', 'pl')
            ->leftJoin('cl.chantiers', 'ch')
            ->where('cl.user = :user')
            ->andWhere('pl.id IS NOT NULL')
            ->andWhere('pl.corbeille IS NULL')
            ->orderBy('cl.nomclient', 'asc')
            ->setParameter('user', $user);
        return $query->getQuery()->getResult();
    }

    public function findPlanninges($user,$val): array
    {
        $query = $this->createQueryBuilder('cl')
            ->leftJoin('cl.plannings', 'pl')
            ->leftJoin('cl.chantiers', 'ch')
            ->where('cl.user = :user')
            ->andWhere('pl.id IS NOT NULL')
            ->andWhere('pl.corbeille IS NULL')
            ->andWhere('ch.nomchantier LIKE :val')
            ->orderBy('cl.nomclient', 'asc')
            ->setParameter('user', $user)
            ->setParameter('val', '%'.$val.'%')
        ;
        return $query->getQuery()->getResult();
    }

    public function findEtats($user,$val)
    {
        return $this->createQueryBuilder('c')
            ->where('c.corbeille IS NULL')
            ->andWhere('c.type IS NULL')
            ->andWhere('c.user = :user')
            ->andWhere('c.nomclient LIKE :val')
            ->setParameter('user', $user)
            ->setParameter('val', '%'.$val.'%')
            ->orderBy('c.nomclient', 'asc')
            ->getQuery()
            ->getResult();
    }

}
