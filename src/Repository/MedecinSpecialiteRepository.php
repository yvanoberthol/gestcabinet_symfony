<?php

namespace App\Repository;

use App\Entity\MedecinSpecialite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MedecinSpecialite|null find($id, $lockMode = null, $lockVersion = null)
 * @method MedecinSpecialite|null findOneBy(array $criteria, array $orderBy = null)
 * @method MedecinSpecialite[]    findAll()
 * @method MedecinSpecialite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedecinSpecialiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MedecinSpecialite::class);
    }

    // /**
    //  * @return MedecinSpecialite[] Returns an array of MedecinSpecialite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MedecinSpecialite
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
