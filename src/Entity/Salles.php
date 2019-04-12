<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Salles
 *
 * @ApiResource
 * @ORM\Table(name="salles")
 * @ORM\Entity
 */
class Salles
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsalle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSalle", type="string", length=45, nullable=false)
     */
    private $nomsalle;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=45, nullable=false)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="acces", type="string", length=255, nullable=false)
     */
    private $acces;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean", nullable=false)
     */
    private $statut;

    public function getIdsalle(): ?int
    {
        return $this->idsalle;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNomsalle(): ?string
    {
        return $this->nomsalle;
    }

    public function setNomsalle(string $nomsalle): self
    {
        $this->nomsalle = $nomsalle;

        return $this;
    }

    public function getAcces(): ?string
    {
        return $this->acces;
    }

    public function setAcces(string $acces): self
    {
        $this->acces = $acces;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
