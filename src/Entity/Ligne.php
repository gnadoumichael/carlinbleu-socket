<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Groupe;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\User;
use App\Entity\Livraison;
use App\Entity\Decompte;
use App\Repository\LigneRepository;


#[ORM\Entity(repositoryClass: LigneRepository::class)]
class Ligne
{
    #[Groups(['pyligne','pydevis','pychantiers','pychantier','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['pychantier','pyligne','pydevis','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[Groups(['pychantier','pyligne','pydevis','pychantiers','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotNull]
    private $designation;

    #[Groups(['pychantier','pyligne','pydevis','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $zone;

    #[Groups(['pychantier','pyligne','pydevis','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotNull]
    private $unite;

    #[Groups(['pychantier','pyligne','pydevis','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotNull]
    private $quantite;

    #[Groups(['pychantier','pyligne','pydevis','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotNull]
    private $pu;

    #[Groups(['pychantier','pyligne','pydevis','devis','commande','paligne','ligne','facture','decompte','facture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $remise;

    #[Groups(['pychantier','pydevis','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $reference;

    #[Groups(['pychantier','pyligne','pydevis','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $type;

    #[Groups(['clive','commande'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Article', inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $article;

    #[Groups(['paligne'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $chantier;

    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $devis;

    #[Groups(['pychantier','pydevis','devis','commande','paligne','ligne','decompte','facture'])]
    #[ORM\ManyToOne(targetEntity: Groupe::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $groupe;

    #[Groups(['pyligne'])]
    #[ORM\ManyToOne(targetEntity: Bon::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $bon;

    #[ORM\ManyToOne(targetEntity: Caisse::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $caisse;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'lignes')]
    private $user;

    #[Groups(['clive'])]
    #[ORM\ManyToOne(targetEntity: Livraison::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $livraison;

    #[ORM\ManyToOne(targetEntity: Prevision::class, inversedBy: 'ligne')]
    private $prevision;

    #[Groups(['devis','commande','paligne','ligne','facture','decompte','facture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $avancement;

    #[Groups(['devis','commande'])]
    #[ORM\ManyToOne(targetEntity: Decompte::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $decompte;

    #[Groups(['devis','commande'])]
    #[ORM\ManyToOne(targetEntity: Facture::class, inversedBy: 'lignes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $facture;

    #[Groups(['ligne','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $livrer = null;

    #[Groups(['paligne','ligne','clive','devis','commande','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reste = null;

    #[Groups(['pyligne','pydevis','pychantiers','pychantier','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $realiser= null;

    #[Groups(['pyligne','pydevis','pychantiers','pychantier','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ecart = null;

    #[Groups(['pyligne','pydevis','pychantiers','pychantier','clive','devis','commande','paligne','ligne','facture','decompte','facture','caisse'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $progression = null;

    #[ORM\OneToMany(mappedBy: 'ligne', targetEntity: Journal::class)]
    private Collection $journals;

    public function __construct()
    {
        $this->journals = new ArrayCollection();
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

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): self
    {
        $this->zone = $zone;

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

    public function getQuantite(): ?float
    {
        return $this->quantite;
    }

    public function setQuantite(?float $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPu(): ?float
    {
        return $this->pu;
    }

    public function setPu(?float $pu): self
    {
        $this->pu = $pu;

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

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

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

    public function getLigne(): ?int
    {
        return $this->ligne;
    }

    public function setLigne(?int $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

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

    public function getDevis(): ?Devis
    {
        return $this->devis;
    }

    public function setDevis(?Devis $devis): self
    {
        $this->devis = $devis;

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->groupe;
    }

    public function setGroupe(?Groupe $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getBon(): ?Bon
    {
        return $this->bon;
    }

    public function setBon(?Bon $bon): self
    {
        $this->bon = $bon;

        return $this;
    }

    public function getCaisse(): ?Caisse
    {
        return $this->caisse;
    }

    public function setCaisse(?Caisse $caisse): self
    {
        $this->caisse = $caisse;

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

    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }

    public function setLivraison(?Livraison $livraison): self
    {
        $this->livraison = $livraison;

        return $this;
    }

    public function getPrevision(): ?Prevision
    {
        return $this->prevision;
    }

    public function setPrevision(?Prevision $prevision): self
    {
        $this->prevision = $prevision;

        return $this;
    }

    public function getAvancement(): ?string
    {
        return $this->avancement;
    }

    public function setAvancement(?string $avancement): self
    {
        $this->avancement = $avancement;

        return $this;
    }

    public function getDecompte(): ?Decompte
    {
        return $this->decompte;
    }

    public function setDecompte(?Decompte $decompte): self
    {
        $this->decompte = $decompte;

        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        $this->facture = $facture;
        return $this;
    }

    public function getLivrer(): ?string
    {
        return $this->livrer;
    }

    public function setLivrer(?string $livrer): static
    {
        $this->livrer = $livrer;
        return $this;
    }

    public function getReste(): ?string
    {
        return $this->reste;
    }
    public function setReste(?string $reste): static
    {
        $this->reste = $reste;
        return $this;
    }

    public function getRealiser(): ?string
    {
        return $this->realiser;
    }
    public function setRealiser(?string $realiser): static
    {
        $this->realiser = $realiser;
        return $this;
    }

    public function getEcart(): ?string
    {
        return $this->ecart;
    }
    public function setEcart(?string $ecart): static
    {
        $this->ecart = $ecart;
        return $this;
    }

    public function getProgression(): ?string
    {
        return $this->progression;
    }
    public function setProgression(?string $progression): static
    {
        $this->progression = $progression;
        return $this;
    }

    /**
     * @return Collection<int, Journal>
     */
    public function getJournals(): Collection
    {
        return $this->journals;
    }
    public function addJournal(Journal $journal): static
    {
        if (!$this->journals->contains($journal)) {
            $this->journals->add($journal);
            $journal->setLigne($this);
        }

        return $this;
    }
    public function removeJournal(Journal $journal): static
    {
        if ($this->journals->removeElement($journal)) {
            // set the owning side to null (unless already changed)
            if ($journal->getLigne() === $this) {
                $journal->setLigne(null);
            }
        }
        return $this;
    }

}
