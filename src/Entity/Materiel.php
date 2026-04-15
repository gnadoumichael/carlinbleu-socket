<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaterielRepository::class)]
class Materiel
{
    #[Groups(['materiels','matchan','matbenef'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['materiels','matchan','matbenef'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $materiel;

    #[Groups(['materiels','matchan','matbenef'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'materiels')]
    private $user;

    #[Groups(['materiels','matchan','matbenef'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[Groups('materiels')]
    #[ORM\OneToMany(mappedBy: 'materiel', targetEntity: MaterielChantier::class)]
    private $materielChantiers;

    #[Groups('materiels')]
    #[ORM\OneToMany(targetEntity: MaterielBeneficiaire::class, mappedBy: 'materiel')]
    private $materielBeneficiaires;

    #[Groups('materiels')]
    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[Groups('materiels')]
    #[ORM\Column(type: 'integer')]
    private $stock;

    #[Groups('materiels')]
    #[ORM\ManyToOne(targetEntity: Famille::class, inversedBy: 'materiels')]
    private $famille;

    #[Groups('materiels')]
    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'materiels')]
    private $fournisseur;

    #[Groups('materiels')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $reste;


    public function __construct()
    {
        $this->materielChantiers = new ArrayCollection();
        $this->materielBeneficiaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMateriel(): ?string
    {
        return $this->materiel;
    }

    public function setMateriel(string $materiel): self
    {
        $this->materiel = $materiel;

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


    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getMaterielChantiers(): Collection
    {
        return $this->materielChantiers;
    }

    public function addMaterielChantier(MaterielChantier $materielChantier): self
    {
        if (!$this->materielChantiers->contains($materielChantier)) {
            $this->materielChantiers[] = $materielChantier;
            $materielChantier->setMateriel($this);
        }

        return $this;
    }

    public function removeMaterielChantier(MaterielChantier $materielChantier): self
    {
        if ($this->materielChantiers->removeElement($materielChantier)) {
            // set the owning side to null (unless already changed)
            if ($materielChantier->getMateriel() === $this) {
                $materielChantier->setMateriel(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMaterielBeneficiaires(): Collection
    {
        return $this->materielBeneficiaires;
    }

    public function addMaterielBeneficiaire(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if (!$this->materielBeneficiaires->contains($materielBeneficiaire)) {
            $this->materielBeneficiaires[] = $materielBeneficiaire;
            $materielBeneficiaire->setMateriel($this);
        }
        return $this;
    }

    public function removeMaterielPersonnel(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if ($this->materielBeneficiaires->removeElement($materielBeneficiaire)) {
            // set the owning side to null (unless already changed)
            if ($materielBeneficiaire->getMateriel() === $this) {
                $materielBeneficiaire->setMateriel(null);
            }
        }
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getFamille(): ?Famille
    {
        return $this->famille;
    }

    public function setFamille(?Famille $famille): self
    {
        $this->famille = $famille;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getReste(): ?string
    {
        return $this->reste;
    }

    public function setReste(?string $reste): self
    {
        $this->reste = $reste;

        return $this;
    }

    public function removeMaterielBeneficiaire(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if ($this->materielBeneficiaires->removeElement($materielBeneficiaire)) {
            // set the owning side to null (unless already changed)
            if ($materielBeneficiaire->getMateriel() === $this) {
                $materielBeneficiaire->setMateriel(null);
            }
        }

        return $this;
    }
}
