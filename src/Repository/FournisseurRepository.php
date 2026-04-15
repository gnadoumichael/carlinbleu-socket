<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Fournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fournisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fournisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fournisseur[]    findAll()
 * @method Fournisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fournisseur::class);
    }


    public function findByUser($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.users = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }


    public function findPrestas($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.type = :type')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('type', 3)
            ->orderBy('d.fournisseur', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findFournise($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.type = :type')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('type', 1)
            ->orderBy('d.fournisseur', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findFournis($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->innerJoin('d.bons', 'q')
            ->where('d.user = :user')
            ->andWhere('d.type = :type')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('q.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('type', 1)
            ->orderBy('d.fournisseur', 'asc');
        return $query->getQuery()->getResult();
    }

    public function findFournes($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.type = :type')
            ->andWhere('d.corbeille IS NULL')
            ->orderBy('d.fournisseur', 'asc')
            ->setParameter('user', $user)
            ->setParameter('type', 1)
        ;
        return $query->getQuery()->getResult();
    }

}
