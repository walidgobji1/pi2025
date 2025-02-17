<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Discussion::class, inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Discussion $discussion = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'sentMessages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $sender = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'receivedMessages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $receiver = null;

    #[ORM\Column(type: 'text')]
    private ?string $content = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscussion(): ?Discussion
    {
        return $this->discussion;
    }

    public function setDiscussion(?Discussion $discussion): static
    {
        $this->discussion = $discussion;
        return $this;
    }

    public function getSender(): ?Utilisateur
    {
        return $this->sender;
    }

    public function setSender(?Utilisateur $sender): static
    {
        $this->sender = $sender;
        return $this;
    }

    public function getReceiver(): ?Utilisateur
    {
        return $this->receiver;
    }

    public function setReceiver(?Utilisateur $receiver): static
    {
        $this->receiver = $receiver;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }
}
