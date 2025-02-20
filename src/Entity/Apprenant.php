<?php

namespace App\Entity;

use App\Repository\ApprenantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Apprenant extends User
{
    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $niveau_etude = null;

    /**
     * @var Collection<int, Avis>
     */
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'apprenant')]
    private Collection $avis;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
    }

    // Getter and Setter for niveau_etude
    public function getNiveauEtude(): ?int
    {
        return $this->niveau_etude;
    }

    public function setNiveauEtude(?int $niveau_etude): self
    {
        $this->niveau_etude = $niveau_etude;
        return $this;
    }

    // Avis relationship methods
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setApprenant($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // Set the owning side to null (unless already changed)
            if ($avi->getApprenant() === $this) {
                $avi->setApprenant(null);
            }
        }

        return $this;
    }
}
