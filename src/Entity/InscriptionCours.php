<?php

namespace App\Entity;

use App\Repository\InscriptionCoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscriptionCoursRepository::class)]
class InscriptionCours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateInscreption = null;

    #[ORM\Column]
    private ?float $montant = null;

    #[ORM\Column(length: 255)]
    private ?string $typePaiement = null;

    #[ORM\ManyToOne(inversedBy: 'inscriptionCours')]
    private ?Apprenant $apprenant = null;

    #[ORM\ManyToOne(inversedBy: 'inscriptionCours')]
    private ?Formation $formation = null;

    #[ORM\Column(length: 255)]
    private ?string $nomApprenant = null;

    #[ORM\Column(length: 255)]
    private ?string $nomFormation = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getDateInscreption(): ?\DateTimeInterface
    {
        return $this->dateInscreption;
    }

    public function setDateInscreption(\DateTimeInterface $dateInscreption): static
    {
        $this->dateInscreption = $dateInscreption;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getTypePaiement(): ?string
    {
        return $this->typePaiement;
    }

    public function setTypePaiement(string $typePaiement): static
    {
        $this->typePaiement = $typePaiement;

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


    
    public function getNomApprenant(): ?string
    {
        return $this->nomApprenant;
    }

    public function setNomApprenant(string $nomApprenant): static
    {
        $this->nomApprenant = $nomApprenant;

        return $this;
    }

    public function getNomFormation(): ?string
    {
        return $this->nomFormation;
    }

    public function setNomFormation(string $nomFormation): static
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

}
