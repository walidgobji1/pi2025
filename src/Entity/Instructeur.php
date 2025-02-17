<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Instructeur extends User
{
    #[ORM\Column(type: "string", nullable: true)]
    private ?string $cv = null;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $image = null;

    public function getCv(): ?string { return $this->cv; }
    public function setCv(?string $cv): self { $this->cv = $cv; return $this; }

    public function getImage(): ?string { return $this->image; }
    public function setImage(?string $image): self { $this->image = $image; return $this; }
}
