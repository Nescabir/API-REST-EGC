<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Obstacles
 *
 * @ApiResource(
 *     collectionOperations={
 *       "get",
 *       "post",
 *       "byPartie"={
 *          {"route_name"="byPartie"},
 *          "swagger_context" = {
 *              "operationId"="getbyPartie",
 *              "parameters" = {
 *                  {
 *                      "name" = "idPartie",
 *                      "required" = true,
 *                      "type" = "integer",
 *                      "in" = "path",
 *                      "description" = "Affiche les obstacles en fonction de la partie"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      }
 *     },
 *     itemOperations={
 *      "get",
 *      "put",
 *      "delete",
 *     }
 * )
 * @ORM\Table(name="obstacles")
 * @ORM\Entity(repositoryClass="App\Repository\ObstaclesRepository")
 */
class Obstacles
{
    /**
     * @var int
     *
     * @ORM\Column(name="idObstacle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idobstacle;

    /**
     * @var string
     *
     * @ORM\Column(name="typeObstacle", type="string", length=45, nullable=false)
     */
    private $typeobstacle;

    /**
     * @var int
     *  
     * @ORM\Column(name="difficulte", type="integer", nullable=false)
     */
    private $difficulte;

    public function getIdobstacle(): ?int
    {
        return $this->idobstacle;
    }

    public function getTypeobstacle(): ?string
    {
        return $this->typeobstacle;
    }

    public function setTypeobstacle(string $typeobstacle): self
    {
        $this->typeobstacle = $typeobstacle;

        return $this;
    }

    public function getDifficulte(): ?int
    {
        return $this->difficulte;
    }

    public function setDifficulte(int $difficulte): self
    {
        $this->difficulte = $difficulte;

        return $this;
    }

}
