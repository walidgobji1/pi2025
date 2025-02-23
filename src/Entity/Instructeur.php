<?php

namespace App\Entity;

use App\Repository\InstructeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Instructeur extends User
{
    #[ORM\Column(type: "string", nullable: true)]
    private ?string $cv = null;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $image = null;

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

    

    // Getter and Setter for cv
    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(?string $cv): self
    {
        $this->cv = $cv;
        return $this;
    }

    // Getter and Setter for image
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    // Getter and Setter for niveau
    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): self
    {
        $this->niveau = $niveau;
        return $this;
    }

    // Getter and Setter for scoreEvaluation
    public function getScoreEvaluation(): ?float
    {
        return $this->scoreEvaluation;
    }

    public function setScoreEvaluation(?float $scoreEvaluation): self
    {
        $this->scoreEvaluation = $scoreEvaluation;
        return $this;
    }

    // Getter and Setter for scoreAvis
    public function getScoreAvis(): ?float
    {
        return $this->scoreAvis;
    }

    public function setScoreAvis(?float $scoreAvis): self
    {
        $this->scoreAvis = $scoreAvis;
        return $this;
    }

    // Getter and Setter for status
    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
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

    public function addAvi(Avis $avi): self
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setInstructeur($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->removeElement($avi)) {
            if ($avi->getInstructeur() === $this) {
                $avi->setInstructeur(null);
            }
        }

        return $this;
    }
}
