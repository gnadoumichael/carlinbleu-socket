<?php

namespace App\Entity;

use App\Repository\AlerteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AlerteRepository::class)]
class Alerte
{
    #[Groups(['alertes'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;


    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'alertes')]
    private $user;

    #[Groups(['alertes'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $alerte;

    #[Groups(['alertes'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['alertes'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $statut;

    #[Groups(['alertes'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'ownerlertes')]
    private $owner;

    #[Groups(['alertes'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $titre;

    #[Groups(['alertes'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ref = null;

    #[Groups(['alertes'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

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

    public function getAlerte(): ?string
    {
        return $this->alerte;
    }

    public function setAlerte(string $alerte): self
    {
        $this->alerte = $alerte;

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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): static
    {
        $this->ref = $ref;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
