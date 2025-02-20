<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Apprenant extends User
{
    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $niveau_etude = null;

    public function getNiveauEtude(): ?int { return $this->niveau_etude; }
    public function setNiveauEtude(?int $niveau_etude): self { $this->niveau_etude = $niveau_etude; return $this; }
}
