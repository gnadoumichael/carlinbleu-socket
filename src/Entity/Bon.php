<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\BonRepository;
use App\Entity\Contact;
use App\Entity\Client;
use App\Entity\User;
use App\Entity\Chantier;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\Corbeille;
use App\Entity\Monnaie;

#[ORM\Entity(repositoryClass: BonRepository::class)]
class Bon
{
    #[Groups(['apprestachan','pycaisse','pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours','caisse','devis'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['apprestachan','pycaisse','pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours','caisse','devis'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $numbon;

    #[Groups(['apprestachan','pychantier','pychantiers','pyfournisseurs','commande','fournisseurs','fours'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['apprestachan','pychantier','pychantiers','pyfournisseurs','commande','fournisseurs','fours'])]
    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotNull]
    private $bonreference;

    #[Groups(['apprestachan','pycaisse','pychantier','pychantiers','pyfournisseurs','commande','fournisseurs','fours','caisse'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $totalht;

    #[Groups(['apprestachan','pycaisse','pychantier','pychantiers','pyfournisseurs','commande','fournisseurs','fours','caisse'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $totalttc;

    #[Groups(['pychantier','commande','fournisseurs','fours'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $vremise;

    #[Groups(['pychantier','pychantiers','commande','fournisseurs','fours'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $vtva;

    #[Groups(['apprestachan','pycaisse','pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours','caisse'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[Groups(['pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours','caisse','devis'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $aaref;

    #[Groups(['pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours','caisse','devis'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotNull]
    private $tva;

    #[Groups(['pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours','caisse','devis'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ptva;

    #[Groups(['apprestachan','pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    #[Groups(['pyfournisseurs','commande','fournisseurs','fours'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'bons')]
    private $chantier;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'bons')]
    private $user;

    #[Groups(['pyfournisseurs','commande','fournisseurs','fours'])]
    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'bons')]
    private $client;

    #[Groups(['commande','fournisseurs','fours'])]
    #[ORM\ManyToOne(targetEntity: Contact::class, inversedBy: 'bons')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $contact;

    #[Groups(['commande','fournisseurs','fours'])]
    #[ORM\OneToMany(mappedBy: 'bon', targetEntity: Groupe::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $groupes;

    #[Groups(['clive','commande','fournisseurs','fours','devis'])]
    #[ORM\OneToMany(mappedBy: 'bon', targetEntity: Ligne::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $lignes;

    #[Groups(['pyfournisseurs','pychantier','commande','fournisseurs','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $aarem;

    #[Groups(['pychantier','commande','fournisseurs','fours'])]
    #[ORM\ManyToOne(targetEntity: Monnaie::class, inversedBy: 'bons')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $monnaie;

    #[Groups(['commande','fournisseurs','fours'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $modele;

    #[Groups('commande')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $marquer;

    #[Groups(['pychantier','pyfournisseurs','commande'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobybons')]
    private $dobyuser;

    #[Groups(['pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'bon')]
    private $corbeille;

    #[Groups(['pycaisse','pyligne','pychantier','pychantiers','pyfournisseurs','clive','commande','fournisseurs','fours','caisse'])]
    #[ORM\Column(type: 'text', nullable: true)]
    private $conditions;

    #[Groups(['apprestachan','pycaisse','pyfournisseurs','commande','caisse','fours'])]
    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'bons')]
    private $devis;

    #[ORM\ManyToOne(targetEntity: Section::class, inversedBy: 'bons')]
    private $section;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $rang;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'vabyuserbons')]
    private $vabyuser;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $status;

    #[Groups(['pyfournisseurs','pychantier','commande','caisse'])]
    #[ORM\ManyToOne(inversedBy: 'bons')]
    private ?Fournisseur $fournisseur = null;

    #[Groups(['apprestachan','pychantier','commande','fours'])]
    #[ORM\OneToMany(mappedBy: 'bon', targetEntity: Caisse::class)]
    private Collection $caisses;

    #[Groups(['apprestachan','pychantier','pyfournisseurs','commande','caisse','fours'])]
    #[ORM\Column(nullable: true)]
    private ?float $recu = null;

    #[Groups(['apprestachan','pychantier','pyfournisseurs','commande','caisse','fours'])]
    #[ORM\Column(nullable: true)]
    private ?float $reste = null;

    #[Groups(['devis'])]
    #[ORM\OneToOne(mappedBy: 'composer', cascade: ['persist', 'remove'])]
    private ?Article $articlecomposer = null;

    #[ORM\Column(nullable: true)]
    private ?int $model = null;

    #[Groups(['pyfournisseurs','commande','fournisseurs','fours'])]
    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'bonprepration')]
    private ?self $preparation = null;

    #[ORM\OneToMany(mappedBy: 'preparation', targetEntity: self::class)]
    private Collection $bonprepration;

    public function __construct()
    {
        $this->groupes = new ArrayCollection();
        $this->lignes = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->bonprepration = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumbon(): ?string
    {
        return $this->numbon;
    }

    public function setNumbon(string $numbon): self
    {
        $this->numbon = $numbon;

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

    public function getBonReference(): ?string
    {
        return $this->bonreference;
    }

    public function setBonReference(?string $bonreference): self
    {
        $this->bonreference = $bonreference;
        return $this;
    }

    public function getTotalht(): ?float
    {
        return $this->totalht;
    }

    public function setTotalht(?float $totalht): self
    {
        $this->totalht = $totalht;

        return $this;
    }

    public function getTotalttc(): ?float
    {
        return $this->totalttc;
    }

    public function setTotalttc(?float $totalttc): self
    {
        $this->totalttc = $totalttc;

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

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(?string $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getPtva(): ?string
    {
        return $this->ptva;
    }

    public function setPtva(?string $ptva): self
    {
        $this->ptva = $ptva;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->setBon($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->contains($groupe)) {
            $this->groupes->removeElement($groupe);
            // set the owning side to null (unless already changed)
            if ($groupe->getBon() === $this) {
                $groupe->setBon(null);
            }
        }

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
            $ligne->setBon($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getBon() === $this) {
                $ligne->setBon(null);
            }
        }

        return $this;
    }

    public function getAarem(): ?string
    {
        return $this->aarem;
    }

    public function setAarem(string $aarem): self
    {
        $this->aarem = $aarem;

        return $this;
    }

    public function getMonnaie(): ?Monnaie
    {
        return $this->monnaie;
    }

    public function setMonnaie(?Monnaie $monnaie): self
    {
        $this->monnaie = $monnaie;

        return $this;
    }

    public function getModele(): ?int
    {
        return $this->modele;
    }

    public function setModele(?int $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getMarquer(): ?string
    {
        return $this->marquer;
    }

    public function setMarquer(?string $marquer): self
    {
        $this->marquer = $marquer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAaref()
    {
        return $this->aaref;
    }

    /**
     * @param mixed $aaref
     */
    public function setAaref($aaref): void
    {
        $this->aaref = $aaref;
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

    public function getCorbeille(): ?Corbeille
    {
        return $this->corbeille;
    }

    public function setCorbeille(?Corbeille $corbeille): self
    {
        $this->corbeille = $corbeille;

        return $this;
    }

    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): self
    {
        $this->conditions = $conditions;

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

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

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

    public function getVabyuser(): ?User
    {
        return $this->vabyuser;
    }

    public function setVabyuser(?User $vabyuser): self
    {
        $this->vabyuser = $vabyuser;

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

    public function getVtva(): ?float
    {
        return $this->vtva;
    }

    public function setVtva(?float $vtva): self
    {
        $this->vtva = $vtva;

        return $this;
    }

    public function getVremise(): ?float
    {
        return $this->vremise;
    }

    public function setVremise(?float $vremise): self
    {
        $this->vremise = $vremise;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

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
            $caiss->setBon($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): static
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getBon() === $this) {
                $caiss->setBon(null);
            }
        }

        return $this;
    }

    public function getRecu(): ?float
    {
        return $this->recu;
    }

    public function setRecu(?float $recu): static
    {
        $this->recu = $recu;

        return $this;
    }

    public function getReste(): ?float
    {
        return $this->reste;
    }

    public function setReste(?float $reste): static
    {
        $this->reste = $reste;

        return $this;
    }

    public function getArticlecomposer(): ?Article
    {
        return $this->articlecomposer;
    }

    public function setArticlecomposer(?Article $articlecomposer): static
    {
        // unset the owning side of the relation if necessary
        if ($articlecomposer === null && $this->articlecomposer !== null) {
            $this->articlecomposer->setComposer(null);
        }

        // set the owning side of the relation if necessary
        if ($articlecomposer !== null && $articlecomposer->getComposer() !== $this) {
            $articlecomposer->setComposer($this);
        }

        $this->articlecomposer = $articlecomposer;

        return $this;
    }

    public function getModel(): ?int
    {
        return $this->model;
    }

    public function setModel(?int $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getPreparation(): ?self
    {
        return $this->preparation;
    }

    public function setPreparation(?self $preparation): static
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getBonprepration(): Collection
    {
        return $this->bonprepration;
    }

    public function addBonprepration(self $bonprepration): static
    {
        if (!$this->bonprepration->contains($bonprepration)) {
            $this->bonprepration->add($bonprepration);
            $bonprepration->setPreparation($this);
        }

        return $this;
    }

    public function removeBonprepration(self $bonprepration): static
    {
        if ($this->bonprepration->removeElement($bonprepration)) {
            // set the owning side to null (unless already changed)
            if ($bonprepration->getPreparation() === $this) {
                $bonprepration->setPreparation(null);
            }
        }

        return $this;
    }

}
