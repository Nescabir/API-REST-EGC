<?php
/**
 * Created by PhpStorm.
 * User: Baptiste
 * Date: 16/11/2018
 * Time: 17:00
 */

namespace App\Repository;
use App\Entity\Operations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Operations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Operations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Operations[]    findAll()
 * @method Operations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperationsRepository extends EntityRepository
{

    /**
     * @return Operations[]
     *
     */
    public function findOperationsByNumCompte($numeroCompte)
    {
        $sql = "SELECT o.idoperation, o.dateoperation, o.nomoperation, o.montant FROM App\Entity\Operations o WHERE o.numerocompte='".$numeroCompte."'";

        return $this->getEntityManager()
            ->createQuery($sql)
            ->getResult();
    }

    /**
     * @return Operations[]
     *
     */
    public function findOperationsByDate($date)
    {
        $sql = "SELECT o FROM App\Entity\Operations o WHERE o.dateoperation LIKE '".$date."%'";

        return $this->getEntityManager()
            ->createQuery($sql)
            ->getResult();
    }
}
