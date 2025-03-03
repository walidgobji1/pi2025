<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: 'App\Repository\DiscussionRepository')]
class Discussion
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
    #[Assert\NotNull(message: "Le destinataire est requis.")]
    private ?User $receiver = null;

    #[ORM\OneToMany(mappedBy: 'discussion', targetEntity: 'App\Entity\Message', cascade: ['remove'])]
    private Collection $messages;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
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

    /**
     * @return Collection|Message[]
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setDiscussion($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->removeElement($message)) {
            if ($message->getDiscussion() === $this) {
                $message->setDiscussion(null);
            }
        }

        return $this;
    }
}

