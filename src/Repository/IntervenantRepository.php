<?php

namespace App\Repository;

use App\Entity\Intervenant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Intervenant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Intervenant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Intervenant[]    findAll()
 * @method Intervenant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntervenantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Intervenant::class);
    }


    public function findAllInterves($user , $chantier)
    {
        return $this->createQueryBuilder('i')
            ->where('i.chantier = :chan')
            ->andWhere('i.user = :user')
            ->setParameter('chan', $chantier)
            ->setParameter('user', $user)
            ->orderBy('i.nom', 'asc')
            ->getQuery()
            ->getResult()
            ;
    }


    /**
    * @return Intervenant[] Returns an array of Intervenant objects
     */
    public function findInterves($user , $chantier)
    {
        return $this->createQueryBuilder('i')
            ->where('i.chantier = :chan')
            ->andWhere('i.user = :user')
            ->andWhere('i.type IS NULL')
            ->setParameter('chan', $chantier)
            ->setParameter('user', $user)
            ->orderBy('i.nom', 'asc')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Intervenant[] Returns an array of Intervenant objects
     */
    public function findOper($user , $chantier)
    {
        return $this->createQueryBuilder('i')
            ->where('i.chantier = :chan')
            ->andWhere('i.user = :user')
            ->andWhere('i.type IS NOT NULL')
            ->setParameter('chan', $chantier)
            ->setParameter('user', $user)
            ->orderBy('i.nom', 'asc')
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?Intervenant
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
