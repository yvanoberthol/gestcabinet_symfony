<?php

namespace App\Repository;

use App\Entity\Responsabilite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Responsabilite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Responsabilite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Responsabilite[]    findAll()
 * @method Responsabilite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponsabiliteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Responsabilite::class);
    }

    // /**
    //  * @return Responsabilite[] Returns an array of Responsabilite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Responsabilite
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
