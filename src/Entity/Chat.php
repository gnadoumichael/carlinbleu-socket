<?php

namespace App\Entity;

use App\Repository\ChatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ChatRepository::class)]
class Chat
{
    #[Groups('chats')]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups('chats')]
    #[ORM\Column(type: 'text')]
    private $message;

    #[Groups('chats')]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'ownerchats')]
    #[ORM\JoinColumn(nullable: false)]
    private $owner;

    #[Groups('chats')]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'receiverchats')]
    #[ORM\JoinColumn(nullable: false)]
    private $receiver;

    #[Groups('chats')]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups('chats')]
    #[ORM\ManyToOne(targetEntity: Todo::class, inversedBy: 'todochats')]
    private $todo;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'userchats')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[Groups('chats')]
    #[ORM\Column]
    private ?bool $isRead = null;

    #[Groups('chats')]
    #[ORM\ManyToOne(inversedBy: 'chats')]
    private ?Tache $tache = null;

    #[Groups('chats')]
    #[ORM\OneToOne(inversedBy: 'chat', cascade: ['persist', 'remove'])]
    private ?Fichier $fichier = null;

    #[Groups('chats')]
    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'replye')]
    private ?self $replyeChat = null;


    #[ORM\OneToMany(mappedBy: 'replyeChat', targetEntity: self::class)]
    private Collection $replye;

    public function __construct()
    {
        $this->replye = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getReceiver(): ?User
    {
        return $this->receiver;
    }

    public function setReceiver(?User $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTodo(): ?Todo
    {
        return $this->todo;
    }

    public function setTodo(?Todo $todo): self
    {
        $this->todo = $todo;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function isIsRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): self
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function getTache(): ?Tache
    {
        return $this->tache;
    }

    public function setTache(?Tache $tache): self
    {
        $this->tache = $tache;

        return $this;
    }

    public function getFichier(): ?Fichier
    {
        return $this->fichier;
    }

    public function setFichier(?Fichier $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getReplyeChat(): ?self
    {
        return $this->replyeChat;
    }

    public function setReplyeChat(?self $replyeChat): self
    {
        $this->replyeChat = $replyeChat;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getReplye(): Collection
    {
        return $this->replye;
    }

    public function addReplye(self $replye): self
    {
        if (!$this->replye->contains($replye)) {
            $this->replye->add($replye);
            $replye->setReplyeChat($this);
        }

        return $this;
    }

    public function removeReplye(self $replye): self
    {
        if ($this->replye->removeElement($replye)) {
            // set the owning side to null (unless already changed)
            if ($replye->getReplyeChat() === $this) {
                $replye->setReplyeChat(null);
            }
        }

        return $this;
    }
}
