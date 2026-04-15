<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Bon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bon[]    findAll()
 * @method Bon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bon::class);
    }

    public function findBons($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user);
        return $query->getQuery()->getResult();
    }

    public function findeBons($user, $four): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.etat = :et')
            ->andWhere('d.fournisseur = :four')
            ->setParameter('user', $user)
            ->setParameter('et', "valide")
            ->setParameter('four', $four);
        return $query->getQuery()->getResult();
    }

    public function findeBonsChantiers($user, $four, $chantier): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.etat = :et')
            ->andWhere('d.fournisseur = :four')
            ->andWhere('d.chantier = :chan')
            ->setParameter('user', $user)
            ->setParameter('et', "valide")
            ->setParameter('four', $four)
            ->setParameter('chan', $chantier);
        return $query->getQuery()->getResult();
    }

    /**
     * @param $value
     * @return Bon|null
     * @throws NonUniqueResultException
     */
    public function findOneLast($value): ?Bon
    {
        return $this->createQueryBuilder('d')
            ->where('d.type = :vale')
            ->andWhere('d.user = :val')
            ->setParameter('val', $value)
            ->setParameter('vale', 'none')
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param $value
     * @return Bon|null
     * @throws NonUniqueResultException
     */
    public function findOneLaste($value): ?Bon
    {
        return $this->createQueryBuilder('d')
            ->where('d.type = :vale')
            ->orWhere('d.type = :vala')
            ->orWhere('d.type = :valu')
            ->andWhere('d.user = :val')
            ->setParameter('val', $value)
            ->setParameter('vale', 'oui')
            ->setParameter('vala', 'non')
            ->setParameter('valu', 'pst')
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param $value
     * @return Bon|null
     * @throws NonUniqueResultException
     */
    public function findOneLasta($value): ?Bon
    {
        return $this->createQueryBuilder('d')
            ->where('d.type = :vale')
            ->andWhere('d.user = :val')
            ->setParameter('val', $value)
            ->setParameter('vale', 'prepa')
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param $value
     * @param $devis
     * @return Bon|null
     * @throws NonUniqueResultException
     */
    public function findOneLaster($value, $devis): ?Bon
    {
        return $this->createQueryBuilder('d')
            ->where('d.type = :vale')
            ->andWhere('d.user = :val')
            ->andWhere('d.devis = :valu')
            ->setParameter('val', $value)
            ->setParameter('vale', 'none')
            ->setParameter('valu', $devis)
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function findByeDate($user, $date)
    {
        $start = new \DateTime($date . ' 00:00:00');
        $end = new \DateTime($date . ' 23:59:59');

        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date BETWEEN :start AND :end')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();
    }


    public function findByeDater($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->andWhere('d.etat = :et')
            ->andWhere('d.type = :ty')
            ->setParameter('user', $user)
            ->setParameter('date', $date . '%')
            ->setParameter('et', "valide")
            ->setParameter('ty', "oui")
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Bon[] Returns an array of Bon objects
     */
    public function chBon($article, $chantier): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.lignes', 'c')
            ->orderBy('p.date', 'asc')
            ->where('c.article = :ar')
            ->andWhere('p.chantier = :pr')
            ->andWhere('p.etat = :et')
            ->setParameter('ar', $article)
            ->setParameter('pr', $chantier)
            ->setParameter('et', "valide");
        return $query->getQuery()->getResult();
    }


    /**
     * @return Bon[] Returns an array of Bon objects
     */
    public function chBons($value, $user)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.numbon LIKE :val')
            ->andWhere('a.user =:vale')
            ->setParameter('val', '%' . $value . '%')
            ->setParameter('vale', $user)
            ->getQuery()
            ->execute();
    }

    /**
     * @param $user
     * @param $chantier
     * @param $type
     * @return mixed
     */
    public function findByChan($user, $chantier, $type): mixed
    {
        if ($type == 'none') {
            return $this->createQueryBuilder('d')
                ->where('d.user = :user')
                ->andWhere('d.chantier = :chan')
                ->andWhere('d.type = :type')
                ->andWhere('d.corbeille IS NULL')
                ->setParameter('user', $user)
                ->setParameter('chan', $chantier)
                ->setParameter('type', $type)
                ->orderBy('d.date', 'DESC')
                ->getQuery()
                ->getResult();
        }
        if ($type == 'four') {
            return $this->createQueryBuilder('d')
                ->where('d.user = :user')
                ->andWhere('d.chantier = :chan')
                ->andWhere('d.corbeille IS NULL')
                ->andWhere('d.type = :type OR d.type = :typ')
                ->andWhere('d.fournisseur IS NOT NULL')
                ->setParameter('user', $user)
                ->setParameter('chan', $chantier)
                ->setParameter('type', 'oui')
                ->setParameter('typ', 'non')
                ->orderBy('d.date', 'DESC')
                ->getQuery()
                ->getResult();
        }
        if ($type == 'presta') {
            return $this->createQueryBuilder('d')
                ->where('d.user = :user')
                ->andWhere('d.chantier = :chan')
                ->andWhere('d.corbeille IS NULL')
                ->andWhere('d.type = :type')
                ->andWhere('d.fournisseur IS NOT NULL')
                ->setParameter('user', $user)
                ->setParameter('chan', $chantier)
                ->setParameter('type', 'pst')
                ->orderBy('d.date', 'DESC')
                ->getQuery()
                ->getResult();
        }
        
        if ($type == 'prepa') {
            return $this->createQueryBuilder('d')
                ->where('d.user = :user')
                ->andWhere('d.chantier = :chan')
                ->andWhere('d.corbeille IS NULL')
                ->andWhere('d.type = :type')
                ->setParameter('user', $user)
                ->setParameter('chan', $chantier)
                ->setParameter('type', 'prepa')
                ->orderBy('d.date', 'DESC')
                ->getQuery()
                ->getResult();
        }
        

        return  null;

    }


    public function findBonfournisseurs($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.devis', 'c')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.type = :type OR d.type = :typ')
            ->andWhere('d.fournisseur IS NOT NULL')
            ->andWhere('c.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('type', 'oui')
            ->setParameter('typ', 'non')
            ->orderBy('d.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findBonSuivi($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.devis', 'c')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('d.type = :type')
            ->setParameter('user', $user)
            ->setParameter('type', 'prepa')
            ->orderBy('d.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findBonPrestataires($user): mixed
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.devis', 'c')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('d.type = :type')
            ->andWhere('d.fournisseur IS NOT NULL')
            ->andWhere('c.corbeille IS NULL')
            ->setParameter('user', $user)
            ->setParameter('type', 'pst')
            ->orderBy('d.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

}
