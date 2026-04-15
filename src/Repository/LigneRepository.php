<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Ligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ligne[]    findAll()
 * @method Ligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ligne::class);
    }
    public function inventaire($value): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.chantier = :val')
            ->andWhere('l.type = :vale')
            ->setParameter('val', $value)
            ->setParameter('vale', 2)
            ->orderBy('l.designation', 'asc')
            ->getQuery()
            ->execute();
    }
    public function inventaires(): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.type = :vale')
            ->setParameter('vale', 2)
            ->getQuery()
            ->execute();
    }
    public function getlignefacture($facture): array
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.groupe', 'g')
            ->andWhere('l.chantier = :chan')
            ->andWhere('l.facture = :dev')
            ->setParameter('dev', $facture)
            ->setParameter('chan', $facture->getChantier())
            ->getQuery()
            ->execute();
    }


    public function findDisctinct($value)
    {
        return $this->createQueryBuilder('l')
            ->select('l.designation')
            ->andWhere('l.chantier = :val')
            ->andWhere('l.type = :vale')
            ->setParameter('val', $value)
            ->setParameter('vale', 2)
            ->distinct()
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Ligne[] Returns an array of Ligne objects
     */
    public function getlignedevis($devis): array
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.groupe', 'g')
            ->andWhere('l.chantier = :chan')
            ->andWhere('l.devis = :dev')
            ->setParameter('dev', $devis)
            ->setParameter('chan', $devis->getChantier())
            ->orderBy('g.reference', 'asc')
            ->getQuery()
            ->execute();
    }

    /**
     * @return Ligne[] Returns an array of Ligne objects
     */
    public function getlignecaisse($caisse): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.chantier = :chan')
            ->andWhere('l.caisse = :caisse')
            ->setParameter('caisse', $caisse)
            ->setParameter('chan', $caisse->getChantier())
            ->getQuery()
            ->execute();
    }


     /**
     * @return Ligne[] Returns an array of Ligne objects
     */
    public function getlignedecompte($decompte): array
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.groupe', 'g')
            ->andWhere('l.chantier = :chan')
            ->andWhere('l.decompte = :dec')
            ->setParameter('dec', $decompte)
            ->setParameter('chan', $decompte->getChantier())
            ->orderBy('g.id', 'asc')
            ->getQuery()
            ->execute();
    }


    /*
    public function findOneBySomeField($value): ?Ligne
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
