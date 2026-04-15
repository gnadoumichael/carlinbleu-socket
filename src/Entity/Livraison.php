<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: 'App\Repository\LivraisonRepository')]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Chantier', inversedBy: 'livraisons')]
    private $chantier;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'livraisons')]
    private $user;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotNull]
    private $numlivre;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'text', nullable: true)]
    private $livrereference;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Client', inversedBy: 'livraisons')]
    private $client;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Personnel', inversedBy: 'livraisons')]
    private $personnel;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Ligne', mappedBy: 'livraison')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $lignes;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'dobylivraisons')]
    private $dobyuser;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $rang;

    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'livraisons')]
    private $devis;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Corbeille', inversedBy: 'livraison')]
    private $corbeille;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $status;

    public function __construct()
    {
        $this->lignes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getNumlivre(): ?string
    {
        return $this->numlivre;
    }

    public function setNumlivre(string $numlivre): self
    {
        $this->numlivre = $numlivre;

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

    public function getLivreReference(): ?string
    {
        return $this->livrereference;
    }

    public function setLivreReference(?string $livrereference): self
    {
        $this->livrereference = $livrereference;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

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

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): self
    {
        $this->personnel = $personnel;

        return $this;
    }

    /**
     * @return Collection|Ligne[]
     */
    public function getLignes(): Collection
    {
        return $this->lignes;
    }

    public function addLigne(Ligne $ligne): self
    {
        if (!$this->lignes->contains($ligne)) {
            $this->lignes[] = $ligne;
            $ligne->setLivraison($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getLivraison() === $this) {
                $ligne->setLivraison(null);
            }
        }

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

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getDevis(): ?Devis
    {
        return $this->devis;
    }

    public function setDevis(?Devis $devis): self
    {
        $this->devis = $devis;

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
