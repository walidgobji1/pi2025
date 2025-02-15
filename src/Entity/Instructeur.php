<?php

namespace App\Entity;

use App\Repository\InstructeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstructeurRepository::class)]
class Instructeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CV = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $niveau = null;

    #[ORM\Column(nullable: true)]
    private ?float $scoreEvaluation = null;

    #[ORM\Column(nullable: true)]
    private ?float $scoreAvis = null;

    #[ORM\Column(nullable: true)]
    private ?bool $status = null;

    /**
     * @var Collection<int, Avis>
     */
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'instructeur')]
    private Collection $avis;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCV(): ?string
    {
        return $this->CV;
    }

    public function setCV(?string $CV): static
    {
        $this->CV = $CV;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getScoreEvaluation(): ?float
    {
        return $this->scoreEvaluation;
    }

    public function setScoreEvaluation(?float $scoreEvaluation): static
    {
        $this->scoreEvaluation = $scoreEvaluation;

        return $this;
    }

    public function getScoreAvis(): ?float
    {
        return $this->scoreAvis;
    }

    public function setScoreAvis(?float $scoreAvis): static
    {
        $this->scoreAvis = $scoreAvis;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): static
    {
        $this->status = $status;

        return $this;
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
            $avi->setInstructeur($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getInstructeur() === $this) {
                $avi->setInstructeur(null);
            }
        }

        return $this;
    }
}
