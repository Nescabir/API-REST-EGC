<?php

namespace App\Repository;

use App\Entity\ImagesParties;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ImagesParties|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImagesParties|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImagesParties[]    findAll()
 * @method ImagesParties[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImagesPartiesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ImagesParties::class);
    }

    // /**
    //  * @return ImagesParties[] Returns an array of ImagesParties objects
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
    public function findOneBySomeField($value): ?ImagesParties
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
