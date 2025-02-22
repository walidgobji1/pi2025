<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\FormationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez saisir un titre')]
    #[Assert\Length(
        min: 5,
        max: 100,
        minMessage: "Le titre doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le titre ne doit pas dépasser {{ limit }} caractères"
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez introduire la description')]
    #[Assert\Length(
        min: 10,
        max: 500,
        minMessage: "La description doit contenir au moins {{ limit }} caractères",
        maxMessage: "La description ne doit pas dépasser {{ limit }} caractères"
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez introduire la durée de la formation')]
    #[Assert\Regex(
        pattern: "/^\d+\s*(jours|semaines|mois|ans)$/i",
        message: "La durée doit être un nombre suivi d'une unité (jours, semaines, mois, ans)"
    )]
    private ?string $duree = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez introduire le niveau')]
    #[Assert\Choice(
        choices: ['Débutant', 'Intermédiaire', 'Avancé'],
        message: "Veuillez choisir un niveau valide : Débutant, Intermédiaire ou Avancé"
    )]
    private ?string $niveau = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'Veuillez introduire la date svp')]
    #[Assert\LessThanOrEqual(
        value: "today",
        message: "La date de création ne peut pas être dans le futur"
    )]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Veuillez introduire le prix')]
    #[Assert\Positive(message: "Le prix doit être un nombre positif")]
    #[Assert\GreaterThan(value: 10, message: "Le prix doit être supérieur à 10DT")]
    private ?float $prix = null;

    #[ORM\ManyToOne(inversedBy: 'formations')]
    private ?Categorie $categorie = null;

    /**
     * @var Collection<int, Lecon>
     */
    #[ORM\OneToMany(targetEntity: Lecon::class, mappedBy: 'formation', cascade: ['remove'], orphanRemoval: true)]
    private Collection $lecons;

    public function __construct()
    {
        $this->lecons = new ArrayCollection();
        $this->dateCreation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
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

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): static
    {
        $this->duree = $duree;
        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;
        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * @return Collection<int, Lecon>
     */
    public function getLecons(): Collection
    {
        return $this->lecons;
    }

    public function addLecon(Lecon $lecon): static
    {
        if (!$this->lecons->contains($lecon)) {
            $this->lecons->add($lecon);
            $lecon->setFormation($this);
        }
        return $this;
    }

    public function removeLecon(Lecon $lecon): static
    {
        if ($this->lecons->removeElement($lecon)) {
            if ($lecon->getFormation() === $this) {
                $lecon->setFormation(null);
            }
        }
        return $this;
    }
}
