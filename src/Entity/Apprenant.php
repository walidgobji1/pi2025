<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "apprenants")]
class Apprenant extends User
{
    #[ORM\Column(name: "nom_apprenant", type: "string", length: 100)]
    private ?string $nom_apprenant = null;

    #[ORM\Column(name: "prenom_apprenant", type: "string", length: 100)]
    private ?string $prenom_apprenant = null;

    #[ORM\Column(name: "email_apprenant", type: "string", length: 255, unique: true)]
    private ?string $email_apprenant = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $niveau_etude = null;

    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'apprenant')]
    private Collection $avis;

    #[ORM\OneToMany(targetEntity: Progression::class, mappedBy: "apprenant", cascade: ["persist", "remove"])]
    private Collection $progressions;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->progressions = new ArrayCollection();
    }

    public function getNomApprenant(): ?string { return $this->nom_apprenant; }
    public function setNomApprenant(string $nom_apprenant): self { $this->nom_apprenant = $nom_apprenant; return $this; }

    public function getPrenomApprenant(): ?string { return $this->prenom_apprenant; }
    public function setPrenomApprenant(string $prenom_apprenant): self { $this->prenom_apprenant = $prenom_apprenant; return $this; }

    public function getEmailApprenant(): ?string { return $this->email_apprenant; }
    public function setEmailApprenant(string $email_apprenant): self { $this->email_apprenant = $email_apprenant; return $this; }

    public function getNiveauEtude(): ?int { return $this->niveau_etude; }
    public function setNiveauEtude(?int $niveau_etude): self { $this->niveau_etude = $niveau_etude; return $this; }

    public function getAvis(): Collection { return $this->avis; }

    public function addAvis(Avis $avis): self
    {
        if (!$this->avis->contains($avis)) {
            $this->avis->add($avis);
            $avis->setApprenant($this);
        }
        return $this;
    }

    public function removeAvis(Avis $avis): self
    {
        if ($this->avis->removeElement($avis)) {
            if ($avis->getApprenant() === $this) {
                $avis->setApprenant(null);
            }
        }
        return $this;
    }

    public function getProgressions(): Collection { return $this->progressions; }

    public function addProgression(Progression $progression): self
    {
        if (!$this->progressions->contains($progression)) {
            $this->progressions->add($progression);
            $progression->setApprenant($this);
        }
        return $this;
    }

    public function removeProgression(Progression $progression): self
    {
        if ($this->progressions->removeElement($progression)) {
            if ($progression->getApprenant() === $this) {
                $progression->setApprenant(null);
            }
        }
        return $this;
    }
}
