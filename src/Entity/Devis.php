<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Chantier;
use App\Entity\User;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\Relever;
use App\Entity\Facture;
use App\Entity\Corbeille;

#[ORM\Entity(repositoryClass: 'App\Repository\DevisRepository')]
class Devis
{
    #[Groups(['apprestachan','aprele','pycaisse','pydevis','pyfournisseurs','pychantier','pychantiers','pyfacture','pydecompte','pydevis','clireleve','clive','caisse','decompte','chantiers','devis','commande','facture','relevers','clients','caisse','fours'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['apprestachan','aprele','pycaisse','pydevis','pychantiers','pyfournisseurs','pychantier','pyfacture','pydecompte','pydevis','clireleve','clive','caisse','decompte','chantiers','devis','commande','facture','relevers','clients','caisse','fours'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $iddevis;

    #[Groups(['pydevis','devis','commande'])]
    #[ORM\Column(type: 'text', nullable: true)]
    private $conditions;

    #[Groups(['apprestachan','aprele','pycaisse','pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[Groups(['pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 10, nullable: false)]
    #[Assert\NotNull]
    private $tva;

    #[Groups(['pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $ptva;

    #[Groups(['pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $aarem;

    #[Groups(['pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $aaref;

    #[Groups(['aprele','pydevis','pychantiers','pyfacture','pychantier','pydecompte','pydevis','chantiers','clireleve','decompte','devis','facture','commande','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $totalht;

    #[Groups(['aprele','pydevis','pychantiers','pyfacture','pychantier','pydecompte','pydevis','chantiers','clireleve','decompte','devis','facture','commande','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $totalttc;

    #[Groups(['pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $vtva;

    #[Groups(['pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $vremise;

    #[Groups(['pydevis','pychantier','pydevis','chantiers','devis','commande','clients'])]
    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotNull]
    private $devreference;

    #[Groups(['aprele','pydevis','pychantiers','pyfacture','pychantier','pydecompte','pydevis','chantiers','clireleve','decompte','devis','facture','commande','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $basetva;

    #[Groups(['pydevis','pychantier','devis','commande'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[Groups(['pydevis','devis'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $modele;

    #[Groups(['pydevis','decompte','devis','facture','commande','pyfacture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $zone;

    #[Groups(['pydevis','devis'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'devis')]
    private $chantier;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'devis')]
    private $user;

    #[Groups(['pydevis','devis'])]
    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'devis')]
    private $client;

    #[Groups(['devis','commande'])]
    #[ORM\ManyToOne(targetEntity: Contact::class, inversedBy: 'devis')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $contact;

    #[Groups(['pydevis','pychantiers','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','clients','commande','fours','clients'])]
    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Ligne::class)]
    #[ORM\OrderBy(['reference' => 'ASC'])]
    private $lignes;

    #[Groups(['pydevis','pychantiers','devis','facture', 'pychantiers','pychantier','decompte'
    ])]
    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Groupe::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $groupe;

    #[Groups(['pydevis','pychantiers','pychantier','decompte','devis','facture','commande'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $abasetva;

    #[Groups(['pydevis','devis'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $model;

    #[Groups(['pydevis','devis','decompte','facture'])]
    #[ORM\ManyToOne(targetEntity: Monnaie::class, inversedBy: 'devis')]
    private $monnaie;

    #[Groups(['pydevis','pychantier','pydevis','clireleve','devis','commande'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $validit;

    #[Groups(['aprele','pydevis','pychantiers','pychantier','devis','clireleve'])]
    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Relever::class)]
    private $relevers;

    #[Groups(['aprele','pydevis','pychantier','pychantiers','pydevis','clireleve','devis','commande'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups('devis')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $marquer;

    #[Groups(['pydevis','pychantiers','pychantier','decompte','devis','facture','commande','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    #[Groups(['pychantiers'])]
    #[ORM\OneToOne(mappedBy: 'devis', targetEntity: Facture::class, cascade: ['persist', 'remove'])]
    private $facture;

    #[Groups(['pychantiers','pychantier','pydevis','devis','commande'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobydevis')]
    private $dobyuser;

    #[Groups(['aprele','pydevis','pychantiers','pydevis','pychantier','devis','clients', 'pyfournisseurs'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'devis')]
    private $corbeille;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $reglementnumber;

    #[Groups(['pydevis','pychantiers','pydecompte','pyfournisseurs','pychantier','pyfacture','pydevis','chantiers','clireleve','clive','caisse','decompte','devis','facture','relevers','clients','commande','fours','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $remtht;

    #[Groups(['pychantiers','pychantier','pydevis','clive', 'devis'])]
    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Bon::class)]
    private $bons;

    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Livraison::class)]
    private $livraisons;

    #[Groups(['pychantier'])]
    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Caisse::class)]
    private $caisses;

    #[Groups(['pychantiers'])]
     #[ORM\OneToMany(targetEntity: Decompte::class, mappedBy: 'devis')]
    private $decomptes;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $rang;

    #[Groups(['pydevis'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'vabyuser')]
    private $vabyuser;

    #[Groups(['pydevis'])]
    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Acompte::class)]
    private $acomptes;

    #[Groups(['devis','facture','pydevis','pychantier'])]
    #[ORM\Column(nullable: true)]
    private ?float $acomrage = null;

    #[Groups(['devis','facture','pydevis','pychantier'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $garantie;

    #[Groups(['devis','facture','pydevis','pychantier'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prorata;

    #[Groups(['devis','facture','pydevis','pychantier'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $finition;

    #[ORM\OneToOne(inversedBy: 'rentabilite', targetEntity: self::class, cascade: ['persist', 'remove'])]
    private ?self $rentabilite = null;

    #[Groups(['devis','facture','pydevis','pychantier'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trc = null;

    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: Journal::class)]
    private Collection $journals;

    #[ORM\ManyToOne(inversedBy: 'devis')]
    private ?Personnel $suivie = null;


    public function __construct()
    {
        $this->lignes = new ArrayCollection();
        $this->groupe = new ArrayCollection();
        $this->relevers = new ArrayCollection();
        $this->bons = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->decomptes = new ArrayCollection();
        $this->acomptes = new ArrayCollection();
        $this->journals = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIddevis(): ?string
    {
        return $this->iddevis;
    }

    public function setIddevis(string $iddevis): self
    {
        $this->iddevis = $iddevis;

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

    public function getAarem(): ?string
    {
        return $this->aarem;
    }

    public function setAarem(?string $aarem): self
    {
        $this->aarem = $aarem;

        return $this;
    }

    public function getTotalht(): ?float
    {
        return $this->totalht;
    }

    public function setTotalht(?string $totalht): self
    {
        $this->totalht = $totalht;

        return $this;
    }


    public function getVtva(): ?string
    {
        return $this->vtva;
    }

    public function setVtva(?float $vtva): self
    {
        $this->vtva = $vtva;

        return $this;
    }

    public function getVremise(): ?string
    {
        return $this->vremise;
    }

    public function setVremise(?string $vremise): self
    {
        $this->vremise = $vremise;

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

    public function getDevReference(): ?string
    {
        return $this->devreference;
    }

    public function setDevReference(?string $devreference): self
    {
        $this->devreference = $devreference;

        return $this;
    }

    public function getBasetva(): ?string
    {
        return $this->basetva;
    }

    public function setBasetva(string $basetva): self
    {
        $this->basetva = $basetva;

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

    public function getModele(): ?int
    {
        return $this->modele;
    }

    public function setModele(?int $modele): self
    {
        $this->modele = $modele;

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
     * @return Collection
     */
    public function getLignes(): Collection
    {
        return $this->lignes;
    }

    public function addLigne(Ligne $ligne): self
    {
        if (!$this->lignes->contains($ligne)) {
            $this->lignes[] = $ligne;
            $ligne->setDevis($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getDevis() === $this) {
                $ligne->setDevis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getGroupe(): Collection
    {
        return $this->groupe;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupe->contains($groupe)) {
            $this->groupe[] = $groupe;
            $groupe->setDevis($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupe->contains($groupe)) {
            $this->groupe->removeElement($groupe);
            // set the owning side to null (unless already changed)
            if ($groupe->getDevis() === $this) {
                $groupe->setDevis(null);
            }
        }

        return $this;
    }

    public function getAbasetva(): ?string
    {
        return $this->abasetva;
    }

    public function setAbasetva(string $abasetva): self
    {
        $this->abasetva = $abasetva;

        return $this;
    }

    public function getModel(): ?int
    {
        return $this->model;
    }

    public function setModel(?int $model): self
    {
        $this->model = $model;

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

    public function getValidit(): ?string
    {
        return $this->validit;
    }

    public function setValidit(?string $validit): self
    {
        $this->validit = $validit;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getRelevers(): Collection
    {
        return $this->relevers;
    }

    public function addRelever(Relever $relever): self
    {
        if (!$this->relevers->contains($relever)) {
            $this->relevers[] = $relever;
            $relever->setDevis($this);
        }

        return $this;
    }

    public function removeRelever(Relever $relever): self
    {
        if ($this->relevers->contains($relever)) {
            $this->relevers->removeElement($relever);
            // set the owning side to null (unless already changed)
            if ($relever->getDevis() === $this) {
                $relever->setDevis(null);
            }
        }

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

    public function getMarquer(): ?string
    {
        return $this->marquer;
    }

    public function setMarquer(?string $marquer): self
    {
        $this->marquer = $marquer;

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


    public function getAaref()
    {
        return $this->aaref;
    }

    public function setAaref($aaref): void
    {
        $this->aaref = $aaref;
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

    public function getDobyuser(): ?User
    {
        return $this->dobyuser;
    }

    public function setDobyuser(?User $dobyuser): self
    {
        $this->dobyuser = $dobyuser;

        return $this;
    }

    public function getReglementnumber(): ?int
    {
        return $this->reglementnumber;
    }

    public function setReglementnumber(?int $reglementnumber): self
    {
        $this->reglementnumber = $reglementnumber;

        return $this;
    }

    public function getRemtht(): ?string
    {
        return $this->remtht;
    }

    public function setRemtht(string $remtht): self
    {
        $this->remtht = $remtht;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getBons(): Collection
    {
        return $this->bons;
    }

    public function addBon(Bon $bon): self
    {
        if (!$this->bons->contains($bon)) {
            $this->bons[] = $bon;
            $bon->setDevis($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->removeElement($bon)) {
            // set the owning side to null (unless already changed)
            if ($bon->getDevis() === $this) {
                $bon->setDevis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getLivraison(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): self
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons[] = $livraison;
            $livraison->setDevis($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->livraisons->removeElement($livraison)) {
            if ($livraison->getDevis() === $this) {
                $livraison->setDevis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaiss(Caisse $caiss): self
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses[] = $caiss;
            $caiss->setDevis($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getDevis() === $this) {
                $caiss->setDevis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getDecomptes(): Collection
    {
        return $this->decomptes;
    }

    public function addDecompte(Decompte $decompte): self
    {
        if (!$this->decomptes->contains($decompte)) {
            $this->decomptes[] = $decompte;
            $decompte->setDevis($this);
        }

        return $this;
    }

    public function removeDecompte(Decompte $decompte): self
    {
        if ($this->decomptes->removeElement($decompte)) {
            // set the owning side to null (unless already changed)
            if ($decompte->getDevis() === $this) {
                $decompte->setDevis(null);
            }
        }

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

    /**
     * @return Collection
     */
    public function getAcomptes(): Collection
    {
        return $this->acomptes;
    }

    public function addAcompte(Acompte $acompte): self
    {
        if (!$this->acomptes->contains($acompte)) {
            $this->acomptes[] = $acompte;
            $acompte->setDevis($this);
        }

        return $this;
    }

    public function removeAcompte(Acompte $acompte): self
    {
        if ($this->acomptes->removeElement($acompte)) {
            // set the owning side to null (unless already changed)
            if ($acompte->getDevis() === $this) {
                $acompte->setDevis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Livraison>
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function getAcomrage(): ?float
    {
        return $this->acomrage;
    }

    public function setAcomrage(?float $acomrage): self
    {
        $this->acomrage = $acomrage;
        return $this;
    }

    public function getGarantie(): ?string
    {
        return $this->garantie;
    }

    public function setGarantie(?string $garantie): self
    {
        $this->garantie = $garantie;

        return $this;
    }

    public function getProrata(): ?string
    {
        return $this->prorata;
    }

    public function setProrata(?string $prorata): self
    {
        $this->prorata = $prorata;

        return $this;
    }

    public function getFinition(): ?string
    {
        return $this->finition;
    }

    public function setFinition(string $finition): self
    {
        $this->finition = $finition;

        return $this;
    }

    public function getRentabilite(): ?self
    {
        return $this->rentabilite;
    }

    public function setRentabilite(?self $rentabilite): static
    {
        $this->rentabilite = $rentabilite;

        return $this;
    }

    public function getTrc(): ?string
    {
        return $this->trc;
    }

    public function setTrc(?string $trc): static
    {
        $this->trc = $trc;

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
            $journal->setCaisse($this);
        }

        return $this;
    }
    public function removeJournal(Journal $journal): static
    {
        if ($this->journals->removeElement($journal)) {
            // set the owning side to null (unless already changed)
            if ($journal->getDevis() === $this) {
                $journal->setDevis(null);
            }
        }
        return $this;
    }

    public function getSuivie(): ?Personnel
    {
        return $this->suivie;
    }

    public function setSuivie(?Personnel $suivie): static
    {
        $this->suivie = $suivie;

        return $this;
    }

}
