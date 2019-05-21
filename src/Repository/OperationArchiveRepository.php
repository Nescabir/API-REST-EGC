<?php

namespace App\Repository;

use App\Entity\OperationArchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OperationArchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method OperationArchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method OperationArchive[]    findAll()
 * @method OperationArchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperationArchiveRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OperationArchive::class);
    }

//    /**
//     * @return OperationArchive[] Returns an array of OperationArchive objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OperationArchive
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
