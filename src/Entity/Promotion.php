<?php

// src/Entity/Promotion.php
namespace App\Entity;


use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le code promo ne peut pas être vide.")]
    #[Assert\Length(min: 3, max: 255, minMessage: "Le code promo doit contenir au moins {{ limit }} caractères.")]
    private ?string $codePromo = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide.")]
    #[Assert\Length(min: 5, max: 255, minMessage: "La description doit contenir au moins {{ limit }} caractères.")]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La remise doit être spécifiée.")]
    #[Assert\GreaterThanOrEqual(0, message: "La remise ne peut pas être négative.")]
    private ?float $remise = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "La date d'expiration ne peut pas être vide.")]
    #[Assert\Type("\DateTime", message: "La date d'expiration doit être valide.")]
    private ?\DateTimeInterface $dateExpiration = null;

    #[ORM\ManyToOne(targetEntity: Apprenant::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Apprenant $apprenant = null;
    // Relation ManyToOne avec InscriptionCours
    #[ORM\ManyToOne(targetEntity: InscriptionCours::class, inversedBy: 'promotions')]
    #[ORM\JoinColumn(nullable: true)]
    private ?InscriptionCours $inscriptionCours = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    

    public function getCodePromo(): ?string
    {
        return $this->codePromo;
    }

    public function setCodePromo(string $codePromo): static
    {
        $this->codePromo = $codePromo;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(float $remise): static
    {
        $this->remise = $remise;
        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $dateExpiration): static
    {
        $this->dateExpiration = $dateExpiration;
        return $this;
    }

    public function getInscriptionCours(): ?InscriptionCours
    {
        return $this->inscriptionCours;
    }

    public function setInscriptionCours(?InscriptionCours $inscriptionCours): static
    {
        $this->inscriptionCours = $inscriptionCours;
        return $this;
    }
    public function isValid(): bool
{
    return $this->dateExpiration > new \DateTime();
}

}
