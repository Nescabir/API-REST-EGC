<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OperationArchiveRepository")
 */
class OperationArchive
{
    /**
     * @var int
     *
     * @ORM\Column(name="idOperationArchive", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperationarchive;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nomoperation;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateoperation;

    /**
     * @var string
     * @ORM\Column(name="numeroCompte", type="string", length=45, nullable=false)
     */
    private $numerocompte;

    public function getIdoperationarchive(): ?int
    {
        return $this->idoperationarchive;
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

    public function getDateoperation(): ?\DateTimeInterface
    {
        return $this->dateoperation;
    }

    public function setDateoperation(\DateTimeInterface $dateoperation): self
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

}
