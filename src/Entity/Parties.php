<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Parties
 *
 * @ApiResource(
 *     collectionOperations={
 *       "get",
 *       "post",
 *       "byDate"={
 *          {"route_name"="byDate"},
 *          "swagger_context" = {
 *              "operationId"="getByDate",
 *              "parameters" = {
 *                  {
 *                      "name" = "date",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "Affiche les parties en fonction de la date"
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
 * @ORM\Table(name="parties", indexes={@ORM\Index(name="idJoueurPartie", columns={"idJoueurPartie"}), @ORM\Index(name="idSalle", columns={"idSalle"})})
 * @ORM\Entity(repositoryClass="App\Repository\PartiesRepository")
 */
class Parties
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPartie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpartie;

    /**
     *
     * @ORM\Column(name="dateHeureDebutPartie", type="datetime", nullable=false)
     *
     *
     */
    private $dateheuredebutpartie;

    /**
     * @ORM\Column(name="dateHeureFinPartie", type="datetime", nullable=false)
     *
     *
     */
    private $dateheurefinpartie;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreJoueur", type="integer", nullable=false)
     */
    private $nombrejoueur;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreObstacles", type="integer", nullable=false)
     */
    private $nombreobstacles;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idJoueurPartie", referencedColumnName="idJoueur")
     * })
     */
    private $idjoueurpartie;

    /**
     * @var \Salles
     *
     * @ORM\ManyToOne(targetEntity="Salles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idsalle;

    public function getIdpartie(): ?int
    {
        return $this->idpartie;
    }

    public function getDateheuredebutpartie()
    {
        return $this->dateheuredebutpartie;
    }

    public function setDateheuredebutpartie($dateheuredebutpartie): self
    {
        $this->dateheuredebutpartie = $dateheuredebutpartie;

        return $this;
    }

    public function getDateheurefinpartie()
    {
        return $this->dateheurefinpartie;
    }

    public function setDateheurefinpartie($dateheurefinpartie): self
    {
        $this->dateheurefinpartie = $dateheurefinpartie;

        return $this;
    }

    public function getNombrejoueur(): ?int
    {
        return $this->nombrejoueur;
    }

    public function setNombrejoueur(int $nombrejoueur): self
    {
        $this->nombrejoueur = $nombrejoueur;

        return $this;
    }

    public function getNombreobstacles(): ?int
    {
        return $this->nombreobstacles;
    }

    public function setNombreobstacles(int $nombreobstacles): self
    {
        $this->nombreobstacles = $nombreobstacles;

        return $this;
    }

    public function getIdjoueurpartie(): ?Joueur
    {
        return $this->idjoueurpartie;
    }

    public function setIdjoueurpartie(?Joueur $idjoueurpartie): self
    {
        $this->idjoueurpartie = $idjoueurpartie;

        return $this;
    }

    public function getIdsalle(): ?Salles
    {
        return $this->idsalle;
    }

    public function setIdsalle(?Salles $idsalle): self
    {
        $this->idsalle = $idsalle;

        return $this;
    }

}
