<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;


#[ORM\Entity(repositoryClass: 'App\Repository\ArticleRepository')]
class Article
{
    #[Groups('articles')]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    protected $images;

    #[Groups('articles')]
    #[ORM\Column(type: 'text')]
    #[Assert\NotNull]
    private $designation;


    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $unite;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $stock;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $pu;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $reference;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Ligne', mappedBy: 'article')]
    private $lignes;


    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\TypeArticle', inversedBy: 'articles')]
    private $typeArticle;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $quantite;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $remise;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $vente;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $disponibilite;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $marque;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;


    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Monnaie', inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $monnaies;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link3;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info3;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Article', inversedBy: 'via')]
    private $article;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Article', mappedBy: 'article')]
    private $via;

    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Biblio', inversedBy: 'articles')]
    private $biblio;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $partage;

    #[Groups('articles')]
    #[ORM\OneToMany(targetEntity: 'App\Entity\Partager', mappedBy: 'article')]
    private $partagers;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'doarticles')]
    private $dobyuser;

    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Typear', inversedBy: 'articles')]
    private $typear;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $achat;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $revient;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Fournisseur', inversedBy: 'articles')]
    private $fournisseur;

    #[Groups('articles')]
    #[ORM\OneToMany(targetEntity: 'App\Entity\Recap', mappedBy: 'article')]
    private $recaps;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Lien', inversedBy: 'articles')]
    private $lien;



    public function __construct()
    {
        $this->lignes = new ArrayCollection();
        $this->via = new ArrayCollection();
        $this->partagers = new ArrayCollection();
        $this->recaps = new ArrayCollection();
        $this->liens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(string $unite): self
    {
        $this->unite = $unite;

        return $this;
    }

    public function getStock(): ?string
    {
        return $this->stock;
    }

    public function setStock(string $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getPu(): ?string
    {
        return $this->pu;
    }

    public function setPu(?string $pu): self
    {
        $this->pu = $pu;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

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
            $ligne->setArticle($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getArticle() === $this) {
                $ligne->setArticle(null);
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

    public function getTypeArticle(): ?TypeArticle
    {
        return $this->typeArticle;
    }

    public function setTypeArticle(?TypeArticle $typeArticle): self
    {
        $this->typeArticle = $typeArticle;

        return $this;
    }


    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(?string $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getRemise(): ?string
    {
        return $this->remise;
    }

    public function setRemise(?string $remise): self
    {
        $this->remise = $remise;

        return $this;
    }


    public function getVente(): ?string
    {
        return $this->vente;
    }

    public function setVente(?string $vente): self
    {
        $this->vente = $vente;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(?string $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMonnaies(): ?Monnaie
    {
        return $this->monnaies;
    }

    public function setMonnaies(?Monnaie $monnaies): self
    {
        $this->monnaies = $monnaies;

        return $this;
    }

    public function getLink1(): ?string
    {
        return $this->link1;
    }

    public function setLink1(?string $link1): self
    {
        $this->link1 = $link1;

        return $this;
    }

    public function getLink2(): ?string
    {
        return $this->link2;
    }

    public function setLink2(?string $link2): self
    {
        $this->link2 = $link2;

        return $this;
    }

    public function getLink3(): ?string
    {
        return $this->link3;
    }

    public function setLink3(?string $link3): self
    {
        $this->link3 = $link3;

        return $this;
    }

    public function getInfo1(): ?string
    {
        return $this->info1;
    }

    public function setInfo1(?string $info1): self
    {
        $this->info1 = $info1;

        return $this;
    }

    public function getInfo2(): ?string
    {
        return $this->info2;
    }

    public function setInfo2(?string $info2): self
    {
        $this->info2 = $info2;

        return $this;
    }

    public function getInfo3(): ?string
    {
        return $this->info3;
    }

    public function setInfo3(?string $info3): self
    {
        $this->info3 = $info3;

        return $this;
    }

    public function getArticle(): ?self
    {
        return $this->article;
    }

    public function setArticle(?self $article): self
    {
        $this->article = $article;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getVia(): Collection
    {
        return $this->via;
    }

    public function addVium(self $vium): self
    {
        if (!$this->via->contains($vium)) {
            $this->via[] = $vium;
            $vium->setArticle($this);
        }

        return $this;
    }

    public function removeVium(self $vium): self
    {
        if ($this->via->contains($vium)) {
            $this->via->removeElement($vium);
            // set the owning side to null (unless already changed)
            if ($vium->getArticle() === $this) {
                $vium->setArticle(null);
            }
        }

        return $this;
    }

    public function getBiblio(): ?Biblio
    {
        return $this->biblio;
    }

    public function setBiblio(?Biblio $biblio): self
    {
        $this->biblio = $biblio;

        return $this;
    }

    public function getPartage(): ?string
    {
        return $this->partage;
    }

    public function setPartage(?string $partage): self
    {
        $this->partage = $partage;

        return $this;
    }

    /**
     * @return Collection|Partager[]
     */
    public function getPartagers(): Collection
    {
        return $this->partagers;
    }

    public function addPartager(Partager $partager): self
    {
        if (!$this->partagers->contains($partager)) {
            $this->partagers[] = $partager;
            $partager->setArticle($this);
        }

        return $this;
    }

    public function removePartager(Partager $partager): self
    {
        if ($this->partagers->contains($partager)) {
            $this->partagers->removeElement($partager);
            // set the owning side to null (unless already changed)
            if ($partager->getArticle() === $this) {
                $partager->setArticle(null);
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

    public function getTypear(): ?Typear
    {
        return $this->typear;
    }

    public function setTypear(?Typear $typear): self
    {
        $this->typear = $typear;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAchat(): ?string
    {
        return $this->achat;
    }

    /**
     * @param string|null $achat
     * @return $this
     */
    public function setAchat(?string $achat): self
    {
        $this->achat = $achat;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRevient(): ?string
    {
        return $this->revient;
    }

    /**
     * @param string|null $revient
     * @return $this
     */
    public function setRevient(?string $revient): self
    {
        $this->revient = $revient;

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

    /**
     * @return Collection|Recap[]
     */
    public function getRecaps(): Collection
    {
        return $this->recaps;
    }

    public function addRecap(Recap $recap): self
    {
        if (!$this->recaps->contains($recap)) {
            $this->recaps[] = $recap;
            $recap->setArticle($this);
        }

        return $this;
    }

    public function removeRecap(Recap $recap): self
    {
        if ($this->recaps->contains($recap)) {
            $this->recaps->removeElement($recap);
            // set the owning side to null (unless already changed)
            if ($recap->getArticle() === $this) {
                $recap->setArticle(null);
            }
        }

        return $this;
    }

    public function getLien(): ?Lien
    {
        return $this->lien;
    }

    public function setLien(?Lien $lien): self
    {
        $this->lien = $lien;

        return $this;
    }



}
