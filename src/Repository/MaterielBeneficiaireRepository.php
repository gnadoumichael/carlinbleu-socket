<?php

namespace App\Repository;

use App\Entity\MaterielBeneficiaire;
use App\Entity\MaterielChantier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MaterielBeneficiaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method MaterielBeneficiaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method MaterielBeneficiaire[]    findAll()
 * @method MaterielBeneficiaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterielBeneficiaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaterielBeneficiaire::class);
    }

    /**
     * @return MaterielChantier[]
     */
    public function findBu($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.mouvement = :mov')
            ->andWhere('m.quantite > 0')
            ->andWhere('m.user = :user')
            ->setParameter('user', $user)
            ->setParameter('mov', "attribution")
            ->orderBy('m.date', 'desc')
            ->getQuery()
            ->getResult()
            ;
    }


    /*
    public function findOneBySomeField($value): ?MaterielBeneficiaire
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
