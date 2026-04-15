<?php

namespace App\Repository;

use App\Entity\Relever;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Relever|null find($id, $lockMode = null, $lockVersion = null)
 * @method Relever|null findOneBy(array $criteria, array $orderBy = null)
 * @method Relever[]    findAll()
 * @method Relever[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReleverRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Relever::class);
    }

    public function findByMois($user): mixed
    {
        return $this->createQueryBuilder('re')
            ->leftJoin('re.devis', 'de')
            ->where('de.user = :user')
            ->andWhere('re.type = :aa')
            ->setParameter('user', $user)
            ->setParameter('aa', "3")
            ->orderBy('re.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    public function findClients($client): mixed
    {
        return $this->createQueryBuilder('re')
            ->leftJoin('re.chantier', 'de')
            ->where('re.client = :client')
            ->setParameter('client', $client)
            ->orderBy('re.chantier', 'asc')
            ->getQuery()
            ->getResult();
    }

    public function findAlle($user)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->setParameter('user', $user)
            ->orderBy('d.date', 'asc')
            ->getQuery()
            ->getResult();
    }

}
