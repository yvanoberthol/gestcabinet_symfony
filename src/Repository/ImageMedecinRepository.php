<?php

namespace App\Repository;

use App\Entity\ImageMedecin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ImageMedecin|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageMedecin|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageMedecin[]    findAll()
 * @method ImageMedecin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageMedecinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageMedecin::class);
    }

    // /**
    //  * @return ImageMedecin[] Returns an array of ImageMedecin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageMedecin
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
