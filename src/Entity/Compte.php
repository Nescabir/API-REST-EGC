<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Compte
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
 *      "byPseudojoueur"={
 *          {"route_name"="byPseudojoueur"},
 *          "swagger_context" = {
 *              "operationId"="getByPseudojoueur",
 *              "parameters" = {
 *                  {
 *                      "name" = "pseudojoueur",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "Affiche le compte du joueur via son pseudo"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      }
 *     }
 * )
 * @ORM\Table(name="compte", uniqueConstraints={@ORM\UniqueConstraint(name="numeroCompte", columns={"numeroCompte"})})
 * @ORM\Entity
 */
class Compte
{

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="Joueur")
     * @ORM\Column(name="idCompteJoueur", type="integer", nullable=false)
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idCompteJoueur", referencedColumnName="idJoueur")
     * })
     */
    private $idcomptejoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoJoueur", type="string", length=20, nullable=false)
     */
    private $pseudojoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroCompte", type="string", length=45, nullable=false)
     */
    private $numerocompte;

    public function getPseudojoueur(): ?string
    {
        return $this->pseudojoueur;
    }

    public function setPseudojoueur(string $pseudojoueur): self
    {
        $this->pseudojoueur = $pseudojoueur;

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

    public function getIdcomptejoueur(): ?int
    {
        return $this->idcomptejoueur;
    }

    public function setIdcomptejoueur(?int $idcomptejoueur): self
    {
        $this->idcomptejoueur = $idcomptejoueur;

        return $this;
    }


}
