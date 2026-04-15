<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: 'App\Repository\MonnaieRepository')]
class Monnaie
{
    #[Groups(['articles','monnaie','pychantier','devis','commande','decompte','facture','caisse'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['articles','monnaie','pychantier','devis','commande','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $code;

    #[ORM\OneToMany(mappedBy: 'monnaie', targetEntity: Bon::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $bons;

    #[Groups(['articles','monnaie','pychantier','devis','commande','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $libelle;

    #[ORM\OneToMany(mappedBy: 'monnaie', targetEntity: Devis::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $devis;

    #[ORM\OneToMany(mappedBy: 'monnaies', targetEntity: Article::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $articles;

    #[ORM\OneToMany(mappedBy: 'monnaie', targetEntity: Caisse::class)]
    private $caisses;

    public function __construct()
    {
        $this->bons = new ArrayCollection();
        $this->devis = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->caisses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection|Bon[]
     */
    public function getBons(): Collection
    {
        return $this->bons;
    }

    public function addBon(Bon $bon): self
    {
        if (!$this->bons->contains($bon)) {
            $this->bons[] = $bon;
            $bon->setMonnaie($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->contains($bon)) {
            $this->bons->removeElement($bon);
            // set the owning side to null (unless already changed)
            if ($bon->getMonnaie() === $this) {
                $bon->setMonnaie(null);
            }
        }

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Devis[]
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis[] = $devi;
            $devi->setMonnaie($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->contains($devi)) {
            $this->devis->removeElement($devi);
            // set the owning side to null (unless already changed)
            if ($devi->getMonnaie() === $this) {
                $devi->setMonnaie(null);
            }
        }

        return $this;
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
            $article->setMonnaies($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getMonnaies() === $this) {
                $article->setMonnaies(null);
            }
        }

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
            $caiss->setMonnaie($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->contains($caiss)) {
            $this->caisses->removeElement($caiss);
            // set the owning side to null (unless already changed)
            if ($caiss->getMonnaie() === $this) {
                $caiss->setMonnaie(null);
            }
        }

        return $this;
    }


}
