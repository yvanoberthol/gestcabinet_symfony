<?php

namespace App\Repository;

use App\Entity\TokenRv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TokenRv|null find($id, $lockMode = null, $lockVersion = null)
 * @method TokenRv|null findOneBy(array $criteria, array $orderBy = null)
 * @method TokenRv[]    findAll()
 * @method TokenRv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TokenRvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TokenRv::class);
    }

    // /**
    //  * @return TokenRv[] Returns an array of TokenRv objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TokenRv
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
