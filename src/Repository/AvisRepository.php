<?php

namespace App\Repository;

use App\Entity\Avis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Avis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avis[]    findAll()
 * @method Avis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Avis::class);
    }

     /**
      * @return Avis[] Returns an array of Avis objects
      */
    public function findByIdsalle($idsalle)
    {
        $sql = "select * from Avis join Salles on Avis.idSalle=Salles.idSalle where Salles.nomSalle=:Salle";

        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute(array(':IdSalle'=>$idsalle));

      return $stmt->fetchAll(\PDO::FETCH_CLASS,'App\Entity\Avis');
    }

    // /**
    //  * @return AvisSalle[] Returns an array of AvisSalle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AvisSalle
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
