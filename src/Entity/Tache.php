<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: 'App\Repository\TacheRepository')]
class Tache
{
    #[Groups(['plans','tacher','equipes','chats'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['plans','tacher','equipes','chats'])]
    #[ORM\Column(type: 'text', nullable: false)]
    private $libelle;

    #[Groups('plans')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $lieu;

    #[Groups('plans')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ordre;

    #[Groups(['plans','tacher','equipes','chats'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[Groups(['tacher','chats'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Section', inversedBy: 'taches')]
    private $section;

    #[Groups(['plans','tacher','chats'])]
    #[ORM\Column(type: 'datetime', nullable: true)]
    private $debut;

    #[Groups(['plans','tacher','chats'])]
    #[ORM\Column(type: 'datetime', nullable: true)]
    private $fin;

    #[Groups('tacher')]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'taches')]
    private $user;

    #[Groups(['tacher','chats'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Chantier', inversedBy: 'taches')]
    private $chantier;

    #[Groups(['plans','tacher'])]
    #[ORM\ManyToMany(targetEntity: Personnel::class, inversedBy: 'taches')]
    private $personnel;

    #[Groups(['plans','tacher'])]
    #[ORM\ManyToMany(targetEntity: Equipe::class, mappedBy: 'taches')]
    private $equipes;

    #[Groups(['plans','tacher'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'taches')]
    private $corbeille;

    #[Groups('tacher')]
    #[ORM\OneToMany(targetEntity: Fichier::class, mappedBy: 'tache')]
    private $fichiers;

    #[Groups('tacher')]
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'tache')]
    private $messages;

    #[ORM\OneToMany(mappedBy: 'tache', targetEntity: Chat::class)]
    private Collection $chats;


    public function __construct()
    {
        $this->personnel = new ArrayCollection();
        $this->equipes = new ArrayCollection();
        $this->fichiers = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->chats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(?\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(?\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * @param mixed $ordre
     */
    public function setOrdre($ordre): void
    {
        $this->ordre = $ordre;
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

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): self
    {
        $this->chantier = $chantier;

        return $this;
    }

    /**
     * @return Collection|Personnel[]
     */
    public function getPersonnel(): Collection
    {
        return $this->personnel;
    }

    public function addPersonnel(Personnel $personnel): self
    {
        if (!$this->personnel->contains($personnel)) {
            $this->personnel[] = $personnel;
        }else{
            $this->personnel->removeElement($personnel);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): self
    {
        $this->personnel->removeElement($personnel);

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getEquipes(): Collection
    {
        return $this->equipes;
    }

    public function addEquipe(Equipe $equipe): self
    {
        if (!$this->equipes->contains($equipe)) {
            $this->equipes[] = $equipe;
            $equipe->addTach($this);
        }

        return $this;
    }

    public function removeEquipe(Equipe $equipe): self
    {
        if ($this->equipes->removeElement($equipe)) {
            $equipe->removeTach($this);
        }

        return $this;
    }

    public function getCorbeille(): ?Corbeille
    {
        return $this->corbeille;
    }

    public function setCorbeille(?Corbeille $corbeille): self
    {
        $this->corbeille = $corbeille;

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
            $this->fichiers[] = $fichier;
            $fichier->setTache($this);
        }

        return $this;
    }

    public function removeFichier(Fichier $fichier): self
    {
        if ($this->fichiers->removeElement($fichier)) {
            // set the owning side to null (unless already changed)
            if ($fichier->getTache() === $this) {
                $fichier->setTache(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setTache($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getTache() === $this) {
                $message->setTache(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Chat>
     */
    public function getChats(): Collection
    {
        return $this->chats;
    }

    public function addChat(Chat $chat): self
    {
        if (!$this->chats->contains($chat)) {
            $this->chats->add($chat);
            $chat->setTache($this);
        }

        return $this;
    }

    public function removeChat(Chat $chat): self
    {
        if ($this->chats->removeElement($chat)) {
            // set the owning side to null (unless already changed)
            if ($chat->getTache() === $this) {
                $chat->setTache(null);
            }
        }

        return $this;
    }

}
