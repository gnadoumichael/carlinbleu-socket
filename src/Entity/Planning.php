<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Client;
use App\Entity\User;
use App\Entity\Chantier;
use App\Entity\Section;
use App\Repository\PlanningRepository;

#[ORM\Entity(repositoryClass: PlanningRepository::class)]
class Planning
{
    #[Groups(['tacher','plans','plann','section', 'chats'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'plannings')]
    private $client;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'planning')]
    private $user;

    #[Groups('plann')]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'plannings')]
    private $chantier;

    #[Groups(['plans','plann'])]
    #[ORM\OneToMany(targetEntity: Section::class, mappedBy: 'planning')]
    private $section;

    #[Groups(['tacher','plans','plann','section', 'chats'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $planning;

    #[Groups(['plans','plann'])]
    #[ORM\Column(type: 'integer')]
    private $rang;

    #[Groups(['plans','plann'])]

    #[ORM\Column(type: 'integer')]
    private $progression;

    #[Groups(['plans','plann'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'plannings')]
    private $corbeille;

    public function __construct()
    {
        $this->section = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

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
     * @return Collection|Section[]
     */
    public function getSection(): Collection
    {
        return $this->section;
    }

    public function addSection(Section $section): self
    {
        if (!$this->section->contains($section)) {
            $this->section[] = $section;
            $section->setPlanning($this);
        }

        return $this;
    }

    public function removeSection(Section $section): self
    {
        if ($this->section->contains($section)) {
            $this->section->removeElement($section);
            // set the owning side to null (unless already changed)
            if ($section->getPlanning() === $this) {
                $section->setPlanning(null);
            }
        }

        return $this;
    }

    public function getPlanning(): ?string
    {
        return $this->planning;
    }

    public function setPlanning(string $planning): self
    {
        $this->planning = $planning;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getProgression(): ?int
    {
        return $this->progression;
    }

    public function setProgression(int $progression): self
    {
        $this->progression = $progression;

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
}
