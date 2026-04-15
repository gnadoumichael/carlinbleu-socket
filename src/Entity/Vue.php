<?php

namespace App\Entity;

use App\Repository\VueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VueRepository::class)]
class Vue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $vue = null;

    #[ORM\ManyToOne(inversedBy: 'vues')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVue(): ?string
    {
        return $this->vue;
    }

    public function setVue(string $vue): static
    {
        $this->vue = $vue;

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
}
