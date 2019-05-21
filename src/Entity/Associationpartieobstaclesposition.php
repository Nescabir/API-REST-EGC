<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Associationpartieobstaclesposition
 *
 * @ApiResource
 * @ORM\Table(name="associationpartieobstaclesposition", indexes={@ORM\Index(name="idObstacle", columns={"idObstacle"}), @ORM\Index(name="IDX_2CFCDE2668AB7A7", columns={"idPartie"})})
 * @ORM\Entity
 */
class Associationpartieobstaclesposition
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPosition", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idposition;

    /**
     * @var \Parties
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Parties")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPartie", referencedColumnName="idPartie")
     * })
     */
    private $idpartie;

    /**
     * @var \Obstacles
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Obstacles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idObstacle", referencedColumnName="idObstacle")
     * })
     */
    private $idobstacle;

    public function getIdposition(): ?int
    {
        return $this->idposition;
    }

    public function getIdpartie(): ?Parties
    {
        return $this->idpartie;
    }

    public function setIdpartie(?Parties $idpartie): self
    {
        $this->idpartie = $idpartie;

        return $this;
    }

    public function getIdobstacle(): ?Obstacles
    {
        return $this->idobstacle;
    }

    public function setIdobstacle(?Obstacles $idobstacle): self
    {
        $this->idobstacle = $idobstacle;

        return $this;
    }

    public function setIdposition(int $idposition): self
    {
        $this->idposition = $idposition;

        return $this;
    }


}
