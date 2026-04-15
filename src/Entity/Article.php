<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Entity\Fournisseur;
use App\Entity\Typear;
use App\Entity\Lien;
use App\Entity\Recap;
use App\Entity\Partager;
use App\Entity\Monnaie;

#[ORM\Entity(repositoryClass: 'App\Repository\ArticleRepository')]
class Article
{
    #[Groups(['articles','clive','devis','commande'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    private $images1;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    private $images2;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    private $images3;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    private $images4;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    private $images5;

    #[Groups(['articles','clive','devis', 'commande'])]
    #[ORM\Column(type: 'text')]
    #[Assert\NotNull]
    private $designation;

    #[Groups(['articles','clive','devis', 'commande'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $unite;

    #[Groups(['articles','clive', 'commande'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $stock;

    #[Groups(['articles','clive','devis', 'commande'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $pu;

    #[Groups(['articles','devis'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $reference;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Ligne::class)]
    private $lignes;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: Famille::class, inversedBy: 'articles')]
    private $famille;

    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: Sousfamille::class , inversedBy: 'articles')]
    private $sousfamille;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $quantite;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $remise;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $disponibilite;

    #[Groups('articles')]
    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $marque;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: Monnaie::class, inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $monnaies;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link3;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link4;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link5;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info3;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info4;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $info5;

    #[Groups('articles')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $partage;

    #[Groups('articles')]
    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Partager::class)]
    private $partagers;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'doarticles')]
    private $dobyuser;

    #[Groups('articles')]
    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'articles')]
    private $fournisseur;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Recap::class)]
    private $recap;

    #[Groups(['articles','clive'])]
    #[ORM\ManyToOne(targetEntity: Typear::class, inversedBy: 'articles')]
    private $typear;

    #[ORM\ManyToOne(targetEntity: Lien::class, inversedBy: 'articles')]
    private $lien;

    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: 'via')]
    private $article;

    #[ORM\OneToOne(inversedBy: 'articlecomposer', cascade: ['persist', 'remove'])]
    private ?Bon $composer = null;


    public function __construct()
    {
        $this->lignes = new ArrayCollection();
        $this->partagers = new ArrayCollection();
        $this->recap = new ArrayCollection();
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

    public function getFamille(): ?Famille
    {
        return $this->famille;
    }

    public function setFamille(?Famille $famille): self
    {
        $this->famille = $famille;

        return $this;
    }

    public function setTypeArticle(?Famille $famille): self
    {
        $this->famille = $famille;

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

    public function getInfo4(): ?string
    {
        return $this->info4;
    }

    public function setInfo4(?string $info4): self
    {
        $this->info4 = $info4;
        return $this;
    }

    public function getInfo5(): ?string
    {
        return $this->info5;
    }

    public function setInfo5(?string $info5): self
    {
        $this->info5 = $info5;
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


    public function getSousfamille(): ?Sousfamille
    {
        return $this->sousfamille;
    }

    public function setSousfamille(?Sousfamille $sousfamille): self
    {
        $this->sousfamille = $sousfamille;

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
        return $this->recap;
    }

    public function addRecap(Recap $recap): self
    {
        if (!$this->recap->contains($recap)) {
            $this->recap[] = $recap;
            $recap->setArticle($this);
        }

        return $this;
    }

    public function removeRecap(Recap $recap): self
    {
        if ($this->recap->contains($recap)) {
            $this->recap->removeElement($recap);
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

    public function getTypear(): ?Typear
    {
        return $this->typear;
    }

    public function setTypear(?Typear $typear): self
    {
        $this->typear = $typear;

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

    public function getLink4(): ?string
    {
        return $this->link4;
    }

    public function setLink4(?string $link4): self
    {
        $this->link4 = $link4;
        return $this;
    }

    public function getLink5(): ?string
    {
        return $this->link5;
    }

    public function setLink5(?string $link5): self
    {
        $this->link5 = $link5;
        return $this;
    }

    public function getImages1()
    {
        return $this->images1;
    }


    public function setImages1(File $images1 = null)
    {
        $this->images1 = $images1;
    }


    public function getImages2()
    {
        return $this->images2;
    }


    public function setImages2(File $images2 = null)
    {
        $this->images2 = $images2;
    }


    public function getImages3()
    {
        return $this->images3;
    }


    public function setImages3(File $images3 = null)
    {
        $this->images3 = $images3;
    }


    public function getImages4()
    {
        return $this->images4;
    }


    public function setImages4(File $images4 = null)
    {
        $this->images4 = $images4;
    }


    public function getImages5()
    {
        return $this->images5;
    }


    public function setImages5(File $images5 = null)
    {
        $this->images5 = $images5;
    }


    public function getRecap(): ArrayCollection
    {
        return $this->recap;
    }


    public function setRecap(ArrayCollection $recap): void
    {
        $this->recap = $recap;
    }

    public function getComposer(): ?Bon
    {
        return $this->composer;
    }

    public function setComposer(?Bon $composer): static
    {
        $this->composer = $composer;
        return $this;
    }

}
