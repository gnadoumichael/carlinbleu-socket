<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: 'App\Repository\IntervenantRepository')]
class Intervenant
{
    #[Groups(['interve','caisse'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['interve','caisse'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[Groups(['interve','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $profession;

    #[Groups(['interve','caisse'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $payer;

    #[Groups(['interve','caisse'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $recu;

    #[Groups(['interve','caisse'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $reste;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'intervenants')]
    private $user;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Chantier', inversedBy: 'intervenants')]
    private $chantier;

    #[Groups('interve')]
    #[ORM\OneToMany(targetEntity: 'App\Entity\Caisse', mappedBy: 'intervenant')]
    private $caisses;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Client', inversedBy: 'intervenants')]
    private $client;

    #[Groups('interve')]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'dobyintervenants')]
    private $dobyuser;

    #[Groups('interve')]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'intervenants')]
    private $corbeille;

    #[Groups('interve')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    public function __construct()
    {
        $this->caisses = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getPayer(): ?float
    {
        return $this->payer;
    }

    public function setPayer(?float  $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getRecu(): ?float
    {
        return $this->recu;
    }

    public function setRecu(?float $recu): self
    {
        $this->recu = $recu;

        return $this;
    }

    public function getReste(): ?float
    {
        return $this->reste;
    }

    public function setReste(?float $reste): self
    {
        $this->reste = $reste;

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
     * @return Collection
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaiss(Caisse $caiss): self
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses[] = $caiss;
            $caiss->setIntervenant($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->contains($caiss)) {
            $this->caisses->removeElement($caiss);
            // set the owning side to null (unless already changed)
            if ($caiss->getIntervenant() === $this) {
                $caiss->setIntervenant(null);
            }
        }

        return $this;
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


    public function getDobyuser(): ?User
    {
        return $this->dobyuser;
    }

    public function setDobyuser(?User $dobyuser): self
    {
        $this->dobyuser = $dobyuser;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

}
