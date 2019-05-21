<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\JoueurArchiveRepository")
 */
class JoueurArchive
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="idJoueurArchive", type="integer")
     */
    private $idjoueurarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoArchive", type="string", length=20)
     */
    private $pseudoarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="nomArchive", type="string", length=20)
     */
    private $nomarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomArchive", type="string", length=20)
     */
    private $prenomarchive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissanceArchive", type="datetime")
     */
    private $datenaissancearchive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationArchive", type="datetime")
     */
    private $datecreationarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroTelephoneArchive", type="string", length=15)
     */
    private $numerotelephonearchive;

    /**
     * @var int
     *
     * @ORM\Column(name="nombrePartiesArchive", type="integer")
     */
    private $nombrepartiesarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="motdepassearchive", type="string", length=255, nullable=false)
     */
    private $motdepassearchive;

    public function getIdjoueurarchive(): ?int
    {
        return $this->idjoueurarchive;
    }

    public function setIdjoueurarchive(int $idjoueurarchive): self
    {
        $this->idjoueurarchive = $idjoueurarchive;

        return $this;
    }
    public function getPseudoarchive(): ?string
    {
        return $this->pseudoarchive;
    }

    public function setPseudoarchive(string $pseudoarchive): self
    {
        $this->pseudoarchive = $pseudoarchive;

        return $this;
    }

    public function getMotdepassearchive(): ?string
    {
        return $this->motdepassearchive;
    }

    public function setMotdepassearchive(string $motdepassearchive): self
    {
        $this->motdepassearchive = $motdepassearchive;

        return $this;
    }
    public function getNomarchive(): ?string
    {
        return $this->nomarchive;
    }

    public function setNomarchive(string $nomarchive): self
    {
        $this->nomarchive = $nomarchive;

        return $this;
    }

    public function getPrenomarchive(): ?string
    {
        return $this->prenomarchive;
    }

    public function setPrenomarchive(string $prenomarchive): self
    {
        $this->prenomarchive = $prenomarchive;

        return $this;
    }

    public function getDatenaissancearchive(): ?\DateTimeInterface
    {
        return $this->datenaissancearchive;
    }

    public function setDatenaissancearchive(\DateTimeInterface $datenaissancearchive): self
    {
        $this->datenaissancearchive = $datenaissancearchive;

        return $this;
    }

    public function getDatecreationarchive(): ?\DateTimeInterface
    {
        return $this->datecreationarchive;
    }

    public function setDatecreationarchive(\DateTimeInterface $datecreationarchive): self
    {
        $this->datecreationarchive = $datecreationarchive;

        return $this;
    }

    public function getNumerotelephonearchive(): ?string
    {
        return $this->numerotelephonearchive;
    }

    public function setNumerotelephonearchive(string $numerotelephonearchive): self
    {
        $this->numerotelephonearchive = $numerotelephonearchive;

        return $this;
    }

    public function getNombrepartiesarchive(): ?int
    {
        return $this->nombrepartiesarchive;
    }

    public function setNombrepartiesarchive(int $nombrepartiesarchive): self
    {
        $this->nombrepartiesarchive = $nombrepartiesarchive;

        return $this;
    }

}
