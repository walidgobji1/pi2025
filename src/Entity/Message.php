<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: 'App\Repository\MessageRepository')]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User')]  // ✅ Remplacement de Utilisateur par User
    #[ORM\JoinColumn(nullable: false)]
    private ?User $sender = null;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User')]  // ✅ Remplacement de Utilisateur par User
    #[ORM\JoinColumn(nullable: false)]
    private ?User $receiver = null;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Discussion', inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Discussion $discussion = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "Le contenu du message ne peut pas être vide.")]
    #[Assert\Length(
        max: 1000,
        maxMessage: "Le message ne peut pas dépasser 1000 caractères."
    )]
    private string $content;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime(); // ✅ Date par défaut
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?User  // ✅ Changement de type
    {
        return $this->sender;
    }

    public function setSender(?User $sender): self  // ✅ Changement de type
    {
        $this->sender = $sender;
        return $this;
    }

    public function getReceiver(): ?User  // ✅ Changement de type
    {
        return $this->receiver;
    }

    public function setReceiver(?User $receiver): self  // ✅ Changement de type
    {
        $this->receiver = $receiver;
        return $this;
    }

    public function getDiscussion(): ?Discussion
    {
        return $this->discussion;
    }

    public function setDiscussion(?Discussion $discussion): self
    {
        $this->discussion = $discussion;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
