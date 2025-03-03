<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $score = null;  // AI-generated score

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;  // Skill level determined from the CV

    #[ORM\Column(nullable: true)]
    private ?bool $status = null;  // Whether the evaluation is finalized or not

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;  // The creation date of the evaluation

    // New attributes for CV-based evaluation
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $education = null;  // Education level based on CV

    #[ORM\Column(nullable: true)]
    private ?int $yearsOfExperience = null;  // Years of experience

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $skills = null;  // Skills identified from CV

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $certifications = null;  // Certifications based on CV

    #[ORM\Column(nullable: true)]
    private ?float $educationWeight = null;  // Weight for education in the scoring algorithm

    #[ORM\Column(nullable: true)]
    private ?float $experienceWeight = null;  // Weight for experience in the scoring algorithm

    #[ORM\Column(nullable: true)]
    private ?float $skillsWeight = null;  // Weight for skills in the scoring algorithm

    #[ORM\Column(nullable: true)]
    private ?float $certificationsWeight = null;  // Weight for certifications in the scoring algorithm

    // Relationships
    #[ORM\ManyToOne(targetEntity: Instructeur::class, inversedBy: 'evaluations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Instructeur $instructor = null;  // Link to the instructor

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(float $score): static
    {
        $this->score = $score;
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

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): static
    {
        $this->status = $status;
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

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(?string $education): static
    {
        $this->education = $education;
        return $this;
    }

    public function getYearsOfExperience(): ?int
    {
        return $this->yearsOfExperience;
    }

    public function setYearsOfExperience(?int $yearsOfExperience): static
    {
        $this->yearsOfExperience = $yearsOfExperience;
        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(?string $skills): static
    {
        $this->skills = $skills;
        return $this;
    }

    public function getCertifications(): ?string
    {
        return $this->certifications;
    }

    public function setCertifications(?string $certifications): static
    {
        $this->certifications = $certifications;
        return $this;
    }

    public function getEducationWeight(): ?float
    {
        return $this->educationWeight;
    }

    public function setEducationWeight(?float $educationWeight): static
    {
        $this->educationWeight = $educationWeight;
        return $this;
    }

    public function getExperienceWeight(): ?float
    {
        return $this->experienceWeight;
    }

    public function setExperienceWeight(?float $experienceWeight): static
    {
        $this->experienceWeight = $experienceWeight;
        return $this;
    }

    public function getSkillsWeight(): ?float
    {
        return $this->skillsWeight;
    }

    public function setSkillsWeight(?float $skillsWeight): static
    {
        $this->skillsWeight = $skillsWeight;
        return $this;
    }

    public function getCertificationsWeight(): ?float
    {
        return $this->certificationsWeight;
    }

    public function setCertificationsWeight(?float $certificationsWeight): static
    {
        $this->certificationsWeight = $certificationsWeight;
        return $this;
    }

    public function getInstructor(): ?Instructeur
    {
        return $this->instructor;
    }

    public function setInstructor(?Instructeur $instructor): static
    {
        $this->instructor = $instructor;
        return $this;
    }
}
