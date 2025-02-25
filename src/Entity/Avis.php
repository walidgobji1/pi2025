<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
#[ORM\HasLifecycleCallbacks] // Enables automatic timestamps
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $note = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateDate = null;


    


    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?FormationScore $formationScore = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?Instructeur $instructeur = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?Apprenant $apprenant = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?Formation $formation = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isFlagged = false;

    #[ORM\PrePersist]
    public function setCreationDate(): void
    {
        $this->dateCreation = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function setUpdateDateTimestamp(): void
    {
        $this->updateDate = new \DateTime();
    }

    // Getters and Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): static
    {
        $this->note = $note;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->updateDate;
    }


   

   

    public function getFormationScore(): ?FormationScore
    {
        return $this->formationScore;
    }

    public function setFormationScore(?FormationScore $formationScore): static
    {
        $this->formationScore = $formationScore;

        return $this;
    }

    public function getInstructeur(): ?Instructeur
    {
        return $this->instructeur;
    }

    public function setInstructeur(?Instructeur $instructeur): static
    {
        $this->instructeur = $instructeur;

        return $this;
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

    public function isFlagged(): ?bool
    {
        return $this->isFlagged;
    }

    public function setIsFlagged(?bool $isFlagged): static
    {
        $this->isFlagged = $isFlagged;

        return $this;
    }
}
