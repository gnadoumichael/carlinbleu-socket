<?php

namespace App\Repository;

use App\Entity\Fichier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fichier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fichier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fichier[]    findAll()
 * @method Fichier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fichier::class);
    }

     /**
      * @return Fichier[] Returns an array of Fichier objects
      */
    public function findByTache($user): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.tache IS NOT NULL')
            ->andWhere('f.user = :val')
            ->setParameter('val', $user)
            ->orderBy('f.id', 'asc')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findFichiers($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.chantier', 'c')
            ->leftJoin('c.client', 'cl')
            ->where('p.user = :user')
            ->setParameter('user', $user)
            ->orderBy('cl.nomclient', 'asc');
        return $query->getQuery()->getResult();
    }


    /*
    public function findOneBySomeField($value): ?Fichier
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
