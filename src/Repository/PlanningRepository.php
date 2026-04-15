<?php

namespace App\Repository;

use App\Entity\Planning;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Planning|null find($id, $lockMode = null, $lockVersion = null)
 * @method Planning|null findOneBy(array $criteria, array $orderBy = null)
 * @method Planning[]    findAll()
 * @method Planning[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Planning::class);
    }

    /**
     * @return Planning[] Returns an array of Planning objects
     */
    public function chPlannings($user): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.client', 'c')
            ->where('p.user = :ur')
            ->orderBy('c.nomclient', 'asc')
            ->setParameter('ur', $user);
        return $query->getQuery()->getResult();
    }

    /**
     * @param $user
     * @return Planning[]
     */
    public function findPlannings($user): array
    {
        $query = $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->setParameter('user', $user);
        return $query->getQuery()->getResult();
    }


}
