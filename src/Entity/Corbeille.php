<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Client;
use App\Entity\Bon;
use App\Entity\Livraison;
use App\Entity\Facture;
use App\Entity\Caisse;

#[ORM\Entity(repositoryClass: 'App\Repository\CorbeilleRepository')]
class Corbeille
{
    #[Groups(['aprele','locli','pyfournisseurs','pychantiers','clireleve','corbeille','devis','chantiers','interve',
        'facture','familles','sousfamilles','decompte','clients','fournisseurs','fours','pers','usa','commande'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['locli','pyfournisseurs','pychantiers','clireleve','corbeille','devis','chantiers','interve','facture','familles','sousfamilles','decompte','clients','fournisseurs','fours','pers','usa','commande'])]
    #[ORM\Column(type: 'integer')]
    private $designation;

    #[Groups(['corbeille','devis','chantiers','interve','familles','sousfamilles'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'mastercorbeilles')]
    private $master;

    #[Groups(['corbeille','devis','chantiers','familles','sousfamilles'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'delbycorbeilles')]
    private $delby;

    #[Groups(['corbeille','devis','chantiers','familles','sousfamilles'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['clireleve','corbeille','devis','chantiers','familles','sousfamilles'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[Groups(['corbeille','devis','chantiers','familles','sousfamilles'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Chantier::class, cascade: ['remove'] )]
    private $chantiers;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Client::class, cascade: ['remove'])]
    private $clients;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Devis::class, cascade: ['remove'])]
    private $devis;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Intervenant::class, cascade: ['remove'])]
    private $intervenants;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Contact::class, cascade: ['remove'])]
    private $contacts;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Bon::class, cascade: ['remove'])]
    private $bon;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Livraison::class, cascade: ['remove'])]
    private $livraison;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Facture::class, cascade: ['remove'])]
    private $facture;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Caisse::class, cascade: ['remove'])]
    private $caisse;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Planning::class, cascade: ['remove'])]
    private $plannings;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Section::class, cascade: ['remove'])]
    private $section;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Personnel::class, cascade: ['remove'])]
    private $personnels;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Prevision::class, cascade: ['remove'])]
    private $previsions;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Decompte::class, cascade: ['remove'])]
    private $decomptes;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Paie::class, cascade: ['remove'])]
    private $paies;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: User::class, cascade: ['remove'])]
    private $users;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Famille::class, cascade: ['remove'])]
    private $familles;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Sousfamille::class, cascade: ['remove'])]
    private $sousfamilles;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Tache::class, cascade: ['remove'])]
    private $taches;

    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Fournisseur::class)]
    private Collection $fournisseurs;

    /**
     * @var Collection<int, Exercices>
     */
    #[ORM\OneToMany(mappedBy: 'corbeille', targetEntity: Exercices::class)]
    private Collection $exercices;



    public function __construct()
    {
        $this->chantiers = new ArrayCollection();
        $this->clients = new ArrayCollection();
        $this->devis = new ArrayCollection();
        $this->bon = new ArrayCollection();
        $this->livraison = new ArrayCollection();
        $this->caisse = new ArrayCollection();
        $this->intervenants = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->plannings = new ArrayCollection();
        $this->section = new ArrayCollection();
        $this->personnels = new ArrayCollection();
        $this->previsions = new ArrayCollection();
        $this->decomptes = new ArrayCollection();
        $this->pAIEs = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->familles = new ArrayCollection();
        $this->sousfamilles = new ArrayCollection();
        $this->taches = new ArrayCollection();
        $this->facture = new ArrayCollection();
        $this->fournisseurs = new ArrayCollection();
        $this->exercices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?int
    {
        return $this->designation;
    }

    public function setDesignation(?int $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getMaster(): ?User
    {
        return $this->master;
    }

    public function setMaster(?User $master): self
    {
        $this->master = $master;

        return $this;
    }

    public function getDelby(): ?User
    {
        return $this->delby;
    }

    public function setDelby(?User $delby): self
    {
        $this->delby = $delby;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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
            $chantier->setCorbeille($this);
        }

        return $this;
    }

    public function removeChantier(Chantier $chantier): self
    {
        if ($this->chantiers->contains($chantier)) {
            $this->chantiers->removeElement($chantier);
            // set the owning side to null (unless already changed)
            if ($chantier->getCorbeille() === $this) {
                $chantier->setCorbeille(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Client[]
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }

    public function addClient(Client $client): self
    {
        if (!$this->clients->contains($client)) {
            $this->clients[] = $client;
            $client->setCorbeille($this);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        if ($this->clients->contains($client)) {
            $this->clients->removeElement($client);
            // set the owning side to null (unless already changed)
            if ($client->getCorbeille() === $this) {
                $client->setCorbeille(null);
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
            $intervenant->setCorbeille($this);
        }

        return $this;
    }

    public function removeIntervenant(Intervenant $intervenant): self
    {
        if ($this->intervenants->contains($intervenant)) {
            $this->intervenants->removeElement($intervenant);
            // set the owning side to null (unless already changed)
            if ($intervenant->getCorbeille() === $this) {
                $intervenant->setCorbeille(null);
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
            $contact->setCorbeille($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->contains($contact)) {
            $this->contacts->removeElement($contact);
            // set the owning side to null (unless already changed)
            if ($contact->getCorbeille() === $this) {
                $contact->setCorbeille(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Devis[]
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevis(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis[] = $devi;
            $devi->setCorbeille($this);
        }

        return $this;
    }

    public function removeDevis(Devis $devi): self
    {
        if ($this->devis->contains($devi)) {
            $this->devis->removeElement($devi);
            // set the owning side to null (unless already changed)
            if ($devi->getCorbeille() === $this) {
                $devi->setCorbeille(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Bon[]
     */
    public function getBon(): Collection
    {
        return $this->bon;
    }

    public function addBon(Bon $boni): self
    {
        if (!$this->bon->contains($boni)) {
            $this->bon[] = $boni;
            $boni->setCorbeille($this);
        }

        return $this;
    }

    public function removeBon(Bon $boni): self
    {
        if ($this->bon->contains($boni)) {
            $this->bon->removeElement($boni);
            // set the owning side to null (unless already changed)
            if ($boni->getCorbeille() === $this) {
                $boni->setCorbeille(null);
            }
        }

        return $this;
    }



    /**
     * @return Collection|Livraison[]
     */
    public function getLivraison(): Collection
    {
        return $this->livraison;
    }
    public function addLivraison(Livraison $livre): self
    {
        if (!$this->livraison->contains($livre)) {
            $this->livraison[] = $livre;
            $livre->setCorbeille($this);
        }

        return $this;
    }
    public function removeLivraison(Livraison $livre): self
    {
        if ($this->livraison->contains($livre)) {
            $this->livraison->removeElement($livre);
            // set the owning side to null (unless already changed)
            if ($livre->getCorbeille() === $this) {
                $livre->setCorbeille(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Facture[]
     */
    public function getFacture(): Collection
    {
        return $this->facture;
    }
    public function addFacture(Facture $fact): self
    {
        if (!$this->facture->contains($fact)) {
            $this->facture[] = $fact;
            $fact->setCorbeille($this);
        }
        return $this;
    }
    public function removeFacture(Facture $fact): self
    {
        if ($this->facture->contains($fact)) {
            $this->facture->removeElement($fact);

            if ($fact->getCorbeille() === $this) {
                $fact->setCorbeille(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Caisse[]
     */
    public function getCaisse(): Collection
    {
        return $this->caisse;
    }

    public function addCaisse(Caisse $caiss): self
    {
        if (!$this->caisse->contains($caiss)) {
            $this->caisse[] = $caiss;
            $caiss->setCorbeille($this);
        }

        return $this;
    }

    public function removeCaisse(Caisse $caiss): self
    {
        if ($this->caisse->contains($caiss)) {
            $this->caisse->removeElement($caiss);
            // set the owning side to null (unless already changed)
            if ($caiss->getCorbeille() === $this) {
                $caiss->setCorbeille(null);
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
            $planning->setCorbeille($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): self
    {
        if ($this->plannings->removeElement($planning)) {
            // set the owning side to null (unless already changed)
            if ($planning->getCorbeille() === $this) {
                $planning->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Section[]
     */
    public function getSection(): Collection
    {
        return $this->section;
    }

    public function addSection(Section $section): self
    {
        if (!$this->section->contains($section)) {
            $this->section[] = $section;
            $section->setCorbeille($this);
        }

        return $this;
    }

    public function removeSection(Section $section): self
    {
        if ($this->section->removeElement($section)) {
            // set the owning side to null (unless already changed)
            if ($section->getCorbeille() === $this) {
                $section->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Personnel[]
     */
    public function getPersonnels(): Collection
    {
        return $this->personnels;
    }

    public function addPersonnel(Personnel $personnel): self
    {
        if (!$this->personnels->contains($personnel)) {
            $this->personnels[] = $personnel;
            $personnel->setCorbeille($this);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): self
    {
        if ($this->personnels->removeElement($personnel)) {
            // set the owning side to null (unless already changed)
            if ($personnel->getCorbeille() === $this) {
                $personnel->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Prevision[]
     */
    public function getPrevisions(): Collection
    {
        return $this->previsions;
    }

    public function addPrevision(Prevision $prevision): self
    {
        if (!$this->previsions->contains($prevision)) {
            $this->previsions[] = $prevision;
            $prevision->setCorbeille($this);
        }

        return $this;
    }

    public function removePrevision(Prevision $prevision): self
    {
        if ($this->previsions->removeElement($prevision)) {
            // set the owning side to null (unless already changed)
            if ($prevision->getCorbeille() === $this) {
                $prevision->setCorbeille(null);
            }
        }

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
            $decompte->setCorbeille($this);
        }

        return $this;
    }

    public function removeDecompte(Decompte $decompte): self
    {
        if ($this->decomptes->removeElement($decompte)) {
            // set the owning side to null (unless already changed)
            if ($decompte->getCorbeille() === $this) {
                $decompte->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PAIE[]
     */
    public function getPAIEs(): Collection
    {
        return $this->pAIEs;
    }

    public function addPAIE(PAIE $pAIE): self
    {
        if (!$this->pAIEs->contains($pAIE)) {
            $this->pAIEs[] = $pAIE;
            $pAIE->setCorbeille($this);
        }

        return $this;
    }

    public function removePAIE(PAIE $pAIE): self
    {
        if ($this->pAIEs->removeElement($pAIE)) {
            // set the owning side to null (unless already changed)
            if ($pAIE->getCorbeille() === $this) {
                $pAIE->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setCorbeille($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getCorbeille() === $this) {
                $user->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Famille[]
     */
    public function getFamilles(): Collection
    {
        return $this->familles;
    }

    public function addFamille(Famille $famille): self
    {
        if (!$this->familles->contains($famille)) {
            $this->familles[] = $famille;
            $famille->setCorbeille($this);
        }

        return $this;
    }

    public function removeFamille(Famille $famille): self
    {
        if ($this->familles->removeElement($famille)) {
            // set the owning side to null (unless already changed)
            if ($famille->getCorbeille() === $this) {
                $famille->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Sousfamille[]
     */
    public function getSousfamilles(): Collection
    {
        return $this->sousfamilles;
    }

    public function addSousfamille(Sousfamille $sousfamille): self
    {
        if (!$this->sousfamilles->contains($sousfamille)) {
            $this->sousfamilles[] = $sousfamille;
            $sousfamille->setCorbeille($this);
        }

        return $this;
    }

    public function removeSousfamille(Sousfamille $sousfamille): self
    {
        if ($this->sousfamilles->removeElement($sousfamille)) {
            // set the owning side to null (unless already changed)
            if ($sousfamille->getCorbeille() === $this) {
                $sousfamille->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tache>
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTach(Tache $tach): self
    {
        if (!$this->taches->contains($tach)) {
            $this->taches[] = $tach;
            $tach->setCorbeille($this);
        }

        return $this;
    }

    public function removeTach(Tache $tach): self
    {
        if ($this->taches->removeElement($tach)) {
            // set the owning side to null (unless already changed)
            if ($tach->getCorbeille() === $this) {
                $tach->setCorbeille(null);
            }
        }

        return $this;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis->add($devi);
            $devi->setCorbeille($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getCorbeille() === $this) {
                $devi->setCorbeille(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fournisseur>
     */
    public function getFournisseurs(): Collection
    {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): static
    {
        if (!$this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs->add($fournisseur);
            $fournisseur->setCorbeille($this);
        }

        return $this;
    }

    public function removeFournisseur(Fournisseur $fournisseur): static
    {
        if ($this->fournisseurs->removeElement($fournisseur)) {
            // set the owning side to null (unless already changed)
            if ($fournisseur->getCorbeille() === $this) {
                $fournisseur->setCorbeille(null);
            }
        }

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
            $exercice->setCorbeille($this);
        }

        return $this;
    }

    public function removeExercice(Exercices $exercice): static
    {
        if ($this->exercices->removeElement($exercice)) {
            // set the owning side to null (unless already changed)
            if ($exercice->getCorbeille() === $this) {
                $exercice->setCorbeille(null);
            }
        }

        return $this;
    }

}
