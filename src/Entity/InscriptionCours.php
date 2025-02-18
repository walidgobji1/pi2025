<?php

namespace App\Entity;

use App\Repository\InscriptionCoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: InscriptionCoursRepository::class)]
class InscriptionCours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    private ?string $status = "en attente"; // Valeur par défaut

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    #[Assert\NotBlank(message: "La date d'inscription est requise.")]
    private ?\DateTimeImmutable $dateInscreption = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le montant est requis.")]
    #[Assert\PositiveOrZero(message: "Le montant doit être positif ou égal à 0.")]
    private ?float $montant = 0; // Valeur par défaut

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type de paiement est requis.")]
    #[Assert\Choice(choices: ["Carte", "Paypal", "Virement"], message: "Choisissez un type de paiement valide.")]
    private ?string $typePaiement = null;

    #[ORM\ManyToOne(inversedBy: 'inscriptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Apprenant $apprenant = null;

    #[ORM\ManyToOne(inversedBy: 'inscriptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Formation $formation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de l'apprenant est obligatoire.")]
    private ?string $nomApprenant = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de la formation est requis.")]
    private ?string $nomFormation = null;

    #[ORM\Column(length: 8, unique: true)]
    #[Assert\NotBlank(message: "Le CIN est obligatoire.")]
    #[Assert\Length(min: 8, max: 8, exactMessage: "Le CIN doit contenir exactement 8 chiffres.")]
    #[Assert\Regex(pattern: "/^\d{8}$/", message: "Le CIN doit contenir uniquement des chiffres.")]
    private ?string $cin = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'adresse email n'est pas valide.")]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'promotion')]
    private ?Promotion $promotion = null;

    public function __construct()
    {
        $this->dateInscreption = new \DateTimeImmutable(); // Date actuelle
        $this->montant = 0; // Par défaut 0
        $this->status = "en attente"; // Par défaut "en attente"
    }

    // Getters et Setters

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

    public function getDateInscreption(): ?\DateTimeImmutable
    {
        return $this->dateInscreption;
    }

    public function setDateInscreption(\DateTimeImmutable $dateInscreption): static
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

    public function setFormation(?Formation $formation): self
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

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): static
    {
        $this->cin = $cin;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPromotion(): ?Promotion
    {
        return $this->promotion;
    }

    public function setPromotion(?Promotion $promotion): static
    {
        $this->promotion = $promotion;

        return $this;
    }
}
