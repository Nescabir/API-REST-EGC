<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Joueur
 *
 * @ApiResource(
 *     collectionOperations={
 *       "get",
 *       "post",
 *     },
 *     itemOperations={
 *      "get",
 *      "put",
 *      "delete",
 *      "byPseudo"={
 *          {"route_name"="byPseudo"},
 *          "swagger_context" = {
 *              "operationId"="getByPseudo",
 *              "parameters" = {
 *                  {
 *                      "name" = "pseudo",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "Pseudo du joueur"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      },
 *      "byIdjoueur"={
 *          {"route_name"="byIdjoueur"},
 *          "swagger_context" = {
 *              "operationId"="getByIdjoueur",
 *              "parameters" = {
 *                  {
 *                      "name" = "idjoueur",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "Id du joueur"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      }
 *     }
 * )
 * @ORM\Table(name="joueur", uniqueConstraints={@ORM\UniqueConstraint(name="pseudo", columns={"pseudo"})})
 * @ORM\Entity
 */
class Joueur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idJoueur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idjoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=20, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     *
     * @ORM\Column(name="dateNaissance", type="datetime", nullable=false)
     */
    private $datenaissance;

    /**
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroTelephone", type="string", length=15, nullable=false)
     */
    private $numerotelephone;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreParties", type="integer", nullable=false, options={"default" : 0})
     */
    private $nombreparties;

    public function getIdjoueur(): ?int
    {
        return $this->idjoueur;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    public function setDatenaissance($datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getDatecreation()
    {
        return $this->datecreation;
    }

    public function setDatecreation($datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getNumerotelephone(): ?string
    {
        return $this->numerotelephone;
    }

    public function setNumerotelephone(string $numerotelephone): self
    {
        $this->numerotelephone = $numerotelephone;

        return $this;
    }

    public function getNombreparties(): ?int
    {
        return $this->nombreparties;
    }

    public function setNombreparties(int $nombreparties): self
    {
        $this->nombreparties = $nombreparties;

        return $this;
    }


}
