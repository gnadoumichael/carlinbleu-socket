<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Repository\ChantierRepository;
use App\Entity\Corbeille;
use App\Entity\Section;
use App\Entity\Planning;
use App\Entity\Relever;
use App\Entity\Valider;
use App\Entity\Facture;
use App\Entity\Tache;
use App\Entity\Recap;

#[ORM\Entity(repositoryClass: ChantierRepository::class)]
#[UniqueEntity('idchantier')]
class Chantier
{
    #[ORM\Id]
    #[Groups(['aprele','pycaisse','pydecompte','pyfacture','paligne','besoin','chantierios','chantierwin','ppstart','pydevis','pyfournisseurs','pychantiers','pychantier','clive','chantiers','fours','matchan','materiels', 'devis', 'commande' , 'clients','locli',
    'clireleve',
        'plans' , 'plann', 'tacher','section', 'facture','fichiers', 'equipes','relevers', 'chats','decompte','fournisseurs','caisse','pers','valides','chatbesoin'])]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['aprele','pycaisse','pydecompte','pyfacture','paligne','besoin','chantierios','ppstart','pydevis','pyfournisseurs','pychantiers','pychantier','clive','matchan','fours','materiels', 'devis', 'commande' , 'clients', 'plans' ,'locli',
    'clireleve',
        'plann', 'tacher','section', 'chantiers', 'facture','fichiers', 'equipes','relevers', 'chats','decompte','fournisseurs','caisse','pers','valides','chatbesoin','chantierwin'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $nomchantier;

    #[Groups(['chantierios','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers', 'facture','chantierwin'])]
    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[Groups(['devis', 'commande' , 'clients', 'chantiers', 'facture'])]
    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dcrea;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $reglement;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $depense;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture','ppstart'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $bonfournisseurs;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture','ppstart'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $bonprestataires;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture','ppstart'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $paieprestataires;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture','ppstart'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $paiefournisseurs;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture','ppstart'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $chargechantiers;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','facture','ppstart'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $chargepaiechantiers;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'chantiers')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[Groups(['aprele','clireleve','clients','clive','chantiers','pychantier','pychantiers'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Devis::class)]
    private $devis;

    #[Groups(['chantierios','matchan','fours','materiels', 'devis', 'commande' , 'clients', 'plans' ,
        'plann', 'tacher','section', 'chantiers', 'facture','fichiers', 'equipes','relevers', 'chats','decompte','fournisseurs','caisse','pers'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $idchantier;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Ligne::class)]
    private $lignes;

    #[Groups(['pychantier','chantiers'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Bon::class)]
    private $bons;

    #[Groups(['pychantier','chantiers'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Caisse::class)]
    private $caisses;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Intervenant::class)]
    private $intervenants;

    #[Groups(['pychantier','chantierwin'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Valider::class)]
    private $validers;

    #[Groups(['chantiers','chantierwin'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Relever::class)]
    private $releves;

    #[Groups(['plans','chantierwin'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Planning::class)]
    private $plannings;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Section::class)]
    private $sections;

    #[Groups(['chantiers','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $archiver;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','ppstart'])]
    #[ORM\Column(type: 'datetime', nullable: true)]
    private $ddebut;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','ppstart'])]
    #[ORM\Column(type: 'datetime', nullable: true)]
    private $dfin;

    #[Groups(['apprestachan','pydevis','paligne','besoin','chantierwin','chantierios','ppstart','matchan','pychantier', 'devis', 'commande' , 'plann', 'tacher','section', 'chantiers', 'fichiers', 'chats','valides','chatbesoin'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Client', inversedBy: 'chantiers')]
    private $client;

    #[Groups(['chantierios','chantierwin','pychantiers','pychantier','devis', 'commande' , 'clients', 'chantiers','ppstart'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private $cout;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Livraison::class)]
    private $livraisons;

    #[Groups(['clients','pychantier','chantierwin','pychantiers'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Facture::class)]
    private $factures;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Tache::class)]
    private $taches;

    #[Groups(['chantierios','chantierwin','chantiers'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobychantiers')]
    private $dobyuser;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Recap::class)]
    private $recaps;

    #[Groups(['chantierios','chantierwin','pydevis','locli','pychantiers','pychantier','clireleve','devis', 'commande' , 'clients', 'chantiers', 'decompte','facture', 'fours'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'chantiers')]
    private $corbeille;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Fichier::class)]
    private $fichiers;

    #[Groups(['clients','chantiers','chantierwin','ppstart'])]
    #[ORM\ManyToMany(targetEntity: Personnel::class, mappedBy: 'superviser')]
    private $superviseurs;

    #[Groups(['pychantiers','chantierwin','clients','chantiers','ppstart'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $localisation;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Rapport::class)]
    private $rapports;

    #[Groups(['chantierios','chantierwin','pychantiers','clients', 'chantiers'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'chantiers')]
    private $sous;

    #[ORM\OneToMany(mappedBy: 'sous', targetEntity: chantier::class)]
    private $chantiers;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: MaterielChantier::class)]
    private $materielchantiers;

    #[Groups(['clients', 'chantiers'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $terminer;

    #[Groups(['clive','chantierwin','matchan','fours','materiels', 'devis', 'commande' , 'clients', 'plans' ,
        'plann', 'tacher','section', 'chantiers', 'facture','fichiers', 'equipes','relevers', 'chats','decompte','fournisseurs','caisse','pers'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    #[Groups(['pychantier','chantierwin','clients'])]
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Decompte::class)]
    private $decomptes;

    #[Groups(['chantiers','chantierwin'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $acompte;

    #[Groups(['chantiers','chantierwin'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $garantie;

    #[Groups(['chantiers','chantierwin'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prorata;

    #[Groups(['chantiers','chantierwin'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $finition;

    #[ORM\ManyToMany(targetEntity: Equipe::class, mappedBy: 'chantier')]
    private $chantierequipes;

    #[Groups(['pychantiers','chantierwin','pychantier','clients', 'chantiers'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $progression;

    #[Groups(['chantierios','chantierwin','ppstart','pychantiers','pychantier','matchan','materiels', 'devis', 'commande' , 'clients', 'plans' ,
        'plann', 'tacher','section', 'chantiers', 'facture','fichiers', 'equipes','relevers', 'chats'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $etat = null;

    #[Groups(['paligne','besoin','chantierios','ppstart','pydevis','pyfournisseurs','pychantiers','pychantier','clive','matchan','fours','materiels', 'devis', 'commande' , 'clients', 'plans' ,'locli',
        'clireleve', 'plann', 'tacher','section', 'chantiers', 'facture','fichiers', 'equipes','relevers', 'chats','decompte','fournisseurs','caisse','pers','valides','chatbesoin','chantierwin'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contrat;

    #[Groups(['pychantiers','chantierwin','devis', 'commande' , 'clients', 'chantiers'])]
    #[ORM\Column(type: 'decimal', precision: 65, scale: 2, nullable: true)]
    private ?string $paiements = null;

    /**
     * @var Collection<int, Fiche>
     */
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Fiche::class)]
    private Collection $fiches;

    #[ORM\Column]
    private ?int $most;

    /**
     * @var Collection<int, Exercices>
     */
    #[ORM\ManyToMany(targetEntity: Exercices::class, mappedBy: 'chantiers')]
    private Collection $exercices;

    /**
     * @var Collection<int, Besoins>
     */
    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Besoins::class)]
    private Collection $besoins;



    public function __construct()
    {
        $this->devis = new ArrayCollection();
        $this->lignes = new ArrayCollection();
        $this->bons = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->intervenants = new ArrayCollection();
        $this->validers = new ArrayCollection();
        $this->releves = new ArrayCollection();
        $this->plannings = new ArrayCollection();
        $this->sections = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->factures = new ArrayCollection();
        $this->taches = new ArrayCollection();
        $this->recaps = new ArrayCollection();
        $this->fichiers = new ArrayCollection();
        $this->superviseurs = new ArrayCollection();
        $this->rapports = new ArrayCollection();
        $this->chantiers = new ArrayCollection();
        $this->materielchantiers = new ArrayCollection();
        $this->decomptes = new ArrayCollection();
        $this->chantierequipes = new ArrayCollection();
        $this->fiches = new ArrayCollection();
        $this->exercices = new ArrayCollection();
        $this->besoins = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomChantier()
    {
        return $this->nomchantier;
    }
    public function setNomChantier(string $nomchantier): self
    {
        $this->nomchantier = $nomchantier;

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

    public function getDcrea(): ?\DateTimeInterface
    {
        return $this->dcrea;
    }
    public function setDcrea(?\DateTimeInterface $dcrea): self
    {
        $this->dcrea = $dcrea;
        return $this;
    }

    public function getReglement(): ?float
    {
        return $this->reglement;
    }
    public function setReglement(?float $reglement): self
    {
        $this->reglement = $reglement;

        return $this;
    }

    public function getDepense(): ?float
    {
        return $this->depense;
    }
    public function setDepense(?float $depense): self
    {
        $this->depense = $depense;

        return $this;
    }

    public function getBonFournisseurs(): ?float
    {
        return $this->bonfournisseurs;
    }
    public function setBonFournisseurs(?float $bonfournisseurs): self
    {
        $this->bonfournisseurs = $bonfournisseurs;
        return $this;
    }

    public function getBonPrestataires(): ?float
    {
        return $this->bonprestataires;
    }
    public function setBonPrestataires(?float $bonprestataires): self
    {
        $this->bonprestataires = $bonprestataires;
        return $this;
    }

    public function getPaieFournisseurs(): ?float
    {
        return $this->paiefournisseurs;
    }
    public function setPaieFournisseurs(?float $paiefournisseurs): self
    {
        $this->paiefournisseurs = $paiefournisseurs;
        return $this;
    }

    public function getPaiePrestataires(): ?float
    {
        return $this->paieprestataires;
    }
    public function setPaiePrestataires(?float $paieprestataires): self
    {
        $this->paieprestataires = $paieprestataires;
        return $this;
    }

    public function getChargeChantiers(): ?float
    {
        return $this->chargechantiers;
    }
    public function setChargeChantiers(?float $chargechantiers): self
    {
        $this->chargechantiers = $chargechantiers;
        return $this;
    }

    public function getChargePaieChantiers(): ?float
    {
        return $this->chargepaiechantiers;
    }
    public function setChargePaieChantiers(?float $chargepaiechantiers): self
    {
        $this->chargepaiechantiers = $chargepaiechantiers;
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
            $devi->setChantier($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->contains($devi)) {
            $this->devis->removeElement($devi);
            // set the owning side to null (unless already changed)
            if ($devi->getChantier() === $this) {
                $devi->setChantier(null);
            }
        }

        return $this;
    }

    public function getIdChantier(): ?string
    {
        return $this->idchantier;
    }

    public function setIdChantier(string $idchantier): self
    {
        $this->idchantier = $idchantier;

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
            $ligne->setChantier($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getChantier() === $this) {
                $ligne->setChantier(null);
            }
        }

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
            $bon->setChantier($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->contains($bon)) {
            $this->bons->removeElement($bon);
            // set the owning side to null (unless already changed)
            if ($bon->getChantier() === $this) {
                $bon->setChantier(null);
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
            $caiss->setChantier($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->contains($caiss)) {
            $this->caisses->removeElement($caiss);
            // set the owning side to null (unless already changed)
            if ($caiss->getChantier() === $this) {
                $caiss->setChantier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getIntervenants(): Collection
    {
        return $this->intervenants;
    }

    public function addIntervenant(Intervenant $intervenant): self
    {
        if (!$this->intervenants->contains($intervenant)) {
            $this->intervenants[] = $intervenant;
            $intervenant->setChantier($this);
        }

        return $this;
    }

    public function removeIntervenant(Intervenant $intervenant): self
    {
        if ($this->intervenants->contains($intervenant)) {
            $this->intervenants->removeElement($intervenant);
            // set the owning side to null (unless already changed)
            if ($intervenant->getChantier() === $this) {
                $intervenant->setChantier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Valider[]
     */
    public function getValiders(): Collection
    {
        return $this->validers;
    }

    public function addValider(Valider $valider): self
    {
        if (!$this->validers->contains($valider)) {
            $this->validers[] = $valider;
            $valider->setChantier($this);
        }

        return $this;
    }

    public function removeValider(Valider $valider): self
    {
        if ($this->validers->contains($valider)) {
            $this->validers->removeElement($valider);
            // set the owning side to null (unless already changed)
            if ($valider->getChantier() === $this) {
                $valider->setChantier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Relever[]
     */
    public function getReleves(): Collection
    {
        return $this->releves;
    }

    public function addReleves(Relever $releves): self
    {
        if (!$this->releves->contains($releves)) {
            $this->releves[] = $releves;
            $releves->setChantier($this);
        }

        return $this;
    }

    public function removeReleves(Relever $releves): self
    {
        if ($this->releves->contains($releves)) {
            $this->releves->removeElement($releves);
            // set the owning side to null (unless already changed)
            if ($releves->getChantier() === $this) {
                $releves->setChantier(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Planning[]
     */
    public function getPlannings(): Collection
    {
        return $this->plannings;
    }

    public function addPlanning(Planning $planning): self
    {
        if (!$this->plannings->contains($planning)) {
            $this->plannings[] = $planning;
            $planning->setChantier($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): self
    {
        if ($this->plannings->contains($planning)) {
            $this->plannings->removeElement($planning);
            // set the owning side to null (unless already changed)
            if ($planning->getChantier() === $this) {
                $planning->setChantier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Section[]
     */
    public function getSections(): Collection
    {
        return $this->sections;
    }

    public function addSection(Section $section): self
    {
        if (!$this->sections->contains($section)) {
            $this->sections[] = $section;
            $section->setChantier($this);
        }

        return $this;
    }

    public function removeSection(Section $section): self
    {
        if ($this->sections->contains($section)) {
            $this->sections->removeElement($section);
            // set the owning side to null (unless already changed)
            if ($section->getChantier() === $this) {
                $section->setChantier(null);
            }
        }

        return $this;
    }

    public function getArchiver(): ?string
    {
        return $this->archiver;
    }

    public function setArchiver(?string $archiver): self
    {
        $this->archiver = $archiver;

        return $this;
    }

    public function getDdebut(): ?\DateTimeInterface
    {
        return $this->ddebut;
    }

    public function setDdebut(?\DateTimeInterface $ddebut): self
    {
        $this->ddebut = $ddebut;

        return $this;
    }

    public function getDfin(): ?\DateTimeInterface
    {
        return $this->dfin;
    }

    public function setDfin(?\DateTimeInterface $dfin): self
    {
        $this->dfin = $dfin;

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

    public function getCout(): ?float
    {
        return $this->cout;
    }

    public function setCout(?float $cout): self
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): self
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons[] = $livraison;
            $livraison->setChantier($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->livraisons->contains($livraison)) {
            $this->livraisons->removeElement($livraison);
            // set the owning side to null (unless already changed)
            if ($livraison->getChantier() === $this) {
                $livraison->setChantier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): self
    {
        if (!$this->factures->contains($facture)) {
            $this->factures[] = $facture;
            $facture->setChantier($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->factures->contains($facture)) {
            $this->factures->removeElement($facture);
            // set the owning side to null (unless already changed)
            if ($facture->getChantier() === $this) {
                $facture->setChantier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTach(Tache $tach): self
    {
        if (!$this->taches->contains($tach)) {
            $this->taches[] = $tach;
            $tach->setChantier($this);
        }

        return $this;
    }

    public function removeTach(Tache $tach): self
    {
        if ($this->taches->contains($tach)) {
            $this->taches->removeElement($tach);
            // set the owning side to null (unless already changed)
            if ($tach->getChantier() === $this) {
                $tach->setChantier(null);
            }
        }

        return $this;
    }

    public function addRelefe(Relever $relefe): self
    {
        if (!$this->releves->contains($relefe)) {
            $this->releves[] = $relefe;
            $relefe->setChantier($this);
        }

        return $this;
    }

    public function removeRelefe(Relever $relefe): self
    {
        if ($this->releves->contains($relefe)) {
            $this->releves->removeElement($relefe);
            // set the owning side to null (unless already changed)
            if ($relefe->getChantier() === $this) {
                $relefe->setChantier(null);
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
            $recap->setChantier($this);
        }

        return $this;
    }

    public function removeRecap(Recap $recap): self
    {
        if ($this->recaps->contains($recap)) {
            $this->recaps->removeElement($recap);
            // set the owning side to null (unless already changed)
            if ($recap->getChantier() === $this) {
                $recap->setChantier(null);
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

    /**
     * @return Collection|Fichier[]
     */
    public function getFichiers(): Collection
    {
        return $this->fichiers;
    }

    public function addFichier(Fichier $fichier): self
    {
        if (!$this->fichiers->contains($fichier)) {
            $this->fichiers[] = $fichier;
            $fichier->setChantier($this);
        }

        return $this;
    }

    public function removeFichier(Fichier $fichier): self
    {
        if ($this->fichiers->contains($fichier)) {
            $this->fichiers->removeElement($fichier);
            // set the owning side to null (unless already changed)
            if ($fichier->getChantier() === $this) {
                $fichier->setChantier(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection
     */
    public function getSuperviseurs(): Collection
    {
        return $this->superviseurs;
    }

    public function addSuperviseur(Personnel $superviseur): self
    {
        if (!$this->superviseurs->contains($superviseur)) {
            $this->superviseurs[] = $superviseur;
            $superviseur->addSuperviser($this);
        }

        return $this;
    }

    public function removeSuperviseur(Personnel $superviseur): self
    {
        if ($this->superviseurs->contains($superviseur)) {
            $this->superviseurs->removeElement($superviseur);
            $superviseur->removeSuperviser($this);
        }

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getRapports(): Collection
    {
        return $this->rapports;
    }

    public function addRapport(Rapport $rapport): self
    {
        if (!$this->rapports->contains($rapport)) {
            $this->rapports[] = $rapport;
            $rapport->setChantier($this);
        }

        return $this;
    }

    public function removeRapport(Rapport $rapport): self
    {
        if ($this->rapports->removeElement($rapport)) {
            // set the owning side to null (unless already changed)
            if ($rapport->getChantier() === $this) {
                $rapport->setChantier(null);
            }
        }

        return $this;
    }

    public function getSous(): ?self
    {
        return $this->sous;
    }

    public function setSous(?self $sous): self
    {
        $this->sous = $sous;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getChantiers(): Collection
    {
        return $this->chantiers;
    }

    public function addchantier(self $chantier): self
    {
        if (!$this->chantiers->contains($chantier)) {
            $this->chantiers[] = $chantier;
            $chantier->setSous($this);
        }

        return $this;
    }

    public function removechantier(self $chantier): self
    {
        if ($this->chantiers->removeElement($chantier)) {
            // set the owning side to null (unless already changed)
            if ($chantier->getSous() === $this) {
                $chantier->setSous(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection
     */
    public function getMaterielchantiers(): Collection
    {
        return $this->materielchantiers;
    }

    public function addMaterielChantier(Materielchantier $materielchantier): self
    {
        if (!$this->materielchantiers->contains($materielchantier)) {
            $this->materielchantiers[] = $materielchantier;
            $materielchantier->setChantier($this);
        }

        return $this;
    }

    public function removeMaterielChantier(Materielchantier $materielchantier): self
    {
        if ($this->materielchantiers->removeElement($materielchantier)) {
            // set the owning side to null (unless already changed)
            if ($materielchantier->getChantier() === $this) {
                $materielchantier->setChantier(null);
            }
        }

        return $this;
    }

    public function getTerminer(): ?string
    {
        return $this->terminer;
    }

    public function setTerminer(?string $terminer): self
    {
        $this->terminer = $terminer;

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

    /**
     * @return Collection|Decompte[]
     */
    public function getDecomptes(): Collection
    {
        return $this->decomptes;
    }

    public function addDecompte(Decompte $decompte): self
    {
        if (!$this->decomptes->contains($decompte)) {
            $this->decomptes[] = $decompte;
            $decompte->setChantier($this);
        }

        return $this;
    }

    public function removeDecompte(Decompte $decompte): self
    {
        if ($this->decomptes->removeElement($decompte)) {
            // set the owning side to null (unless already changed)
            if ($decompte->getChantier() === $this) {
                $decompte->setChantier(null);
            }
        }

        return $this;
    }

    public function getAcompte(): ?string
    {
        return $this->acompte;
    }

    public function setAcompte(?string $acompte): self
    {
        $this->acompte = $acompte;

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

    /**
     * @return Collection|Equipe[]
     */
    public function getChantierequipes(): Collection
    {
        return $this->chantierequipes;
    }

    public function addChantierequipe(Equipe $chantierequipe): self
    {
        if (!$this->chantierequipes->contains($chantierequipe)) {
            $this->chantierequipes[] = $chantierequipe;
            $chantierequipe->addChantier($this);
        }

        return $this;
    }

    public function removeChantierequipe(Equipe $chantierequipe): self
    {
        if ($this->chantierequipes->removeElement($chantierequipe)) {
            $chantierequipe->removeChantier($this);
        }

        return $this;
    }

    public function getProgression(): ?string
    {
        return $this->progression;
    }

    public function setProgression(?string $progression): self
    {
        $this->progression = $progression;

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

    public function getContrat(): ?string
    {
        return $this->contrat;
    }

    public function setContrat(string $contrat): self
    {
        $this->contrat = $contrat;
        return $this;
    }

    public function getPaiements(): ?float
    {
        return $this->paiements;
    }

    public function setPaiements(?float $paiements): self
    {
        $this->paiements = $paiements;

        return $this;
    }

    public function getFiches(): Collection
    {
        return $this->fiches;
    }
    public function addFich(Fiche $fich): static
    {
        if (!$this->fiches->contains($fich)) {
            $this->fiches->add($fich);
            $fich->setChantier($this);
        }

        return $this;
    }
    public function removeFich(Fiche $fich): static
    {
        if ($this->fiches->removeElement($fich)) {
            // set the owning side to null (unless already changed)
            if ($fich->getChantier() === $this) {
                $fich->setChantier(null);
            }
        }

        return $this;
    }

    public function getMost(): ?int
    {
        return $this->most;
    }
    public function setMost(int $most): static
    {
        $this->most = $most;

        return $this;
    }


    public function getExercices(): Collection
    {
        return $this->exercices;
    }
    public function addExercice(Exercices $exercice): static
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices->add($exercice);
            $exercice->addChantier($this);
        }

        return $this;
    }
    public function removeExercice(Exercices $exercice): static
    {
        if ($this->exercices->removeElement($exercice)) {
            $exercice->removeChantier($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Besoins>
     */
    public function getBesoins(): Collection
    {
        return $this->besoins;
    }

    public function addBesoin(Besoins $besoin): static
    {
        if (!$this->besoins->contains($besoin)) {
            $this->besoins->add($besoin);
            $besoin->setChantier($this);
        }

        return $this;
    }

    public function removeBesoin(Besoins $besoin): static
    {
        if ($this->besoins->removeElement($besoin)) {
            // set the owning side to null (unless already changed)
            if ($besoin->getChantier() === $this) {
                $besoin->setChantier(null);
            }
        }

        return $this;
    }


}
