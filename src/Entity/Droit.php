<?php

namespace App\Entity;

use App\Repository\DroitRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: DroitRepository::class)]
class Droit
{
    #[Groups(['droitios'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups(['droitios'])]
    #[ORM\Column(length: 255)]
    private ?string $afaire = null;

    #[Groups(['droitios'])]
    #[ORM\Column(length: 255)]
    private ?string $actions = null;

    #[ORM\ManyToOne(inversedBy: 'droits')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'droits')]
    private ?User $pour = null;

    #[Groups(['droitios'])]
    #[ORM\Column(length: 255)]
    private ?string $lier = null;

    #[Groups(['droitios'])]
    #[ORM\Column(length: 255)]
    private ?string $ggroup = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAfaire(): ?string
    {
        return $this->afaire;
    }

    public function setAfaire(string $afaire): static
    {
        $this->afaire = $afaire;

        return $this;
    }

    public function getActions(): ?string
    {
        return $this->actions;
    }

    public function setActions(string $actions): static
    {
        $this->actions = $actions;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getPour(): ?User
    {
        return $this->pour;
    }

    public function setPour(?User $pour): static
    {
        $this->pour = $pour;

        return $this;
    }

    public function getLier(): ?string
    {
        return $this->lier;
    }

    public function setLier(string $lier): static
    {
        $this->lier = $lier;

        return $this;
    }

    public function getGgroup(): ?string
    {
        return $this->ggroup;
    }

    public function setGgroup(string $ggroup): static
    {
        $this->ggroup = $ggroup;

        return $this;
    }
}
