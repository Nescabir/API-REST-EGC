<?php

namespace App\Repository;

use App\Entity\JoueurArchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method JoueurArchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method JoueurArchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method JoueurArchive[]    findAll()
 * @method JoueurArchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JoueurArchiveRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, JoueurArchive::class);
    }

//    /**
//     * @return JoueurArchive[] Returns an array of JoueurArchive objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JoueurArchive
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
