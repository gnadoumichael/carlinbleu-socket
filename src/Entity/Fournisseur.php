<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Repository\FournisseurRepository;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[Groups(['benef','pycaisse','pychantier','pyfournisseurs','materiels','fournisseurs','articles','commande','fours','caisse','valides'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['benef','pycaisse','pychantier','pyfournisseurs','materiels','fournisseurs','articles','commande','fours','caisse','valides'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $fournisseur;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'fournisseurs')]
    private $user;

    #[Groups(['pyfournisseurs','materiels','fournisseurs','articles','commande','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $telephone;

    #[Groups(['pyfournisseurs','materiels','fournisseurs','articles','commande','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $mobile;

    #[Groups(['pyfournisseurs','materiels','fournisseurs','articles','commande','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $fax;

    #[Groups(['pyfournisseurs','materiels','fournisseurs','articles','commande','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adresse;

    #[Groups(['pyfournisseurs','materiels','fournisseurs','articles','commande','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $mail;

    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: 'App\Entity\Article')]
    private $articles;

    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: Materiel::class)]
    private $materiels;

    #[Groups(['pycaisse','pyfournisseurs','materiels','fournisseurs','articles','commande','fours','caisse'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $type;

    #[Groups(['materiels','article','fours'])]
    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: Bon::class)]
    private Collection $bons;

    #[Groups(['pyfournisseurs','materiels','fournisseurs','article','commande','fours'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fonction = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genre = null;

    #[Groups(['pychantier','pyfournisseurs','pyfournisseurs'])]
    #[ORM\ManyToOne(inversedBy: 'fournisseurs')]
    private ?Corbeille $corbeille = null;

    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: Caisse::class)]
    private Collection $caisses;

    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: Beneficiaire::class)]
    private $beneficiaires;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->materiels = new ArrayCollection();
        $this->beneficiaires = new ArrayCollection();
        $this->bons = new ArrayCollection();
        $this->caisses = new ArrayCollection();
    }

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * @param mixed $fournisseur
     */
    public function setFournisseur($fournisseur): void
    {
        $this->fournisseur = $fournisseur;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setFournisseur($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getFournisseur() === $this) {
                $article->setFournisseur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Materiel[]
     */
    public function getMateriels(): Collection
    {
        return $this->materiels;
    }

    public function addMateriel(Materiel $materiel): self
    {
        if (!$this->materiels->contains($materiel)) {
            $this->materiels[] = $materiel;
            $materiel->setFournisseur($this);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): self
    {
        if ($this->materiels->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getFournisseur() === $this) {
                $materiel->setFournisseur(null);
            }
        }

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Bon>
     */
    public function getBons(): Collection
    {
        return $this->bons;
    }
    public function addBon(Bon $bon): static
    {
        if (!$this->bons->contains($bon)) {
            $this->bons->add($bon);
            $bon->setFournisseur($this);
        }

        return $this;
    }
    public function removeBon(Bon $bon): static
    {
        if ($this->bons->removeElement($bon)) {
            // set the owning side to null (unless already changed)
            if ($bon->getFournisseur() === $this) {
                $bon->setFournisseur(null);
            }
        }

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): static
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getCorbeille(): ?Corbeille
    {
        return $this->corbeille;
    }

    public function setCorbeille(?Corbeille $corbeille): static
    {
        $this->corbeille = $corbeille;

        return $this;
    }

    /**
     * @return Collection<int, Caisse>
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaiss(Caisse $caiss): static
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses->add($caiss);
            $caiss->setFournisseur($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): static
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getFournisseur() === $this) {
                $caiss->setFournisseur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Beneficiaire>
     */
    public function getBeneficiare(): Collection
    {
        return $this->beneficiaires;
    }
    public function addBeneficiaire(Beneficiaire $bene): static
    {
        if (!$this->beneficiaires->contains($bene)) {
            $this->beneficiaires->add($bene);
            $bene->setFournisseur($this);
        }

        return $this;
    }
    public function removeBeneficiaire(Beneficiaire $bene): static
    {
        if ($this->beneficiaires->removeElement($bene)) {
            // set the owning side to null (unless already changed)
            if ($bene->getFournisseur() === $this) {
                $bene->setFournisseur(null);
            }
        }

        return $this;
    }

}
