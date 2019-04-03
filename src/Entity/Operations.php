<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use phpDocumentor\Reflection\Types\Integer;

/**
 * Operations
 *
 * @ApiResource(
 *     collectionOperations={
 *       "get",
 *       "post",
 *       "byNumerocompteJoueur"={
 *          {"route_name"="byNumerocompteJoueur"},
 *          "swagger_context" = {
 *              "operationId"="getByNumerocompteJoueur",
 *              "parameters" = {
 *                  {
 *                      "name" = "numerocompte",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "Affiche les opérations par compte"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      },
 *      "operationsByDate"={
 *          {"route_name"="operationsByDate"},
 *          "swagger_context" = {
 *              "operationId"="getOperationsByDate",
 *              "parameters" = {
 *                  {
 *                      "name" = "date",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "Affiche les opérations par date"
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
 *      "delete"
 *     }
 * )
 * @ORM\Table(name="operations", indexes={@ORM\Index(name="idCompteJoueur", columns={"idCompteJoueur"})})
 * @ORM\Entity(repositoryClass="App\Repository\OperationsRepository")
 */
class Operations
{
    /**
     * @var int
     *
     * @ORM\Column(name="idOperation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="nomOperation", type="string", length=45, nullable=false)
     */
    private $nomoperation;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     *
     * @ORM\Column(name="dateOperation", type="datetime", nullable=false)
     *
     */
    private $dateoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroCompte", type="string", length=45, nullable=false)
     */
    private $numerocompte;

    /**
     * @var Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCompteJoueur", referencedColumnName="idCompteJoueur")
     * })
     */
    private $idcomptejoueur;

    public function getIdoperation(): ?int
    {
        return $this->idoperation;
    }

    public function getNomoperation(): ?string
    {
        return $this->nomoperation;
    }

    public function setNomoperation(string $nomoperation): self
    {
        $this->nomoperation = $nomoperation;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateoperation()
    {
        return $this->dateoperation;

    }

    public function setDateoperation($dateoperation): self
    {
        $this->dateoperation = $dateoperation;

        return $this;
    }

    public function getNumerocompte(): ?string
    {
        return $this->numerocompte;
    }

    public function setNumerocompte(string $numerocompte): self
    {
        $this->numerocompte = $numerocompte;

        return $this;
    }

    public function getIdcomptejoueur(): ?Compte
    {
        return $this->idcomptejoueur;
    }

    public function setIdcomptejoueur(?Compte $idcomptejoueur): self
    {
        $this->idcomptejoueur = $idcomptejoueur;

        return $this;
    }


}
