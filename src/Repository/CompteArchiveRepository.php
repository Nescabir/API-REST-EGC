<?php

namespace App\Repository;

use App\Entity\CompteArchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CompteArchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteArchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteArchive[]    findAll()
 * @method CompteArchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteArchiveRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CompteArchive::class);
    }

//    /**
//     * @return CompteArchive[] Returns an array of CompteArchive objects
//     */
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
    public function findOneBySomeField($value): ?CompteArchive
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
