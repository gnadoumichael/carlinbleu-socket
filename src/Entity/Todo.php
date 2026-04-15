<?php

namespace App\Entity;

use App\Repository\TodoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TodoRepository::class)]
class Todo
{
    #[Groups(['chats','todo'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['chats','todo'])]
    #[ORM\Column(type: 'text')]
    private $todo;

    #[Groups(['chats','todo'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $date;

    #[Groups('todo')]
    #[ORM\Column(type: 'integer')]
    private $priorite;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'todos')]
    private $user;

    #[Groups('todo')]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'ownerTodos')]
    private $owner;

    #[Groups('todo')]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'senderTodos')]
    private $sender;

    #[ORM\OneToMany(mappedBy: 'todo', targetEntity: Chat::class)]
    private $todochats;

    #[Groups('todo')]
    #[ORM\OneToMany(mappedBy: 'todoFichiers', targetEntity: Fichier::class)]
    private Collection $fichiers;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    public function __construct()
    {
        $this->todochats = new ArrayCollection();
        $this->fichiers = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTodo(): ?string
    {
        return $this->todo;
    }

    public function setTodo(string $todo): self
    {
        $this->todo = $todo;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPriorite(): ?int
    {
        return $this->priorite;
    }

    public function setPriorite(int $priorite): self
    {
        $this->priorite = $priorite;

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

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getSender(): ?User
    {
        return $this->sender;
    }

    public function setSender(?User $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @return Collection<int, Chat>
     */
    public function getTodochats(): Collection
    {
        return $this->todochats;
    }

    public function addTodochat(Chat $todochat): self
    {
        if (!$this->todochats->contains($todochat)) {
            $this->todochats[] = $todochat;
            $todochat->setTodo($this);
        }

        return $this;
    }

    public function removeTodochat(Chat $todochat): self
    {
        if ($this->todochats->removeElement($todochat)) {
            // set the owning side to null (unless already changed)
            if ($todochat->getTodo() === $this) {
                $todochat->setTodo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fichier>
     */
    public function getFichiers(): Collection
    {
        return $this->fichiers;
    }

    public function addFichier(Fichier $fichier): self
    {
        if (!$this->fichiers->contains($fichier)) {
            $this->fichiers->add($fichier);
            $fichier->setTodoFichiers($this);
        }

        return $this;
    }

    public function removeFichier(Fichier $fichier): self
    {
        if ($this->fichiers->removeElement($fichier)) {
            // set the owning side to null (unless already changed)
            if ($fichier->getTodoFichiers() === $this) {
                $fichier->setTodoFichiers(null);
            }
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

}
