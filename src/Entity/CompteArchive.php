<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CompteArchiveRepository")
 */
class CompteArchive
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $idcomptejoueur;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $pseudojoueur;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $numerocompte;

    public function getIdcomptejoueur(): ?int
    {
        return $this->idcomptejoueur;
    }

    public function setIdcomptejoueur(int $idcomptejoueur): self
    {
        $this->idcomptejoueur = $idcomptejoueur;

        return $this;
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

    public function getNumerocompte(): ?string
    {
        return $this->numerocompte;
    }

    public function setNumerocompte(string $numerocompte): self
    {
        $this->numerocompte = $numerocompte;

        return $this;
    }
}
