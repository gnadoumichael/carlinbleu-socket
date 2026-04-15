<?php

namespace App\Entity;

use App\Repository\PaieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: PaieRepository::class)]
class Paie
{
    #[Groups(['paie'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;


    #[Groups(['paie'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['paie'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[Groups(['paie'])]
    #[ORM\OneToMany(targetEntity: Caisse::class, mappedBy: 'paie')]
    private $caisses;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'paies')]
    private $user;

    #[Groups(['paie'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'paies')]
    private $corbeille;

    /**
     * @var Collection<int, Fiche>
     */
    #[ORM\OneToMany(mappedBy: 'paie', targetEntity: Fiche::class)]
    private Collection $fiches;

    public function __construct()
    {
        $this->caisses = new ArrayCollection();
        $this->fiches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Caisse[]
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaiss(Caisse $caiss): self
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses[] = $caiss;
            $caiss->setPaie($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getPaie() === $this) {
                $caiss->setPaie(null);
            }
        }

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
     * @return Collection<int, Fiche>
     */
    public function getFiches(): Collection
    {
        return $this->fiches;
    }

    public function addFich(Fiche $fich): static
    {
        if (!$this->fiches->contains($fich)) {
            $this->fiches->add($fich);
            $fich->setPaie($this);
        }

        return $this;
    }

    public function removeFich(Fiche $fich): static
    {
        if ($this->fiches->removeElement($fich)) {
            // set the owning side to null (unless already changed)
            if ($fich->getPaie() === $this) {
                $fich->setPaie(null);
            }
        }

        return $this;
    }
}
