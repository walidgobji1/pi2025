<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "instructeurs")]
class Instructeur extends User
{
    #[ORM\Column(name: "nom_instructeur", type: "string", length: 100)]
    private ?string $nom_instructeur = null;

    #[ORM\Column(name: "prenom_instructeur", type: "string", length: 100)]
    private ?string $prenom_instructeur = null;

    #[ORM\Column(name: "email_instructeur", type: "string", length: 255, unique: true)]
    private ?string $email_instructeur = null;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $cv = null;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'instructeur')]
    private Collection $avis;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
    }

    // ✅ Getters and Setters

    public function getNomInstructeur(): ?string 
    {
        return $this->nom_instructeur;
    }

    public function setNomInstructeur(?string $nom_instructeur): self 
    {
        $this->nom_instructeur = $nom_instructeur;
        return $this;
    }

    public function getPrenomInstructeur(): ?string 
    {
        return $this->prenom_instructeur;
    }

    public function setPrenomInstructeur(?string $prenom_instructeur): self 
    {
        $this->prenom_instructeur = $prenom_instructeur;
        return $this;
    }

    public function getEmailInstructeur(): ?string 
    {
        return $this->email_instructeur;
    }

    public function setEmailInstructeur(?string $email_instructeur): self 
    {
        $this->email_instructeur = $email_instructeur;
        return $this;
    }

    public function getCv(): ?string 
    {
        return $this->cv;
    }

    public function setCv(?string $cv): self 
    {
        $this->cv = $cv;
        return $this;
    }

    public function getImage(): ?string 
    {
        return $this->image;
    }

    public function setImage(?string $image): self 
    {
        $this->image = $image;
        return $this;
    }

    public function getAvis(): Collection 
    {
        return $this->avis;
    }

    public function addAvis(Avis $avis): self 
    {
        if (!$this->avis->contains($avis)) {
            $this->avis->add($avis);
            $avis->setInstructeur($this);
        }
        return $this;
    }

    public function removeAvis(Avis $avis): self 
    {
        if ($this->avis->removeElement($avis)) {
            if ($avis->getInstructeur() === $this) {
                $avis->setInstructeur(null);
            }
        }
        return $this;
    }
}
