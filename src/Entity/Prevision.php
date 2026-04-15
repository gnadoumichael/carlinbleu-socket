<?php

namespace App\Entity;

use App\Repository\PrevisionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrevisionRepository::class)]
class Prevision
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $numprevision;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'text', nullable: true)]
    private $reference;

    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $totalttc;

    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $totalht;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $tva;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ptva;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'previsions')]
    private $user;

    #[ORM\OneToMany(targetEntity: Section::class, mappedBy: 'prevision')]
    private $section;

    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'previsions')]
    private $corbeille;

    #[ORM\OneToMany(targetEntity: Ligne::class, mappedBy: 'prevision')]
    private $ligne;

    public function __construct()
    {
        $this->section = new ArrayCollection();
        $this->ligne = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumprevision(): ?string
    {
        return $this->numprevision;
    }

    public function setNumprevision(string $numprevision): self
    {
        $this->numprevision = $numprevision;

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

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getTotalttc(): ?string
    {
        return $this->totalttc;
    }

    public function setTotalttc(?string $totalttc): self
    {
        $this->totalttc = $totalttc;

        return $this;
    }

    public function getTotalht(): ?string
    {
        return $this->totalht;
    }

    public function setTotalht(string $totalht): self
    {
        $this->totalht = $totalht;

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(?string $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getPtva(): ?string
    {
        return $this->ptva;
    }

    public function setPtva(?string $ptva): self
    {
        $this->ptva = $ptva;

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
            $section->setPrevision($this);
        }

        return $this;
    }

    public function removeSection(Section $section): self
    {
        if ($this->section->removeElement($section)) {
            // set the owning side to null (unless already changed)
            if ($section->getPrevision() === $this) {
                $section->setPrevision(null);
            }
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
     * @return Collection|Ligne[]
     */
    public function getLigne(): Collection
    {
        return $this->ligne;
    }

    public function addLigne(Ligne $ligne): self
    {
        if (!$this->ligne->contains($ligne)) {
            $this->ligne[] = $ligne;
            $ligne->setPrevision($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->ligne->removeElement($ligne)) {
            // set the owning side to null (unless already changed)
            if ($ligne->getPrevision() === $this) {
                $ligne->setPrevision(null);
            }
        }

        return $this;
    }
}
