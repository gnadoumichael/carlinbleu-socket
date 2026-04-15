<?php

namespace App\Entity;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Intervenant;
use App\Entity\Livraison;
use App\Entity\Planning;
use App\Entity\Relever;
use App\Entity\User;
use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[Groups(['apprestachan','pycaisse','pydecompte','pyfacture','chantierwin','paligne','besoin','clientios','chantierios','ppstart','pydevis','pyfournisseurs','pychantiers','pychantier','clive', 'ddcli', 'fours', 'section', 'plann', 'contact', 'chantiers', 'clients',
        'devis', 'locli', 'loclie', 'clireleve',
        'commande', 'carlin', 'plans', 'tacher', 'matchan', 'facture', 'fichiers', 'chats', 'decompte', 'fournisseurs', 'caisse','relevers','valides','chatbesoin'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['apprestachan','pycaisse','pydecompte','pyfacture','chantierwin','paligne','besoin','clientios','chantierios','ppstart','pydevis','pyfournisseurs','pychantiers','pychantier','clive', 'ddcli', 'fours', 'section', 'chantiers', 'clients', 'devis', 'commande',
        'locli', 'loclie', 'clireleve',
        'carlin', 'plans', 'plann', 'tacher', 'matchan', 'facture', 'fichiers', 'chats', 'decompte', 'fournisseurs', 'caisse','relevers','valides','chatbesoin'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $nomclient;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'clients')]
    #[ORM\JoinColumn(nullable: true)]
    private $user;

    #[Groups(['clients'])]
    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Devis::class, cascade: ['remove'])]
    private $devis;

    #[Groups(['pychantiers','clients', 'devis', 'commande'])]
    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Contact::class, cascade: ['remove'])]
    private $contacts;

    #[Groups(['chantierios','ddcli', 'chantiers', 'clients', 'devis', 'commande', 'carlin', 'facture', 'loclie'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Bon::class, cascade: ['remove'])]
    private $bons;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Caisse::class, cascade: ['remove'])]
    private $caisses;

    #[Groups(['chantiers'])]
    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Relever::class, cascade: ['remove'])]
    private $releves;

    #[Groups(['chantierwin','clientios','chantierios','pychantiers','locli','ddcli', 'clients', 'devis', 'commande', 'carlin', 'facture', 'loclie', 'clireleve','pyfacture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contribuable;

    #[Groups(['chantierwin','clientios','chantierios','pychantiers','locli','ddcli', 'chantiers', 'clients', 'devis', 'commande', 'carlin', 'facture', 'loclie', 'clireleve'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adresse;

    #[Groups(['chantierwin','clientios','chantierios','pychantiers','locli','chantiers', 'clients', 'devis', 'commande', 'carlin', 'facture', 'loclie', 'clireleve'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contact;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Planning::class, cascade: ['remove'])]
    private $plannings;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Intervenant::class, cascade: ['remove'])]
    private $intervenants;

    #[Groups(['pychantiers','clive', 'clients', 'plans', 'locli', 'clireleve'])]
    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Chantier::class, cascade: ['remove'])]
    private $chantiers;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Livraison::class, cascade: ['remove'])]
    private $livraisons;

    #[Groups(['clients'])]
    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Facture::class, cascade: ['remove'])]
    private $factures;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobyclients')]
    private $dobyuser;

    #[Groups(['chantierwin','clientios','chantierios','pychantiers','locli','chantiers', 'clients', 'devis', 'commande', 'facture', 'loclie', 'clireleve'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $mail;

    #[Groups(['clientios','chantierios','pydevis','chantiers', 'clients', 'devis', 'commande', 'pychantiers','pychantier', 'decompte','facture','caisse', 'fours',])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, cascade: ['remove'], inversedBy: 'clients')]
    private $corbeille;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Rapport::class, cascade: ['remove'])]
    private $rapports;

    #[Groups(['chantierwin','clientios','chantierios','pydevis','pychantiers','pychantier','chantiers', 'clients', 'devis', 'commande', 'clireleve'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    #[Groups(['devis', 'clients'])]
    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Decompte::class, cascade: ['remove'])]
    private $decomptes;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $rang;

    #[Groups(['chantierwin','chantierios','pydevis','pyfournisseurs','pychantiers','pychantier','clive', 'ddcli', 'fours', 'section', 'plann', 'contact', 'chantiers', 'clients', 'devis', 'locli', 'loclie', 'clireleve',
        'commande', 'carlin', 'plans', 'tacher', 'matchan', 'facture', 'fichiers', 'chats', 'decompte', 'fournisseurs', 'caisse'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $etat = null;

    /**
     * @var Collection<int, Exercices>
     */
    #[ORM\ManyToMany(targetEntity: Exercices::class, mappedBy: 'clients')]
    private Collection $exercices;

    #[ORM\Column(name: 'createdAt', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(name: 'updatedAt', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(name: 'deletedAt', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $deletedAt = null;


    public function __construct()
    {
        $this->devis = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->bons = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->releves = new ArrayCollection();
        $this->plannings = new ArrayCollection();
        $this->intervenants = new ArrayCollection();
        $this->chantiers = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->factures = new ArrayCollection();
        $this->rapports = new ArrayCollection();
        $this->decomptes = new ArrayCollection();
        $this->exercices = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomClient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomClient(string $nomclient): self
    {
        $this->nomclient = $nomclient;

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
            $devi->setClient($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->contains($devi)) {
            $this->devis->removeElement($devi);
            // set the owning side to null (unless already changed)
            if ($devi->getClient() === $this) {
                $devi->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->setClient($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->contains($contact)) {
            $this->contacts->removeElement($contact);
            // set the owning side to null (unless already changed)
            if ($contact->getClient() === $this) {
                $contact->setClient(null);
            }
        }

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
            $bon->setClient($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->contains($bon)) {
            $this->bons->removeElement($bon);
            // set the owning side to null (unless already changed)
            if ($bon->getClient() === $this) {
                $bon->setClient(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return '** ' . $this->getClient() . ' -->' . $this->getChantiers()->get('chantier');
    }

    /**
     * @return Collection
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaisse(Caisse $caisse): self
    {
        if (!$this->caisses->contains($caisse)) {
            $this->caisses[] = $caisse;
            $caisse->setClient($this);
        }

        return $this;
    }

    public function removeCaisse(Caisse $caisse): self
    {
        if ($this->caisses->contains($caisse)) {
            $this->caisses->removeElement($caisse);
            // set the owning side to null (unless already changed)
            if ($caisse->getClient() === $this) {
                $caisse->setClient(null);
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

    public function addReleve(Relever $releve): self
    {
        if (!$this->releves->contains($releve)) {
            $this->releves[] = $releve;
            $releve->setClient($this);
        }

        return $this;
    }

    public function removeReleve(Relever $releve): self
    {
        if ($this->releves->contains($releve)) {
            $this->releves->removeElement($releve);
            // set the owning side to null (unless already changed)
            if ($releve->getClient() === $this) {
                $releve->setClient(null);
            }
        }

        return $this;
    }

    public function getContribuable(): ?string
    {
        return $this->contribuable;
    }

    public function setContribuable(?string $contribuable): self
    {
        $this->contribuable = $contribuable;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

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
            $planning->setClient($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): self
    {
        if ($this->plannings->contains($planning)) {
            $this->plannings->removeElement($planning);
            // set the owning side to null (unless already changed)
            if ($planning->getClient() === $this) {
                $planning->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Intervenant[]
     */
    public function getIntervenants(): Collection
    {
        return $this->intervenants;
    }

    public function addIntervenant(Intervenant $intervenant): self
    {
        if (!$this->intervenants->contains($intervenant)) {
            $this->intervenants[] = $intervenant;
            $intervenant->setClient($this);
        }

        return $this;
    }

    public function removeIntervenant(Intervenant $intervenant): self
    {
        if ($this->intervenants->contains($intervenant)) {
            $this->intervenants->removeElement($intervenant);
            // set the owning side to null (unless already changed)
            if ($intervenant->getClient() === $this) {
                $intervenant->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Chantier[]
     */
    public function getChantiers(): Collection
    {
        return $this->chantiers;
    }

    public function addChantier(Chantier $chantier): self
    {
        if (!$this->chantiers->contains($chantier)) {
            $this->chantiers[] = $chantier;
            $chantier->setClient($this);
        }

        return $this;
    }

    public function removeChantier(Chantier $chantier): self
    {
        if ($this->chantiers->contains($chantier)) {
            $this->chantiers->removeElement($chantier);
            // set the owning side to null (unless already changed)
            if ($chantier->getClient() === $this) {
                $chantier->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Livraison[]
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): self
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons[] = $livraison;
            $livraison->setClient($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->livraisons->contains($livraison)) {
            $this->livraisons->removeElement($livraison);
            // set the owning side to null (unless already changed)
            if ($livraison->getClient() === $this) {
                $livraison->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Facture[]
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): self
    {
        if (!$this->factures->contains($facture)) {
            $this->factures[] = $facture;
            $facture->setClient($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->factures->contains($facture)) {
            $this->factures->removeElement($facture);
            // set the owning side to null (unless already changed)
            if ($facture->getClient() === $this) {
                $facture->setClient(null);
            }
        }

        return $this;
    }

    public function addRelefe(Relever $relefe): self
    {
        if (!$this->releves->contains($relefe)) {
            $this->releves[] = $relefe;
            $relefe->setClient($this);
        }

        return $this;
    }

    public function removeRelefe(Relever $relefe): self
    {
        if ($this->releves->contains($relefe)) {
            $this->releves->removeElement($relefe);
            // set the owning side to null (unless already changed)
            if ($relefe->getClient() === $this) {
                $relefe->setClient(null);
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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return Collection|Rapport[]
     */
    public function getRapports(): Collection
    {
        return $this->rapports;
    }
    public function addRapport(Rapport $rapport): self
    {
        if (!$this->rapports->contains($rapport)) {
            $this->rapports[] = $rapport;
            $rapport->setClient($this);
        }

        return $this;
    }
    public function removeRapport(Rapport $rapport): self
    {
        if ($this->rapports->removeElement($rapport)) {
            // set the owning side to null (unless already changed)
            if ($rapport->getClient() === $this) {
                $rapport->setClient(null);
            }
        }

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
            $decompte->setClient($this);
        }

        return $this;
    }
    public function removeDecompte(Decompte $decompte): self
    {
        if ($this->decomptes->removeElement($decompte)) {
            // set the owning side to null (unless already changed)
            if ($decompte->getClient() === $this) {
                $decompte->setClient(null);
            }
        }

        return $this;
    }

    public function addCaiss(Caisse $caiss): self
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses->add($caiss);
            $caiss->setClient($this);
        }

        return $this;
    }
    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getClient() === $this) {
                $caiss->setClient(null);
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

    public function getEtat(): ?string
    {
        return $this->etat;
    }
    public function setEtat(?string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * @return Collection<int, Exercices>
     */
    public function getExercices(): Collection
    {
        return $this->exercices;
    }
    public function addExercice(Exercices $exercice): static
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices->add($exercice);
            $exercice->addClient($this);
        }

        return $this;
    }
    public function removeExercice(Exercices $exercice): static
    {
        if ($this->exercices->removeElement($exercice)) {
            $exercice->removeClient($this);
        }

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }
    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }
    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

}
