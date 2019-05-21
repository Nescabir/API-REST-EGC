<?php
/**
 * Created by PhpStorm.
 * User: Baptiste
 * Date: 16/11/2018
 * Time: 17:00
 */

namespace App\Repository;
use App\Entity\Obstacles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Obstacles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Obstacles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Obstacles[]    findAll()
 * @method Obstacles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObstaclesRepository extends EntityRepository
{

    /**
     * @return Obstacles[]
     *
     */
    public function findObstaclesByPartie($idPartie)
    {
        $sql = "SELECT o.typeobstacle FROM App\Entity\Associationpartieobstaclesposition apop JOIN apop.idobstacle o JOIN apop.idpartie p WHERE p.idpartie =".$idPartie;

        return $this->getEntityManager()
            ->createQuery($sql)
            ->getResult();
    }
}
