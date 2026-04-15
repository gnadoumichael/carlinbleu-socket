<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: 'App\Repository\FichierRepository')]
class Fichier
{
    #[Groups(['tacher','fichiers','chats','todo'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'fichiers')]
    private $user;

    #[Groups(['tacher','fichiers','chats','todo'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $nomfichier;

    #[Groups(['tacher','fichiers','chats','todo'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $taille;

    #[Groups(['fichiers'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Chantier', inversedBy: 'fichiers')]
    private $chantier;

    #[Groups(['tacher','fichiers'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['tacher','fichiers','chats','todo'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    #[Groups(['tacher','fichiers'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $categorie;

    #[ORM\ManyToOne(targetEntity: Tache::class, inversedBy: 'fichiers')]
    private $tache;

    #[Groups(['tacher','fichiers','chats','todo'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $folde;

    #[ORM\OneToOne(mappedBy: 'fichier', cascade: ['persist', 'remove'])]
    private ?Chat $chat = null;

    #[ORM\ManyToOne(inversedBy: 'fichiers')]
    private ?Todo $todoFichiers = null;

    #[ORM\ManyToOne(inversedBy: 'fichiers')]
    private ?Besoins $besoins = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomfichier(): ?string
    {
        return $this->nomfichier;
    }

    public function setNomfichier(string $nomfichier): self
    {
        $this->nomfichier = $nomfichier;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

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

    public function getFolde(): ?string
    {
        return $this->folde;
    }

    public function setFolde(?string $folde): self
    {
        $this->folde = $folde;

        return $this;
    }

    public function getChat(): ?Chat
    {
        return $this->chat;
    }

    public function setChat(?Chat $chat): self
    {
        // unset the owning side of the relation if necessary
        if ($chat === null && $this->chat !== null) {
            $this->chat->setFichier(null);
        }

        // set the owning side of the relation if necessary
        if ($chat !== null && $chat->getFichier() !== $this) {
            $chat->setFichier($this);
        }

        $this->chat = $chat;

        return $this;
    }

    public function getTodoFichiers(): ?Todo
    {
        return $this->todoFichiers;
    }

    public function setTodoFichiers(?Todo $todoFichiers): self
    {
        $this->todoFichiers = $todoFichiers;

        return $this;
    }

    public function getBesoins(): ?Besoins
    {
        return $this->besoins;
    }

    public function setBesoins(?Besoins $besoins): static
    {
        $this->besoins = $besoins;

        return $this;
    }

}
