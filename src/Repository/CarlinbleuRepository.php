<?php

namespace App\Repository;

use App\Entity\Carlinbleu;
use App\Entity\Chantier;
use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Carlinbleu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carlinbleu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carlinbleu[]    findAll()
 * @method Carlinbleu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarlinbleuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carlinbleu::class);
    }

    /**
     * @param $user
     * @param $date
     * @return mixed
     */
    public function findByeDate($user, $date)
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.date LIKE :date')
            ->setParameter('user', $user)
            ->setParameter('date', $date.'%')
            ->getQuery()
            ->getResult();
    }


}
