<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Entity\Sousfamille;
use App\Repository\FamilleRepository;

#[ORM\Entity(repositoryClass: FamilleRepository::class)]
class Famille
{
    #[Groups(['familles','materiels','articles','sousfamilles'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['familles','materiels','articles','sousfamilles'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $famille;

    #[ORM\OneToMany(mappedBy: 'famille', targetEntity: 'App\Entity\Article')]
    private $articles;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'famille')]
    private $user;

    #[ORM\OneToMany(mappedBy: 'famille', targetEntity: Sousfamille::class)]
    private $sousfamille;

    #[ORM\OneToMany(targetEntity: Materiel::class, mappedBy: 'famille')]
    private $materiels;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $type;

    #[Groups(['familles','materiels','sousfamilles'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'familles')]
    private $corbeille;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->sousfamille = new ArrayCollection();
        $this->materiels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamille(): ?string
    {
        return $this->famille;
    }

    public function setFamille(string $famille): self
    {
        $this->famille = $famille;

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
            $article->setFamille($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getFamille() === $this) {
                $article->setFamille(null);
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

    /**
     * @return Collection|Sousfamille[]
     */
    public function getSousfamille(): Collection
    {
        return $this->sousfamille;
    }

    public function addSousfamille(Sousfamille $sousfamille): self
    {
        if (!$this->sousfamille->contains($sousfamille)) {
            $this->sousfamille[] = $sousfamille;
            $sousfamille->setFamille($this);
        }

        return $this;
    }

    public function removeSousfamille(Sousfamille $sousfamille): self
    {
        if ($this->sousfamille->contains($sousfamille)) {
            $this->sousfamille->removeElement($sousfamille);
            // set the owning side to null (unless already changed)
            if ($sousfamille->getFamille() === $this) {
                $sousfamille->setFamille(null);
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
            $materiel->setFamille($this);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): self
    {
        if ($this->materiels->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getFamille() === $this) {
                $materiel->setFamille(null);
            }
        }

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

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
