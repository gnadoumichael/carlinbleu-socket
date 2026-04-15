<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Famille;
use App\Entity\User;

#[ORM\Entity(repositoryClass: 'App\Repository\SousfamilleRepository')]
class Sousfamille
{
    #[Groups(['articles','sousfamilles'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['articles','sousfamilles'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $sousfamille;

    #[Groups(['sousfamilles'])]
    #[ORM\ManyToOne(targetEntity: Famille::class, inversedBy: 'sousfamille')]
    private $famille;

    #[ORM\OneToMany(mappedBy: 'sousfamille', targetEntity: 'App\Entity\Article')]
    private $articles;

    #[Groups(['sousfamilles'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'sousfamilles')]
    private $corbeille;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'sousfamille')]
    private $user;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSousfamille(): ?string
    {
        return $this->sousfamille;
    }

    public function setSousfamille(string $sousfamille): self
    {
        $this->sousfamille = $sousfamille;

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
            $article->setSousfamille($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getSousfamille() === $this) {
                $article->setSousfamille(null);
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
