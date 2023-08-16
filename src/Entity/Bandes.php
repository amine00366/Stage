<?php

namespace App\Entity;

use App\Repository\BandesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BandesRepository::class)]
class Bandes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numbande = null;

    #[ORM\Column(length: 255)]
    private ?string $Label = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datefin = null;

    #[ORM\Column(length: 255)]
    private ?string $dureederetension = null;

    #[ORM\Column(length: 255)]
    private ?string $pool = null;

    #[ORM\ManyToOne(inversedBy: 'bandes')]
    private ?Armoire $arm = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumbande(): ?string
    {
        return $this->numbande;
    }

    public function setNumbande(string $numbande): static
    {
        $this->numbande = $numbande;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->Label;
    }

    public function setLabel(string $Label): static
    {
        $this->Label = $Label;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getDureederetension(): ?string
    {
        return $this->dureederetension;
    }

    public function setDureederetension(string $dureederetension): static
    {
        $this->dureederetension = $dureederetension;

        return $this;
    }

    public function getPool(): ?string
    {
        return $this->pool;
    }

    public function setPool(string $pool): static
    {
        $this->pool = $pool;

        return $this;
    }

    public function getArm(): ?Armoire
    {
        return $this->arm;
    }

    public function setArm(?Armoire $arm): static
    {
        $this->arm = $arm;

        return $this;
    }
}
