<?php
/**
 * Created by PhpStorm.
 * User: Baptiste
 * Date: 16/11/2018
 * Time: 17:00
 */

namespace App\Repository;
use App\Entity\Parties;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Parties|null find($id, $lockMode = null, $lockVersion = null)
 * @method Parties|null findOneBy(array $criteria, array $orderBy = null)
 * @method Parties[]    findAll()
 * @method Parties[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartiesRepository extends EntityRepository
{
    // public function __construct(RegistryInterface $registry)
    // {
    //     parent::__construct($registry, Parties::class);
    // }

    /**
     * @return Parties[]
     *
     */
    public function findPartiesByDate($date)
    {
        $sql = "SELECT p FROM App\Entity\Parties p WHERE p.dateheuredebutpartie LIKE '".$date."%'";

        return $this->getEntityManager()
            ->createQuery($sql)
            ->getResult();
    }

    // public function findByPartie($idPartie)
    // {
    //     $sql = "select typeObstacle from Obstacles join associationpartieobstaclesposition on Obstacles.idObstacle=associationpartieobstaclesposition.idObstacle join Parties on Parties.idPartie=associationpartieobstaclesposition.idPartie where Parties.idPartie=:IdPartie";
    //
    //     $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
    //     $stmt->execute(array(':IdPartie'=>$idPartie));
    //
    //     return $stmt->fetchAll(\PDO::FETCH_CLASS,'App\Entity\Obstacles');
    // }

    // /**
    //  * @return Parties[] Returns an array of Parties objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Parties
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
