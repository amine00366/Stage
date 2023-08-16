<?php

namespace App\Entity;

use App\Repository\ArmoireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArmoireRepository::class)]
class Armoire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'arm', targetEntity: Bandes::class)]
    private Collection $bandes;

    public function __construct()
    {
        $this->bandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Bandes>
     */
    public function getBandes(): Collection
    {
        return $this->bandes;
    }

    public function addBande(Bandes $bande): static
    {
        if (!$this->bandes->contains($bande)) {
            $this->bandes->add($bande);
            $bande->setArm($this);
        }

        return $this;
    }

    public function removeBande(Bandes $bande): static
    {
        if ($this->bandes->removeElement($bande)) {
            // set the owning side to null (unless already changed)
            if ($bande->getArm() === $this) {
                $bande->setArm(null);
            }
        }

        return $this;
    }
    public function __toString(): string
{
    return $this->nom; // Remplacez 'nom' par la propriété appropriée
}
}
