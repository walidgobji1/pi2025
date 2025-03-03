<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: "users")]
#[ORM\InheritanceType("JOINED")]  // ✅ Ensures separate tables for Apprenant & Instructeur
#[ORM\DiscriminatorColumn(name: "user_type", type: "string")]
#[ORM\DiscriminatorMap([
    "user" => User::class,
    "instructeur" => Instructeur::class,
    "apprenant" => Apprenant::class
])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(type: "json")]
    private array $roles = [];

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Length(min: 6, max: 30)]
    private string $password;

    

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $prenom = null;

    #[ORM\Column(type: "date", nullable: true)]
    private ?\DateTimeInterface $dateDeNaissance = null;




    #[ORM\Column(length: 255, nullable: true)]
    private ?string $resetToken = null;

    public function getId(): ?int { return $this->id; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }

    public function getRoles(): array { 
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }
    public function setRoles(array $roles): self { $this->roles = $roles; return $this; }

    public function getPassword(): string { return $this->password; }
    public function setPassword(string $password): self { $this->password = $password; return $this; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): self { $this->nom = $nom; return $this; }

    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(string $prenom): self { $this->prenom = $prenom; return $this; }

    public function getDateDeNaissance(): ?\DateTimeInterface { return $this->dateDeNaissance; }
    public function setDateDeNaissance(?\DateTimeInterface $date): self { $this->dateDeNaissance = $date; return $this; }

    public function getUserIdentifier(): string { return $this->email; }

    public function eraseCredentials(): void {}
    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;
        return $this;
    }
}
