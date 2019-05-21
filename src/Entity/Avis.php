<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Avis
 *
 * @ApiResource(
 *     collectionOperations={
 *       "get",
 *       "post",
 *       "byPseudojoueurAvis"={
 *          {"route_name"="byPseudojoueurAvis"},
 *          "swagger_context" = {
 *              "operationId"="getByPseudojoueurAvis",
 *              "parameters" = {
 *                  {
 *                      "name" = "pseudojoueur",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "Affiche les avis du joueur via son pseudo"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      },
 *      "bySalleAvis"={
 *          {"route_name"="bySalleAvis"},
 *          "swagger_context" = {
 *              "operationId"="getBySalleAvis",
 *              "parameters" = {
 *                  {
 *                      "name" = "idsalle",
 *                      "required" = true,
 *                      "type" = "integer",
 *                      "in" = "path",
 *                      "description" = "Affiche les avis via l'id de la salle"
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
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="idJoueur", columns={"idJoueur"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAvis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idavis;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoJoueur", type="string", length=20, nullable=false)
     */
    private $pseudojoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    /**
     *
     * @ORM\Column(name="dateAvis", type="datetime", nullable=false)
     *
     */
    private $dateavis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombreEtoile", type="integer", nullable=true)
     */
    private $nombreetoile;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idJoueur", referencedColumnName="idJoueur")
     * })
     */
    private $idjoueur;

    /**
     * @var \Salles
     *
     * @ORM\ManyToOne(targetEntity="Salles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle", nullable=false)
     * })
     */
    private $idsalle;

    public function getIdavis(): ?int
    {
        return $this->idavis;
    }

    public function getPseudojoueur(): ?string
    {
        return $this->pseudojoueur;
    }

    public function setPseudojoueur(string $pseudojoueur): self
    {
        $this->pseudojoueur = $pseudojoueur;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateavis()
    {
        return $this->dateavis;
    }

    public function setDateavis($dateavis): self
    {
        $this->dateavis = $dateavis;

        return $this;
    }

    public function getNombreetoile(): ?int
    {
        return $this->nombreetoile;
    }

    public function setNombreetoile(?int $nombreetoile): self
    {
        $this->nombreetoile = $nombreetoile;

        return $this;
    }

    public function getIdjoueur(): ?Joueur
    {
        return $this->idjoueur;
    }

    public function setIdjoueur(?Joueur $idjoueur): self
    {
        $this->idjoueur = $idjoueur;

        return $this;
    }

    public function getIdSalle(): ?Salles
    {
        return $this->idsalle;
    }

    public function setIdSalle(?Salles $idsalle): self
    {
        $this->idsalle = $idsalle;

        return $this;
    }

}
