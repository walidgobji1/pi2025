<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProgressionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: ProgressionRepository::class)]
class Progression
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Apprenant::class, inversedBy: "progressions")]
    #[ORM\JoinColumn(nullable: false)]
    private ?Apprenant $apprenant = null;

    #[ORM\ManyToOne]
    private ?Formation $formation = null;

    #[ORM\ManyToMany(targetEntity: Lecon::class)]
    private Collection $leconsTerminees;

    public function __construct()
    {
        $this->leconsTerminees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApprenant(): ?Apprenant
    {
        return $this->apprenant;
    }

    public function setApprenant(?Apprenant $apprenant): static
    {
        $this->apprenant = $apprenant;
        return $this;
    }

    public function getFormation(): ?Formation
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): static
    {
        $this->formation = $formation;
        return $this;
    }

    public function getLeconsTerminees(): Collection
    {
        return $this->leconsTerminees;
    }

    public function addLeconTerminee(Lecon $lecon): static
    {
        if (!$this->leconsTerminees->contains($lecon)) {
            $this->leconsTerminees->add($lecon);
        }
        return $this;
    }

    public function removeLeconTerminee(Lecon $lecon): static
    {
        $this->leconsTerminees->removeElement($lecon);
        return $this;
    }
}
