<?php

namespace App\Repository;

use App\Entity\ClientResponsabilite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ClientResponsabilite|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientResponsabilite|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientResponsabilite[]    findAll()
 * @method ClientResponsabilite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientResponsabiliteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientResponsabilite::class);
    }

    // /**
    //  * @return ClientResponsabilite[] Returns an array of ClientResponsabilite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientResponsabilite
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
