<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Chantier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
    * @return Article[] Returns an array of Article objects
    */
    public function chArticle($value,$user)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.designation LIKE :val')
            ->andWhere('a.vente = :val2')
            ->andWhere('a.user =:vale')
            ->setParameter('val', '%'.$value.'%')
            ->setParameter('val2', 'oui')
            ->setParameter('vale', $user)
            ->getQuery()
            ->execute();
    }

    /**
     * @return Article[] Returns an array of Article objects
     */
    public function chArticles($value, $user)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.designation LIKE :val')
            ->andWhere('a.user =:vale')
            ->setParameter('val', '%'.$value.'%')
            ->setParameter('vale', $user)
            ->getQuery()
            ->execute();
    }



    public function findByUser($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.user = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }


    /**
     * @param $user
     * @return Article[] Returns an array of Article objects
     */
    public function chArticlesligne($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.lignes', 'c')
            ->orderBy('p.designation', 'asc')
            ->where('c.article  IS NOT NULL')
            ->andWhere('p.user = :use')
            ->andWhere('c.bon  IS NOT NULL')
            ->setParameter('use', $user);
        return $query->getQuery()->getResult();
    }





    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
