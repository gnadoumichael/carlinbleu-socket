<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;

#[ORM\Entity(repositoryClass: 'App\Repository\FormeRepository')]
class Forme
{
    #[Groups('forme')]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    protected $footImage;

    #[Groups('forme')]
    #[ORM\Column(type: 'integer')]
    private $dsize;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'formes')]
    private $user;

    #[Groups('forme')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $tcolor;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $teteH;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $teteY;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $teteDH;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $teteDG;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $teteDD;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $teteDB;

    #[Groups('forme')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $link;

    #[Groups('forme')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $piedcolor;

    #[Groups('forme')]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $piedsize;

    #[Groups('forme')]
    #[ORM\Column(type: 'text', nullable: true)]
    private $pied;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $headerWith = null;

    #[Groups('forme')]
    #[ORM\Column]
    private ?float $headerHeight = null;

    #[Groups('forme')]
    #[ORM\Column(nullable: true)]
    private ?float $footerHeight = null;

    #[Groups('forme')]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $footerImage = null;

    #[Groups('forme')]
    #[ORM\Column(type: 'text', nullable: true)]
    private $headerText;

    #[Groups('forme')]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeEntete = null;

    #[Groups('forme')]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeFooter = null;

    #[Groups('forme')]
    #[ORM\Column(length: 255)]
    private ?string $intituler = null;

    #[Groups('forme')]
    #[ORM\Column(length: 255)]
    private ?string $used = null;

    #[Groups('forme')]
    #[ORM\Column]
    private ?int $rang = null;

    #[Groups('forme')]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $decolor = null;

    #[Groups('forme')]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $decolortex = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDsize(): ?int
    {
        return $this->dsize;
    }

    public function setDsize(int $dsize): self
    {
        $this->dsize = $dsize;

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

    public function getTcolor(): ?string
    {
        return $this->tcolor;
    }

    public function setTcolor(?string $tcolor): self
    {
        $this->tcolor = $tcolor;

        return $this;
    }

    public function getTeteH(): ?int
    {
        return $this->teteH;
    }

    public function setTeteH(?int $teteH): self
    {
        $this->teteH = $teteH;

        return $this;
    }

    public function getTeteY(): ?int
    {
        return $this->teteY;
    }

    public function setTeteY(?int $teteY): self
    {
        $this->teteY = $teteY;

        return $this;
    }

    public function getTeteDH(): ?int
    {
        return $this->teteDH;
    }

    public function setTeteDH(?int $teteDH): self
    {
        $this->teteDH = $teteDH;

        return $this;
    }

    public function getTeteDG(): ?int
    {
        return $this->teteDG;
    }

    public function setTeteDG(?int $teteDG): self
    {
        $this->teteDG = $teteDG;

        return $this;
    }

    public function getTeteDD(): ?int
    {
        return $this->teteDD;
    }

    public function setTeteDD(?int $teteDD): self
    {
        $this->teteDD = $teteDD;

        return $this;
    }

    public function getTeteDB(): ?int
    {
        return $this->teteDB;
    }

    public function setTeteDB(?int $teteDB): self
    {
        $this->teteDB = $teteDB;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getPiedcolor(): ?string
    {
        return $this->piedcolor;
    }

    public function setPiedcolor(?string $piedcolor): self
    {
        $this->piedcolor = $piedcolor;

        return $this;
    }

    public function getPiedsize(): ?int
    {
        return $this->piedsize;
    }

    public function setPiedsize(?int $piedsize): self
    {
        $this->piedsize = $piedsize;

        return $this;
    }

    public function getPied(): ?string
    {
        return $this->pied;
    }

    public function setPied(?string $pied): self
    {
        $this->pied = $pied;

        return $this;
    }

    public function getHeaderWith(): ?float
    {
        return $this->headerWith;
    }

    public function setHeaderWith(float $headerWith): self
    {
        $this->headerWith = $headerWith;

        return $this;
    }

    public function getHeaderHeight(): ?float
    {
        return $this->headerHeight;
    }

    public function setHeaderHeight(float $headerHeight): self
    {
        $this->headerHeight = $headerHeight;

        return $this;
    }

    public function getFooterHeight(): ?float
    {
        return $this->footerHeight;
    }

    public function setFooterHeight(?float $footerHeight): static
    {
        $this->footerHeight = $footerHeight;

        return $this;
    }

    public function getFooterImage(): ?string
    {
        return $this->footerImage;
    }

    public function setFooterImage(?string $footerImage): static
    {
        $this->footerImage = $footerImage;

        return $this;
    }

    public function getHeaderText(): ?string
    {
        return $this->headerText;
    }

    public function setHeaderText(string $headerText): static
    {
        $this->headerText = $headerText;

        return $this;
    }

    public function getTypeEntete(): ?string
    {
        return $this->typeEntete;
    }

    public function setTypeEntete(?string $typeEntete): static
    {
        $this->typeEntete = $typeEntete;

        return $this;
    }

    public function getTypeFooter(): ?string
    {
        return $this->typeFooter;
    }

    public function setTypeFooter(?string $typeFooter): static
    {
        $this->typeFooter = $typeFooter;

        return $this;
    }

    public function getIntituler(): ?string
    {
        return $this->intituler;
    }

    public function setIntituler(string $intituler): self
    {
        $this->intituler = $intituler;

        return $this;
    }

    public function getUsed(): ?string
    {
        return $this->used;
    }

    public function setUsed(string $used): self
    {
        $this->used = $used;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getDecolor(): ?string
    {
        return $this->decolor;
    }

    public function setDecolor(?string $decolor): static
    {
        $this->decolor = $decolor;

        return $this;
    }

    public function getDecolortex(): ?string
    {
        return $this->decolortex;
    }

    public function setDecolortex(?string $decolortex): static
    {
        $this->decolortex = $decolortex;

        return $this;
    }
}
