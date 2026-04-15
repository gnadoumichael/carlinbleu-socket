<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\UserRepository;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity('username', message: "L'email indiqué est dèjà utilisé")]
#[UniqueEntity(fields: ['username'], message: 'There is already an account with this username')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[Groups(['pycaisse','besoin','chantierwin','pychantiers','pychantier','pyfournisseurs','pyfacture','pydecompte','pydevis','histoires','decompte','tacher','users','todo','devis','clients','chats',
        'commande','interve','caisse','messages','facture','usa','valides','pers','chatbesoin'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Assert\Image(maxSize: 5120, maxWidth: 600, maxHeight: 600)]
    private $gallery;

    #[Groups(['pycaisse','besoin','chantierwin','pychantiers','pychantier','pyfournisseurs','pyfacture','pydecompte','pydevis','histoires','decompte','tacher','users','todo','devis',
        'clients','chats','commande','interve','caisse','messages','facture','usa', 'valides','pers','chatbesoin'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private ?string $nom;

    #[Groups(['pycaisse','besoin','chantierwin','pychantiers','pychantier','pyfournisseurs','pyfacture','pydecompte','pydevis','histoires','decompte','tacher','users','todo','devis','clients',
        'chats','commande','interve','caisse','messages','facture','usa','valides','pers','chatbesoin'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $prenoms;

    #[Groups(['users','usa'])]
    #[ORM\Column(type: 'string', nullable: true)]
    #[Assert\NotNull]
    private $societe;

    #[Groups(['users','usa'])]
    #[ORM\Column(type: 'string', length: 255, unique: true)]
    #[Assert\Email(message: "Votre email n'est pas valide")]
    #[Assert\NotNull]
    private $username;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(min: 8, minMessage: 'Votre mot de passe doit faire au moins 8 caractères')]
    #[Assert\NotNull]
    private $password;

    #[Assert\Length(min: 8, minMessage: 'Votre mot de passe doit faire au moins 8 caractères')]
    #[Assert\Expression('this.getPassword() === this.getConfirmPasse()', message: 'les mots de passe doivent être égaux')]
    #[Assert\NotNull]
    public $confirm_passe;

    #[Assert\Length(min: 8, minMessage: 'Votre mot de passe doit faire au moins 8 caractères')]
    private $oldpasse;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Client::class)]
    private $clients;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Chantier::class)]
    private $chantiers;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Devis::class)]
    private $devis;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Contact::class)]
    private $contacts;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Article::class)]
    private $articles;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Famille::class)]
    private $famille;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Sousfamille::class)]
    private $sousfamille;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Bon::class)]
    private $bons;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Caisse::class)]
    private $caisses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Intervenant::class)]
    private $intervenants;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Valider::class)]
    private $validers;

    #[Groups(['user','usa'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adresse;

    #[Groups(['users','usa'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contact;

    #[ORM\ManyToOne(targetEntity: Pays::class, inversedBy: 'users')]
    private $pays;

    #[Groups(['user','usa'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contribuable;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Domaine::class)]
    private $domaines;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Galerie::class)]
    private $galeries;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Ligne::class)]
    private $lignes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Forme::class)]
    private $formes;

    #[ORM\Column(type: 'text', nullable: true)]
    private $presentation;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Planning::class)]
    private $planning;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Message::class)]
    private $messages;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Documents::class)]
    private $documents;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Partager::class)]
    private $partagers;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Livraison::class)]
    private $livraisons;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $status;

    #[ORM\Column(type: 'datetime')]
    private $begdate;

    #[ORM\Column(type: 'datetime')]
    private $enddate;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Facture::class)]
    private $factures;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Tache::class)]
    private $taches;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'users')]
    private $compte;

    #[ORM\OneToMany(mappedBy: 'compte', targetEntity: User::class)]
    private $users;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Article::class)]
    private $doarticles;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Fournisseur::class)]
    private $fournisseurs;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Chantier::class)]
    private $dobychantiers;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Client::class)]
    private $dobyclients;

    #[ORM\OneToMany(mappedBy: 'master', targetEntity: Corbeille::class)]
    private $mastercorbeilles;

    #[ORM\OneToMany(mappedBy: 'delby', targetEntity: Corbeille::class)]
    private $delbycorbeilles;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Contact::class)]
    private $dobycontacts;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Intervenant::class)]
    private $dobyintervenants;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Caisse::class)]
    private $dobycaisses;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Valider::class)]
    private $dobyvaliders;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Devis::class)]
    private $dobydevis;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Bon::class)]
    private $dobybons;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Facture::class)]
    private $dobyfactures;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Livraison::class)]
    private $dobylivraisons;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Recap::class)]
    private $recaps;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Recap::class)]
    private $dobyrecaps;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Fichier::class)]
    private $fichiers;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Personnel::class)]
    private $personnels;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Rapport::class)]
    private $rapports;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Rapport::class)]
    private $userRapports;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Materiel::class)]
    private $materiels;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: MaterielChantier::class)]
    private $materielChantiers;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: MaterielBeneficiaire::class)]
    private $materielBeneficiaires;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Prevision::class)]
    private $previsions;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $logo;

    #[Groups(['users','chats','usa'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $photo;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Decompte::class)]
    private $decomptes;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Decompte::class)]
    private $dobydecompte;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Paie::class)]
    private $paies;

    #[Groups(['users','chats','usa'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'users')]
    private $corbeille;

    #[ORM\OneToMany(mappedBy: 'vabyuser', targetEntity: Devis::class)]
    private $vabyuser;

    #[ORM\OneToMany(mappedBy: 'vabyuser', targetEntity: Bon::class)]
    private $vabyuserbons;

    #[ORM\OneToMany(mappedBy: 'vabyuser', targetEntity: Caisse::class)]
    private $vabyusercaisses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Historique::class)]
    private $historiques;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Historique::class)]
    private $dobyuserhistorique;

    #[ORM\OneToMany(mappedBy: 'dobyuser', targetEntity: Personnel::class)]
    private $dobypersonnels;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $pub;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Beneficiaire::class)]
    private $beneficiaires;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: MatHistorique::class)]
    private $matHistoriques;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Equipe::class)]
    private $userequipes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Acompte::class)]
    private $acomptes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Service::class)]
    private $services;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Todo::class)]
    private $todos;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: Todo::class)]
    private $ownerTodos;

    #[ORM\OneToMany(mappedBy: 'sender', targetEntity: Todo::class)]
    private $senderTodos;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: Chat::class)]
    private $ownerchats;

    #[ORM\OneToMany(mappedBy: 'receiver', targetEntity: Chat::class)]
    private $receiverchats;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Chat::class)]
    private $userchats;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Section::class)]
    private $sections;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Alerte::class)]
    private $alertes;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: Alerte::class)]
    private  $ownerlertes;

    #[ORM\Column(type: 'boolean')]
    private bool $isVerified = false;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $resetToken;

    #[ORM\OneToMany(mappedBy: 'sender', targetEntity: Message::class)]
    private $sendermessages;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $activite = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Fiche::class)]
    private $fiches;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity:Journalier::class)]
    private $journaliers;

    /**
     * @var Collection<int, Exercices>
     */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Exercices::class)]
    private Collection $exercices;

    /**
     * @var Collection<int, ChatBesoin>
     */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: ChatBesoin::class)]
    private Collection $chatBesoins;

    /**
     * @var Collection<int, ChatBesoin>
     */
    #[ORM\OneToMany(mappedBy: 'sender', targetEntity: ChatBesoin::class)]
    private Collection $chatSenderBesoins;

    #[ORM\Column(length: 255)]
    private ?string $themes = null;

    #[ORM\Column(length: 255)]
    private ?string $langue = null;



    public function __construct()
    {
        $this->chantiers = new ArrayCollection();
        $this->devis = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->famille = new ArrayCollection();
        $this->sousfamille = new ArrayCollection();
        $this->bons = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->intervenants = new ArrayCollection();
        $this->validers = new ArrayCollection();
        $this->clients = new ArrayCollection();
        $this->domaines = new ArrayCollection();
        $this->galeries = new ArrayCollection();
        $this->lignes = new ArrayCollection();
        $this->formes = new ArrayCollection();
        $this->planning = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->documents = new ArrayCollection();
        $this->partagers = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->factures = new ArrayCollection();
        $this->taches = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->doarticles = new ArrayCollection();
        $this->fournisseurs = new ArrayCollection();
        $this->dobychantiers = new ArrayCollection();
        $this->dobyclients = new ArrayCollection();
        $this->mastercorbeilles = new ArrayCollection();
        $this->delbycorbeilles = new ArrayCollection();
        $this->dobycontacts = new ArrayCollection();
        $this->dobyintervenants = new ArrayCollection();
        $this->dobycaisses = new ArrayCollection();
        $this->dobyvaliders = new ArrayCollection();
        $this->dobydevis = new ArrayCollection();
        $this->dobybons = new ArrayCollection();
        $this->dobyfactures = new ArrayCollection();
        $this->dobylivraisons = new ArrayCollection();
        $this->recaps = new ArrayCollection();
        $this->dobyrecaps = new ArrayCollection();
        $this->fichiers = new ArrayCollection();
        $this->personnels = new ArrayCollection();
        $this->rapports = new ArrayCollection();
        $this->userRapports = new ArrayCollection();
        $this->materiels = new ArrayCollection();
        $this->materielChantiers = new ArrayCollection();
        $this->materielBeneficiaires = new ArrayCollection();
        $this->previsions = new ArrayCollection();
        $this->decomptes = new ArrayCollection();
        $this->dobydecompte = new ArrayCollection();
        $this->paies = new ArrayCollection();
        $this->vabyuser = new ArrayCollection();
        $this->vabyuserbons = new ArrayCollection();
        $this->vabyusercaisses = new ArrayCollection();
        $this->historiques = new ArrayCollection();
        $this->dobyuserhistorique = new ArrayCollection();
        $this->dobypersonnels = new ArrayCollection();
        $this->beneficiaires = new ArrayCollection();
        $this->matHistoriques = new ArrayCollection();
        $this->userequipes = new ArrayCollection();
        $this->acomptes = new ArrayCollection();
        $this->services = new ArrayCollection();
        $this->todos = new ArrayCollection();
        $this->ownerTodos = new ArrayCollection();
        $this->senderTodos = new ArrayCollection();
        $this->ownerchats = new ArrayCollection();
        $this->receiverchats = new ArrayCollection();
        $this->userchats = new ArrayCollection();
        $this->sections = new ArrayCollection();
        $this->alertes = new ArrayCollection();
        $this->ownerlertes = new ArrayCollection();
        $this->sendermessages = new ArrayCollection();
        $this->fiches = new ArrayCollection();
        $this->journaliers = new ArrayCollection();
        $this->exercices = new ArrayCollection();
        $this->chatBesoins = new ArrayCollection();
        $this->chatSenderBesoins = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }


    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }

    public function setPrenoms(string $prenoms): self
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }


    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    public function getConfirmPasse()
    {
        return $this->confirm_passe;
    }


    public function setConfirmPasse($confirm_passe): void
    {
        $this->confirm_passe = $confirm_passe;
    }

    /**
     * @return mixed
     */
    public function getOldPasse()
    {
        return $this->oldpasse;
    }

    /**
     * @param mixed $oldpasse
     */
    public function setOldPasse($oldpasse): void
    {
        $this->oldpasse = $oldpasse;
    }
    /**
     * @return Collection|client[]
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }
    public function addClient(Client $client): self
    {
        if (!$this->clients->contains($client)) {
            $this->clients[] = $client;
            $client->setUser($this);
        }

        return $this;
    }
    public function removeClient(Client $client): self
    {
        if ($this->clients->contains($client)) {
            $this->clients->removeElement($client);
            // set the owning side to null (unless already changed)
            if ($client->getUser() === $this) {
                $client->setUser(null);
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
            $chantier->setUser($this);
        }

        return $this;
    }
    public function removeChantier(Chantier $chantier): self
    {
        if ($this->chantiers->contains($chantier)) {
            $this->chantiers->removeElement($chantier);
            // set the owning side to null (unless already changed)
            if ($chantier->getUser() === $this) {
                $chantier->setUser(null);
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

    public function addDevis(Devis $devis): self
    {
        if (!$this->devis->contains($devis)) {
            $this->devis[] = $devis;
            $devis->setUser($this);
        }

        return $this;
    }

    public function removeDevis(Devis $devis): self
    {
        if ($this->devis->contains($devis)) {
            $this->devis->removeElement($devis);
            // set the owning side to null (unless already changed)
            if ($devis->getUser() === $this) {
                $devis->setUser(null);
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
            $contact->setUser($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->contains($contact)) {
            $this->contacts->removeElement($contact);
            // set the owning side to null (unless already changed)
            if ($contact->getUser() === $this) {
                $contact->setUser(null);
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
            $article->setUser($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getUser() === $this) {
                $article->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getFamille(): Collection
    {
        return $this->famille;
    }

    public function addFamille(Famille $famille): self
    {
        if (!$this->famille->contains($famille)) {
            $this->famille[] = $famille;
            $famille->setUser($this);
        }

        return $this;
    }

    public function removeFamille(Famille $famille): self
    {
        if ($this->famille->contains($famille)) {
            $this->famille->removeElement($famille);
            // set the owning side to null (unless already changed)
            if ($famille->getUser() === $this) {
                $famille->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getSousFamille(): Collection
    {
        return $this->sousfamille;
    }

    public function addSousFamille(Sousfamille $sousfamille): self
    {
        if (!$this->sousfamille->contains($sousfamille)) {
            $this->sousfamille[] = $sousfamille;
            $sousfamille->setUser($this);
        }

        return $this;
    }

    public function removeSousFamille(Sousfamille $sousfamille): self
    {
        if ($this->sousfamille->contains($sousfamille)) {
            $this->sousfamille->removeElement($sousfamille);
            // set the owning side to null (unless already changed)
            if ($sousfamille->getUser() === $this) {
                $sousfamille->setUser(null);
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
            $bon->setUser($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->contains($bon)) {
            $this->bons->removeElement($bon);
            // set the owning side to null (unless already changed)
            if ($bon->getUser() === $this) {
                $bon->setUser(null);
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

    public function addCaisse(Caisse $caisse): self
    {
        if (!$this->caisses->contains($caisse)) {
            $this->caisses[] = $caisse;
            $caisse->setUser($this);
        }

        return $this;
    }

    public function removeCaisse(Caisse $caisse): self
    {
        if ($this->caisses->contains($caisse)) {
            $this->caisses->removeElement($caisse);
            // set the owning side to null (unless already changed)
            if ($caisse->getUser() === $this) {
                $caisse->setUser(null);
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
            $intervenant->setUser($this);
        }

        return $this;
    }

    public function removeIntervenant(Intervenant $intervenant): self
    {
        if ($this->intervenants->contains($intervenant)) {
            $this->intervenants->removeElement($intervenant);
            // set the owning side to null (unless already changed)
            if ($intervenant->getUser() === $this) {
                $intervenant->setUser(null);
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
            $valider->setUser($this);
        }

        return $this;
    }

    public function removeValider(Valider $valider): self
    {
        if ($this->validers->contains($valider)) {
            $this->validers->removeElement($valider);
            // set the owning side to null (unless already changed)
            if ($valider->getUser() === $this) {
                $valider->setUser(null);
            }
        }

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

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

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

    /**
     * @return Collection
     */
    public function getDomaines(): Collection
    {
        return $this->domaines;
    }

    public function addDomaine(Domaine $domaine): self
    {
        if (!$this->domaines->contains($domaine)) {
            $this->domaines[] = $domaine;
            $domaine->setUser($this);
        }

        return $this;
    }

    public function removeDomaine(Domaine $domaine): self
    {
        if ($this->domaines->contains($domaine)) {
            $this->domaines->removeElement($domaine);
            // set the owning side to null (unless already changed)
            if ($domaine->getUser() === $this) {
                $domaine->setUser(null);
            }
        }

        return $this;
    }


    public function setGallery(File $file = null)
    {
        $this->gallery = $file;
    }

    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * @return Collection
     */
    public function getGaleries(): Collection
    {
        return $this->galeries;
    }

    public function addGalery(Galerie $galery): self
    {
        if (!$this->galeries->contains($galery)) {
            $this->galeries[] = $galery;
            $galery->setUser($this);
        }

        return $this;
    }

    public function removeGalery(Galerie $galery): self
    {
        if ($this->galeries->contains($galery)) {
            $this->galeries->removeElement($galery);
            // set the owning side to null (unless already changed)
            if ($galery->getUser() === $this) {
                $galery->setUser(null);
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
            $ligne->setUser($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getUser() === $this) {
                $ligne->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getFormes(): Collection
    {
        return $this->formes;
    }

    public function addForme(Forme $forme): self
    {
        if (!$this->formes->contains($forme)) {
            $this->formes[] = $forme;
            $forme->setUser($this);
        }

        return $this;
    }

    public function removeForme(Forme $forme): self
    {
        if ($this->formes->contains($forme)) {
            $this->formes->removeElement($forme);
            // set the owning side to null (unless already changed)
            if ($forme->getUser() === $this) {
                $forme->setUser(null);
            }
        }

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(?string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getPlanning(): Collection
    {
        return $this->planning;
    }

    public function addPlanning(Planning $planning): self
    {
        if (!$this->planning->contains($planning)) {
            $this->planning[] = $planning;
            $planning->setUser($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): self
    {
        if ($this->planning->contains($planning)) {
            $this->planning->removeElement($planning);
            // set the owning side to null (unless already changed)
            if ($planning->getUser() === $this) {
                $planning->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setUser($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->contains($message)) {
            $this->messages->removeElement($message);
            // set the owning side to null (unless already changed)
            if ($message->getUser() === $this) {
                $message->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->setUser($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            // set the owning side to null (unless already changed)
            if ($document->getUser() === $this) {
                $document->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getPartagers(): Collection
    {
        return $this->partagers;
    }

    public function addPartager(Partager $partager): self
    {
        if (!$this->partagers->contains($partager)) {
            $this->partagers[] = $partager;
            $partager->setUser($this);
        }

        return $this;
    }

    public function removePartager(Partager $partager): self
    {
        if ($this->partagers->contains($partager)) {
            $this->partagers->removeElement($partager);
            // set the owning side to null (unless already changed)
            if ($partager->getUser() === $this) {
                $partager->setUser(null);
            }
        }

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
            $livraison->setUser($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->livraisons->contains($livraison)) {
            $this->livraisons->removeElement($livraison);
            // set the owning side to null (unless already changed)
            if ($livraison->getUser() === $this) {
                $livraison->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

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
            $facture->setUser($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->factures->contains($facture)) {
            $this->factures->removeElement($facture);
            // set the owning side to null (unless already changed)
            if ($facture->getUser() === $this) {
                $facture->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tache[]
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTache(Tache $taches): self
    {
        if (!$this->taches->contains($taches)) {
            $this->taches[] = $taches;
            $taches->setUser($this);
        }

        return $this;
    }

    public function removeTache(Tache $taches): self
    {
        if ($this->taches->contains($taches)) {
            $this->taches->removeElement($taches);
            // set the owning side to null (unless already changed)
            if ($taches->getUser() === $this) {
                $taches->setUser(null);
            }
        }

        return $this;
    }



    /**
     * @return mixed
     */
    public function getBegdate()
    {
        return $this->begdate;
    }

    /**
     * @param mixed $begdate
     */
    public function setBegdate($begdate): void
    {
        $this->begdate = $begdate;
    }

    /**
     * @return mixed
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param mixed $enddate
     */
    public function setEnddate($enddate): void
    {
        $this->enddate = $enddate;
    }

    public function getCompte(): ?self
    {
        return $this->compte;
    }

    public function setCompte(?self $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(self $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setCompte($this);
        }

        return $this;
    }

    public function removeUser(self $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getCompte() === $this) {
                $user->setCompte(null);
            }
        }

        return $this;
    }



    /**
     * @return Collection|Article[]
     */
    public function getDoarticles(): Collection
    {
        return $this->doarticles;
    }

    public function addDoarticle(Article $doarticle): self
    {
        if (!$this->doarticles->contains($doarticle)) {
            $this->doarticles[] = $doarticle;
            $doarticle->setDobyuser($this);
        }

        return $this;
    }

    public function removeDoarticle(Article $doarticle): self
    {
        if ($this->doarticles->contains($doarticle)) {
            $this->doarticles->removeElement($doarticle);
            // set the owning side to null (unless already changed)
            if ($doarticle->getDobyuser() === $this) {
                $doarticle->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Fournisseur[]
     */
    public function getFournisseurs(): Collection
    {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): self
    {
        if (!$this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs[] = $fournisseur;
            $fournisseur->setUser($this);
        }

        return $this;
    }

    public function removeFournisseur(Fournisseur $fournisseur): self
    {
        if ($this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs->removeElement($fournisseur);
            // set the owning side to null (unless already changed)
            if ($fournisseur->getUser() === $this) {
                $fournisseur->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Chantier[]
     */
    public function getDobyChantiers(): Collection
    {
        return $this->dobychantiers;
    }

    public function addDobyChantier(Chantier $dobychantier): self
    {
        if (!$this->dobychantiers->contains($dobychantier)) {
            $this->dobychantiers[] = $dobychantier;
            $dobychantier->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobyChantier(Chantier $dobychantier): self
    {
        if ($this->dobychantiers->contains($dobychantier)) {
            $this->dobychantiers->removeElement($dobychantier);
            // set the owning side to null (unless already changed)
            if ($dobychantier->getDobyuser() === $this) {
                $dobychantier->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Client[]
     */
    public function getDobyclients(): Collection
    {
        return $this->dobyclients;
    }

    public function addDobyclient(Client $dobyclient): self
    {
        if (!$this->dobyclients->contains($dobyclient)) {
            $this->dobyclients[] = $dobyclient;
            $dobyclient->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobyclient(Client $dobyclient): self
    {
        if ($this->dobyclients->contains($dobyclient)) {
            $this->dobyclients->removeElement($dobyclient);
            // set the owning side to null (unless already changed)
            if ($dobyclient->getDobyuser() === $this) {
                $dobyclient->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Corbeille[]
     */
    public function getMastercorbeilles(): Collection
    {
        return $this->mastercorbeilles;
    }

    public function addMastercorbeille(Corbeille $mastercorbeille): self
    {
        if (!$this->mastercorbeilles->contains($mastercorbeille)) {
            $this->mastercorbeilles[] = $mastercorbeille;
            $mastercorbeille->setMaster($this);
        }

        return $this;
    }

    public function removeMastercorbeille(Corbeille $mastercorbeille): self
    {
        if ($this->mastercorbeilles->contains($mastercorbeille)) {
            $this->mastercorbeilles->removeElement($mastercorbeille);
            // set the owning side to null (unless already changed)
            if ($mastercorbeille->getMaster() === $this) {
                $mastercorbeille->setMaster(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Corbeille[]
     */
    public function getDelbycorbeilles(): Collection
    {
        return $this->delbycorbeilles;
    }

    public function addDelbycorbeille(Corbeille $delbycorbeille): self
    {
        if (!$this->delbycorbeilles->contains($delbycorbeille)) {
            $this->delbycorbeilles[] = $delbycorbeille;
            $delbycorbeille->setDelby($this);
        }

        return $this;
    }

    public function removeDelbycorbeille(Corbeille $delbycorbeille): self
    {
        if ($this->delbycorbeilles->contains($delbycorbeille)) {
            $this->delbycorbeilles->removeElement($delbycorbeille);
            // set the owning side to null (unless already changed)
            if ($delbycorbeille->getDelby() === $this) {
                $delbycorbeille->setDelby(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getDobycontacts(): Collection
    {
        return $this->dobycontacts;
    }

    public function addDobycontact(Contact $dobycontact): self
    {
        if (!$this->dobycontacts->contains($dobycontact)) {
            $this->dobycontacts[] = $dobycontact;
            $dobycontact->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobycontact(Contact $dobycontact): self
    {
        if ($this->dobycontacts->contains($dobycontact)) {
            $this->dobycontacts->removeElement($dobycontact);
            // set the owning side to null (unless already changed)
            if ($dobycontact->getDobyuser() === $this) {
                $dobycontact->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Intervenant[]
     */
    public function getDobyintervenants(): Collection
    {
        return $this->dobyintervenants;
    }

    public function addDobyintervenant(Intervenant $dobyintervenant): self
    {
        if (!$this->dobyintervenants->contains($dobyintervenant)) {
            $this->dobyintervenants[] = $dobyintervenant;
            $dobyintervenant->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobyintervenant(Intervenant $dobyintervenant): self
    {
        if ($this->dobyintervenants->contains($dobyintervenant)) {
            $this->dobyintervenants->removeElement($dobyintervenant);
            // set the owning side to null (unless already changed)
            if ($dobyintervenant->getDobyuser() === $this) {
                $dobyintervenant->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Caisse[]
     */
    public function getDobycaisses(): Collection
    {
        return $this->dobycaisses;
    }

    public function addDobycaisse(Caisse $dobycaisse): self
    {
        if (!$this->dobycaisses->contains($dobycaisse)) {
            $this->dobycaisses[] = $dobycaisse;
            $dobycaisse->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobycaiss(Caisse $dobycaiss): self
    {
        if ($this->dobycaisses->contains($dobycaiss)) {
            $this->dobycaisses->removeElement($dobycaiss);
            // set the owning side to null (unless already changed)
            if ($dobycaiss->getDobyuser() === $this) {
                $dobycaiss->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Valider[]
     */
    public function getDobyvaliders(): Collection
    {
        return $this->dobyvaliders;
    }

    public function addDobyvalider(Valider $dobyvalider): self
    {
        if (!$this->dobyvaliders->contains($dobyvalider)) {
            $this->dobyvaliders[] = $dobyvalider;
            $dobyvalider->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobyvalider(Valider $dobyvalider): self
    {
        if ($this->dobyvaliders->contains($dobyvalider)) {
            $this->dobyvaliders->removeElement($dobyvalider);
            // set the owning side to null (unless already changed)
            if ($dobyvalider->getDobyuser() === $this) {
                $dobyvalider->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Devis[]
     */
    public function getDobydevis(): Collection
    {
        return $this->dobydevis;
    }

    public function addDobydevis(Devis $dobydevis): self
    {
        if (!$this->dobydevis->contains($dobydevis)) {
            $this->dobydevis[] = $dobydevis;
            $dobydevis->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobydevis(Devis $dobydevis): self
    {
        if ($this->dobydevis->contains($dobydevis)) {
            $this->dobydevis->removeElement($dobydevis);
            // set the owning side to null (unless already changed)
            if ($dobydevis->getDobyuser() === $this) {
                $dobydevis->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Bon[]
     */
    public function getDobybons(): Collection
    {
        return $this->dobybons;
    }

    public function addDobybon(Bon $dobybon): self
    {
        if (!$this->dobybons->contains($dobybon)) {
            $this->dobybons[] = $dobybon;
            $dobybon->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobybon(Bon $dobybon): self
    {
        if ($this->dobybons->contains($dobybon)) {
            $this->dobybons->removeElement($dobybon);
            // set the owning side to null (unless already changed)
            if ($dobybon->getDobyuser() === $this) {
                $dobybon->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Facture[]
     */
    public function getDobyfactures(): Collection
    {
        return $this->dobyfactures;
    }

    public function addDobyfacture(Facture $dobyfacture): self
    {
        if (!$this->dobyfactures->contains($dobyfacture)) {
            $this->dobyfactures[] = $dobyfacture;
            $dobyfacture->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobyfacture(Facture $dobyfacture): self
    {
        if ($this->dobyfactures->contains($dobyfacture)) {
            $this->dobyfactures->removeElement($dobyfacture);
            // set the owning side to null (unless already changed)
            if ($dobyfacture->getDobyuser() === $this) {
                $dobyfacture->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Livraison[]
     */
    public function getDobylivraisons(): Collection
    {
        return $this->dobylivraisons;
    }

    public function addDobylivraison(Livraison $dobylivraison): self
    {
        if (!$this->dobylivraisons->contains($dobylivraison)) {
            $this->dobylivraisons[] = $dobylivraison;
            $dobylivraison->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobylivraison(Livraison $dobylivraison): self
    {
        if ($this->dobylivraisons->contains($dobylivraison)) {
            $this->dobylivraisons->removeElement($dobylivraison);
            // set the owning side to null (unless already changed)
            if ($dobylivraison->getDobyuser() === $this) {
                $dobylivraison->setDobyuser(null);
            }
        }

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
            $recap->setUser($this);
        }

        return $this;
    }

    public function removeRecap(Recap $recap): self
    {
        if ($this->recaps->contains($recap)) {
            $this->recaps->removeElement($recap);
            // set the owning side to null (unless already changed)
            if ($recap->getUser() === $this) {
                $recap->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Recap[]
     */
    public function getDobyrecaps(): Collection
    {
        return $this->dobyrecaps;
    }

    public function addDobyrecap(Recap $dobyrecap): self
    {
        if (!$this->dobyrecaps->contains($dobyrecap)) {
            $this->dobyrecaps[] = $dobyrecap;
            $dobyrecap->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobyrecap(Recap $dobyrecap): self
    {
        if ($this->dobyrecaps->contains($dobyrecap)) {
            $this->dobyrecaps->removeElement($dobyrecap);
            // set the owning side to null (unless already changed)
            if ($dobyrecap->getDobyuser() === $this) {
                $dobyrecap->setDobyuser(null);
            }
        }

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
            $fichier->setUser($this);
        }

        return $this;
    }

    public function removeFichier(Fichier $fichier): self
    {
        if ($this->fichiers->contains($fichier)) {
            $this->fichiers->removeElement($fichier);
            // set the owning side to null (unless already changed)
            if ($fichier->getUser() === $this) {
                $fichier->setUser(null);
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
            $personnel->setUser($this);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): self
    {
        if ($this->personnels->contains($personnel)) {
            $this->personnels->removeElement($personnel);
            // set the owning side to null (unless already changed)
            if ($personnel->getUser() === $this) {
                $personnel->setUser(null);
            }
        }

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
            $rapport->setDobyuser($this);
        }

        return $this;
    }

    public function removeRapport(Rapport $rapport): self
    {
        if ($this->rapports->removeElement($rapport)) {
            // set the owning side to null (unless already changed)
            if ($rapport->getDobyuser() === $this) {
                $rapport->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Rapport[]
     */
    public function getUserRapports(): Collection
    {
        return $this->userRapports;
    }

    public function addUserRapport(Rapport $userRapport): self
    {
        if (!$this->userRapports->contains($userRapport)) {
            $this->userRapports[] = $userRapport;
            $userRapport->setUser($this);
        }

        return $this;
    }

    public function removeUserRapport(Rapport $userRapport): self
    {
        if ($this->userRapports->removeElement($userRapport)) {
            // set the owning side to null (unless already changed)
            if ($userRapport->getUser() === $this) {
                $userRapport->setUser(null);
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
            $materiel->setUser($this);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): self
    {
        if ($this->materiels->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getUser() === $this) {
                $materiel->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MaterielChantier[]
     */
    public function getMaterielChantiers(): Collection
    {
        return $this->materielChantiers;
    }

    public function addMaterielChantier(MaterielChantier $materielChantiers): self
    {
        $materielChantier = '';
        if (!$this->materielChantiers->contains($materielChantier)) {
            $this->materielChantiers[] = $materielChantier;
            $materielChantier->setUser($this);
        }

        return $this;
    }

    public function removeMaterielChantier(MaterielChantier $materielchantier): self
    {
        if ($this->materielchantiers->removeElement($materielchantier)) {
            // set the owning side to null (unless already changed)
            if ($materielchantier->getUser() === $this) {
                $materielchantier->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MaterielPersonnel[]
     */
    public function getMaterielBeneficiaires(): Collection
    {
        return $this->materielBeneficiaires;
    }

    public function addMaterielBeneficiaire(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if (!$this->materielBeneficiaires->contains($materielBeneficiaire)) {
            $this->materielBeneficiaires[] = $materielBeneficiaire;
            $materielBeneficiaire->setUser($this);
        }

        return $this;
    }

    public function removeMaterielBenefiaire(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if ($this->materielBeneficiaires->removeElement($materielBeneficiaire)) {
            // set the owning side to null (unless already changed)
            if ($materielBeneficiaire->getUser() === $this) {
                $materielBeneficiaire->setUser(null);
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
            $prevision->setUser($this);
        }

        return $this;
    }

    public function removePrevision(Prevision $prevision): self
    {
        if ($this->previsions->removeElement($prevision)) {
            // set the owning side to null (unless already changed)
            if ($prevision->getUser() === $this) {
                $prevision->setUser(null);
            }
        }

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

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
            $decompte->setUser($this);
        }

        return $this;
    }

    public function removeDecompte(Decompte $decompte): self
    {
        if ($this->decomptes->removeElement($decompte)) {
            // set the owning side to null (unless already changed)
            if ($decompte->getUser() === $this) {
                $decompte->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Decompte[]
     */
    public function getDobydecompte(): Collection
    {
        return $this->dobydecompte;
    }

    public function addDobydecompte(Decompte $dobydecompte): self
    {
        if (!$this->dobydecompte->contains($dobydecompte)) {
            $this->dobydecompte[] = $dobydecompte;
            $dobydecompte->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobydecompte(Decompte $dobydecompte): self
    {
        if ($this->dobydecompte->removeElement($dobydecompte)) {
            // set the owning side to null (unless already changed)
            if ($dobydecompte->getDobyuser() === $this) {
                $dobydecompte->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Paie[]
     */
    public function getPaies(): Collection
    {
        return $this->paies;
    }

    public function addPaie(Paie $paie): self
    {
        if (!$this->paies->contains($paie)) {
            $this->paies[] = $paie;
            $paie->setUser($this);
        }

        return $this;
    }

    public function removePaie(Paie $paie): self
    {
        if ($this->paies->removeElement($paie)) {
            // set the owning side to null (unless already changed)
            if ($paie->getUser() === $this) {
                $paie->setUser(null);
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
     * @return Collection|Devis[]
     */
    public function getVabyuser(): Collection
    {
        return $this->vabyuser;
    }

    public function addVabyuser(Devis $vabyuser): self
    {
        if (!$this->vabyuser->contains($vabyuser)) {
            $this->vabyuser[] = $vabyuser;
            $vabyuser->setVabyuser($this);
        }

        return $this;
    }

    public function removeVabyuser(Devis $vabyuser): self
    {
        if ($this->vabyuser->removeElement($vabyuser)) {
            // set the owning side to null (unless already changed)
            if ($vabyuser->getVabyuser() === $this) {
                $vabyuser->setVabyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Bon[]
     */
    public function getVabyuserbons(): Collection
    {
        return $this->vabyuserbons;
    }

    public function addVabyuserbon(Bon $vabyuserbon): self
    {
        if (!$this->vabyuserbons->contains($vabyuserbon)) {
            $this->vabyuserbons[] = $vabyuserbon;
            $vabyuserbon->setVabyuser($this);
        }

        return $this;
    }

    public function removeVabyuserbon(Bon $vabyuserbon): self
    {
        if ($this->vabyuserbons->removeElement($vabyuserbon)) {
            // set the owning side to null (unless already changed)
            if ($vabyuserbon->getVabyuser() === $this) {
                $vabyuserbon->setVabyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Caisse[]
     */
    public function getVabyusercaisses(): Collection
    {
        return $this->vabyusercaisses;
    }

    public function addVabyusercaiss(Caisse $vabyusercaiss): self
    {
        if (!$this->vabyusercaisses->contains($vabyusercaiss)) {
            $this->vabyusercaisses[] = $vabyusercaiss;
            $vabyusercaiss->setVabyuser($this);
        }

        return $this;
    }

    public function removeVabyusercaiss(Caisse $vabyusercaiss): self
    {
        if ($this->vabyusercaisses->removeElement($vabyusercaiss)) {
            // set the owning side to null (unless already changed)
            if ($vabyusercaiss->getVabyuser() === $this) {
                $vabyusercaiss->setVabyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Historique[]
     */
    public function getHistoriques(): Collection
    {
        return $this->historiques;
    }

    public function addHistorique(Historique $historique): self
    {
        if (!$this->historiques->contains($historique)) {
            $this->historiques[] = $historique;
            $historique->setUser($this);
        }

        return $this;
    }

    public function removeHistorique(Historique $historique): self
    {
        if ($this->historiques->removeElement($historique)) {
            // set the owning side to null (unless already changed)
            if ($historique->getUser() === $this) {
                $historique->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Historique[]
     */
    public function getDobyuserhistorique(): Collection
    {
        return $this->dobyuserhistorique;
    }

    public function addDobyuserhistorique(Historique $dobyuserhistorique): self
    {
        if (!$this->dobyuserhistorique->contains($dobyuserhistorique)) {
            $this->dobyuserhistorique[] = $dobyuserhistorique;
            $dobyuserhistorique->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobyuserhistorique(Historique $dobyuserhistorique): self
    {
        if ($this->dobyuserhistorique->removeElement($dobyuserhistorique)) {
            // set the owning side to null (unless already changed)
            if ($dobyuserhistorique->getDobyuser() === $this) {
                $dobyuserhistorique->setDobyuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Personnel[]
     */
    public function getDobypersonnels(): Collection
    {
        return $this->dobypersonnels;
    }

    public function addDobypersonnel(Personnel $dobypersonnel): self
    {
        if (!$this->dobypersonnels->contains($dobypersonnel)) {
            $this->dobypersonnels[] = $dobypersonnel;
            $dobypersonnel->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobypersonnel(Personnel $dobypersonnel): self
    {
        if ($this->dobypersonnels->removeElement($dobypersonnel)) {
            // set the owning side to null (unless already changed)
            if ($dobypersonnel->getDobyuser() === $this) {
                $dobypersonnel->setDobyuser(null);
            }
        }

        return $this;
    }

    public function getPub(): ?string
    {
        return $this->pub;
    }

    public function setPub(?string $pub): self
    {
        $this->pub = $pub;

        return $this;
    }

    /**
     * @return Collection|Beneficiaire[]
     */
    public function getBeneficiaires(): Collection
    {
        return $this->beneficiaires;
    }

    public function addBeneficiaire(Beneficiaire $beneficiaire): self
    {
        if (!$this->beneficiaires->contains($beneficiaire)) {
            $this->beneficiaires[] = $beneficiaire;
            $beneficiaire->setUser($this);
        }

        return $this;
    }

    public function removeBeneficiaire(Beneficiaire $beneficiaire): self
    {
        if ($this->beneficiaires->removeElement($beneficiaire)) {
            // set the owning side to null (unless already changed)
            if ($beneficiaire->getUser() === $this) {
                $beneficiaire->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MatHistorique[]
     */
    public function getMatHistoriques(): Collection
    {
        return $this->matHistoriques;
    }

    public function addMatHistorique(MatHistorique $matHistorique): self
    {
        if (!$this->matHistoriques->contains($matHistorique)) {
            $this->matHistoriques[] = $matHistorique;
            $matHistorique->setUser($this);
        }

        return $this;
    }

    public function removeMatHistorique(MatHistorique $matHistorique): self
    {
        if ($this->matHistoriques->removeElement($matHistorique)) {
            // set the owning side to null (unless already changed)
            if ($matHistorique->getUser() === $this) {
                $matHistorique->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getUserequipes(): Collection
    {
        return $this->userequipes;
    }

    public function addUserequipe(Equipe $userequipe): self
    {
        if (!$this->userequipes->contains($userequipe)) {
            $this->userequipes[] = $userequipe;
            $userequipe->setUser($this);
        }

        return $this;
    }

    public function removeUserequipe(Equipe $userequipe): self
    {
        if ($this->userequipes->removeElement($userequipe)) {
            // set the owning side to null (unless already changed)
            if ($userequipe->getUser() === $this) {
                $userequipe->setUser(null);
            }
        }

        return $this;
    }



    /**
     * @return Collection|Acompte[]
     */
    public function getAcomptes(): Collection
    {
        return $this->acomptes;
    }

    public function addAcompte(Acompte $acompte): self
    {
        if (!$this->acomptes->contains($acompte)) {
            $this->acomptes[] = $acompte;
            $acompte->setUser($this);
        }

        return $this;
    }

    public function removeAcompte(Acompte $acompte): self
    {
        if ($this->acomptes->removeElement($acompte)) {
            // set the owning side to null (unless already changed)
            if ($acompte->getUser() === $this) {
                $acompte->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Service>
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(Service $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services[] = $service;
            $service->setUser($this);
        }

        return $this;
    }

    public function removeService(Service $service): self
    {
        if ($this->services->removeElement($service)) {
            // set the owning side to null (unless already changed)
            if ($service->getUser() === $this) {
                $service->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Todo>
     */
    public function getTodos(): Collection
    {
        return $this->todos;
    }

    public function addTodo(Todo $todo): self
    {
        if (!$this->todos->contains($todo)) {
            $this->todos[] = $todo;
            $todo->setUser($this);
        }

        return $this;
    }

    public function removeTodo(Todo $todo): self
    {
        if ($this->todos->removeElement($todo)) {
            // set the owning side to null (unless already changed)
            if ($todo->getUser() === $this) {
                $todo->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Todo>
     */
    public function getOwnerTodos(): Collection
    {
        return $this->ownerTodos;
    }

    public function addOwnerTodo(Todo $ownerTodo): self
    {
        if (!$this->ownerTodos->contains($ownerTodo)) {
            $this->ownerTodos[] = $ownerTodo;
            $ownerTodo->setOwner($this);
        }

        return $this;
    }

    public function removeOwnerTodo(Todo $ownerTodo): self
    {
        if ($this->ownerTodos->removeElement($ownerTodo)) {
            // set the owning side to null (unless already changed)
            if ($ownerTodo->getOwner() === $this) {
                $ownerTodo->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Todo>
     */
    public function getSenderTodos(): Collection
    {
        return $this->senderTodos;
    }

    public function addSenderTodo(Todo $senderTodo): self
    {
        if (!$this->senderTodos->contains($senderTodo)) {
            $this->senderTodos[] = $senderTodo;
            $senderTodo->setSender($this);
        }

        return $this;
    }

    public function removeSenderTodo(Todo $senderTodo): self
    {
        if ($this->senderTodos->removeElement($senderTodo)) {
            // set the owning side to null (unless already changed)
            if ($senderTodo->getSender() === $this) {
                $senderTodo->setSender(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Chat>
     */
    public function getOwnerchats(): Collection
    {
        return $this->ownerchats;
    }

    public function addOwnerchat(Chat $ownerchat): self
    {
        if (!$this->ownerchats->contains($ownerchat)) {
            $this->ownerchats[] = $ownerchat;
            $ownerchat->setOwner($this);
        }

        return $this;
    }

    public function removeOwnerchat(Chat $ownerchat): self
    {
        if ($this->ownerchats->removeElement($ownerchat)) {
            // set the owning side to null (unless already changed)
            if ($ownerchat->getOwner() === $this) {
                $ownerchat->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Chat>
     */
    public function getReceiverchats(): Collection
    {
        return $this->receiverchats;
    }

    public function addReceiverchat(Chat $receiverchat): self
    {
        if (!$this->receiverchats->contains($receiverchat)) {
            $this->receiverchats[] = $receiverchat;
            $receiverchat->setReceiver($this);
        }

        return $this;
    }

    public function removeReceiverchat(Chat $receiverchat): self
    {
        if ($this->receiverchats->removeElement($receiverchat)) {
            // set the owning side to null (unless already changed)
            if ($receiverchat->getReceiver() === $this) {
                $receiverchat->setReceiver(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Chat>
     */
    public function getUserchats(): Collection
    {
        return $this->userchats;
    }

    public function addUserchat(Chat $userchat): self
    {
        if (!$this->userchats->contains($userchat)) {
            $this->userchats[] = $userchat;
            $userchat->setUser($this);
        }

        return $this;
    }

    public function removeUserchat(Chat $userchat): self
    {
        if ($this->userchats->removeElement($userchat)) {
            // set the owning side to null (unless already changed)
            if ($userchat->getUser() === $this) {
                $userchat->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Section>
     */
    public function getSections(): Collection
    {
        return $this->sections;
    }

    public function addSection(Section $section): self
    {
        if (!$this->sections->contains($section)) {
            $this->sections[] = $section;
            $section->setUser($this);
        }

        return $this;
    }

    public function removeSection(Section $section): self
    {
        if ($this->sections->removeElement($section)) {
            // set the owning side to null (unless already changed)
            if ($section->getUser() === $this) {
                $section->setUser(null);
            }
        }

        return $this;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis->add($devi);
            $devi->setUser($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getUser() === $this) {
                $devi->setUser(null);
            }
        }

        return $this;
    }

    public function addCaiss(Caisse $caiss): self
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses->add($caiss);
            $caiss->setUser($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getUser() === $this) {
                $caiss->setUser(null);
            }
        }

        return $this;
    }

    public function addTach(Tache $tach): self
    {
        if (!$this->taches->contains($tach)) {
            $this->taches->add($tach);
            $tach->setUser($this);
        }

        return $this;
    }

    public function removeTach(Tache $tach): self
    {
        if ($this->taches->removeElement($tach)) {
            // set the owning side to null (unless already changed)
            if ($tach->getUser() === $this) {
                $tach->setUser(null);
            }
        }

        return $this;
    }

    public function addDobycaiss(Caisse $dobycaiss): self
    {
        if (!$this->dobycaisses->contains($dobycaiss)) {
            $this->dobycaisses->add($dobycaiss);
            $dobycaiss->setDobyuser($this);
        }

        return $this;
    }

    public function addDobydevi(Devis $dobydevi): self
    {
        if (!$this->dobydevis->contains($dobydevi)) {
            $this->dobydevis->add($dobydevi);
            $dobydevi->setDobyuser($this);
        }

        return $this;
    }

    public function removeDobydevi(Devis $dobydevi): self
    {
        if ($this->dobydevis->removeElement($dobydevi)) {
            // set the owning side to null (unless already changed)
            if ($dobydevi->getDobyuser() === $this) {
                $dobydevi->setDobyuser(null);
            }
        }

        return $this;
    }

    public function removeMaterielBeneficiaire(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if ($this->materielBeneficiaires->removeElement($materielBeneficiaire)) {
            // set the owning side to null (unless already changed)
            if ($materielBeneficiaire->getUser() === $this) {
                $materielBeneficiaire->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Alerte>
     */
    public function getAlertes(): Collection
    {
        return $this->alertes;
    }

    public function addAlerte(Alerte $alerte): self
    {
        if (!$this->alertes->contains($alerte)) {
            $this->alertes[] = $alerte;
            $alerte->setUser($this);
        }

        return $this;
    }

    public function removeAlerte(Alerte $alerte): self
    {
        if ($this->alertes->removeElement($alerte)) {
            // set the owning side to null (unless already changed)
            if ($alerte->getUser() === $this) {
                $alerte->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Alerte>
     */
    public function getOwnerlertes(): Collection
    {
        return $this->ownerlertes;
    }

    public function addOwnerlerte(Alerte $ownerlerte): self
    {
        if (!$this->ownerlertes->contains($ownerlerte)) {
            $this->ownerlertes[] = $ownerlerte;
            $ownerlerte->setOwner($this);
        }

        return $this;
    }

    public function removeOwnerlerte(Alerte $ownerlerte): self
    {
        if ($this->ownerlertes->removeElement($ownerlerte)) {
            // set the owning side to null (unless already changed)
            if ($ownerlerte->getOwner() === $this) {
                $ownerlerte->setOwner(null);
            }
        }

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }


    /**
     * @return Collection<int, Todo>
     */
    public function getSenderMessage(): Collection
    {
        return $this->sendermessages;
    }

    public function addSenderMessage(Message $sendermessage): self
    {
        if (!$this->sendermessages->contains($sendermessage)) {
            $this->sendermessages[] = $sendermessage;
            $sendermessage->setSender($this);
        }
        return $this;
    }

    public function removeSenderMessage(Message $sendermessage): self
    {
        if ($this->sendermessages->removeElement($sendermessage)) {
            // set the owning side to null (unless already changed)
            if ($sendermessage->getSender() === $this) {
                $sendermessage->setSender(null);
            }
        }

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(?string $activite): static
    {
        $this->activite = $activite;

        return $this;
    }


    /**
     * @return Collection
     */
    public function getFiches(): Collection
    {
        return $this->fiches;
    }
    public function addFiche(Fiche $fiche): self
    {
        if (!$this->fiches->contains($fiche)) {
            $this->fiches[] = $fiche;
            $fiche->setUser($this);
        }

        return $this;
    }
    public function removeFiche(Fiche $fiche): self
    {
        if ($this->fiches->contains($fiche)) {
            $this->fiches->removeElement($fiche);
            // set the owning side to null (unless already changed)
            if ($fiche->getUser() === $this) {
                $fiche->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getJournaliers(): Collection
    {
        return $this->journaliers;
    }
    public function addJournalier(Journalier $journalier): self
    {
        if (!$this->journaliers->contains($journalier)) {
            $this->journaliers[] = $journalier;
            $journalier->setUser($this);
        }

        return $this;
    }
    public function removeJournalier(Journalier $journalier): self
    {
        if ($this->journaliers->contains($journalier)) {
            $this->fiches->removeElement($journalier);
            // set the owning side to null (unless already changed)
            if ($journalier->getUser() === $this) {
                $journalier->setUser(null);
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
            $exercice->setUser($this);
        }

        return $this;
    }

    public function removeExercice(Exercices $exercice): static
    {
        if ($this->exercices->removeElement($exercice)) {
            // set the owning side to null (unless already changed)
            if ($exercice->getUser() === $this) {
                $exercice->setUser(null);
            }
        }

        return $this;
    }

    public function eraseCredentials(): void
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * @return Collection<int, ChatBesoin>
     */
    public function getChatBesoins(): Collection
    {
        return $this->chatBesoins;
    }

    public function addChatBesoin(ChatBesoin $chatBesoin): static
    {
        if (!$this->chatBesoins->contains($chatBesoin)) {
            $this->chatBesoins->add($chatBesoin);
            $chatBesoin->setUser($this);
        }

        return $this;
    }

    public function removeChatBesoin(ChatBesoin $chatBesoin): static
    {
        if ($this->chatBesoins->removeElement($chatBesoin)) {
            // set the owning side to null (unless already changed)
            if ($chatBesoin->getUser() === $this) {
                $chatBesoin->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ChatBesoin>
     */
    public function getChatSenderBesoins(): Collection
    {
        return $this->chatSenderBesoins;
    }
    public function addChatSenderBesoin(ChatBesoin $chatSenderBesoin): static
    {
        if (!$this->chatSenderBesoins->contains($chatSenderBesoin)) {
            $this->chatSenderBesoins->add($chatSenderBesoin);
            $chatSenderBesoin->setSender($this);
        }

        return $this;
    }
    public function removeChatSenderBesoin(ChatBesoin $chatSenderBesoin): static
    {
        if ($this->chatSenderBesoins->removeElement($chatSenderBesoin)) {
            // set the owning side to null (unless already changed)
            if ($chatSenderBesoin->getSender() === $this) {
                $chatSenderBesoin->setSender(null);
            }
        }

        return $this;
    }

    public function getThemes(): ?string
    {
        return $this->themes;
    }
    public function setThemes(string $themes): static
    {
        $this->themes = $themes;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }
    public function setLangue(string $langue): static
    {
        $this->langue = $langue;

        return $this;
    }



}
