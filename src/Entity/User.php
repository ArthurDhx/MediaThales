<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D6499C598BFA", columns={"email_recup"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649F85E0677", columns={"username"})}, indexes={@ORM\Index(name="IDX_8D93D649A4AEAFEA", columns={"entreprise_id"}), @ORM\Index(name="IDX_8D93D64957889920", columns={"fonction_id"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_perso", type="string", length=255, nullable=true)
     */
    private $emailPerso;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tel_perso", type="integer", nullable=true)
     */
    private $telPerso;

    /**
     * @var json
     *
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=15, nullable=false)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    private $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_perso2", type="string", length=20, nullable=true)
     */
    private $telPerso2;

    /**
     * @var bool
     *
     * @ORM\Column(name="notification_perso", type="boolean", nullable=false)
     */
    private $notificationPerso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_pro", type="string", length=20, nullable=true)
     */
    private $telPro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_pro2", type="string", length=20, nullable=true)
     */
    private $telPro2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_pro", type="string", length=254, nullable=true)
     */
    private $emailPro;

    /**
     * @var bool
     *
     * @ORM\Column(name="notification_pro", type="boolean", nullable=false)
     */
    private $notificationPro;

    /**
     * @var string
     *
     * @ORM\Column(name="email_recup", type="string", length=254, nullable=false)
     */
    private $emailRecup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_rue", type="string", length=255, nullable=true)
     */
    private $adresseRue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_rue_complement", type="string", length=255, nullable=true)
     */
    private $adresseRueComplement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var int|null
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_emprunt", type="boolean", nullable=false)
     */
    private $droitEmprunt;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_achat", type="boolean", nullable=false)
     */
    private $droitAchat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_utilisateur", type="text", length=0, nullable=true)
     */
    private $commentaireUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_staff", type="text", length=0, nullable=true)
     */
    private $commentaireStaff;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="date_modification", type="date", nullable=true)
     */
    private $dateModification;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Fonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fonction_id", referencedColumnName="id")
     * })
     */
    private $fonction;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
     * })
     */
    private $entreprise;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Enregistrement", mappedBy="user")
     */
    private $enregistrement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enregistrement = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmailPerso(): ?string
    {
        return $this->emailPerso;
    }

    public function setEmailPerso(?string $emailPerso): self
    {
        $this->emailPerso = $emailPerso;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getTelPerso(): ?int
    {
        return $this->telPerso;
    }

    public function setTelPerso(?int $telPerso): self
    {
        $this->telPerso = $telPerso;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getTelPerso2(): ?string
    {
        return $this->telPerso2;
    }

    public function setTelPerso2(?string $telPerso2): self
    {
        $this->telPerso2 = $telPerso2;

        return $this;
    }

    public function getNotificationPerso(): ?bool
    {
        return $this->notificationPerso;
    }

    public function setNotificationPerso(bool $notificationPerso): self
    {
        $this->notificationPerso = $notificationPerso;

        return $this;
    }

    public function getTelPro(): ?string
    {
        return $this->telPro;
    }

    public function setTelPro(?string $telPro): self
    {
        $this->telPro = $telPro;

        return $this;
    }

    public function getTelPro2(): ?string
    {
        return $this->telPro2;
    }

    public function setTelPro2(?string $telPro2): self
    {
        $this->telPro2 = $telPro2;

        return $this;
    }

    public function getEmailPro(): ?string
    {
        return $this->emailPro;
    }

    public function setEmailPro(?string $emailPro): self
    {
        $this->emailPro = $emailPro;

        return $this;
    }

    public function getNotificationPro(): ?bool
    {
        return $this->notificationPro;
    }

    public function setNotificationPro(bool $notificationPro): self
    {
        $this->notificationPro = $notificationPro;

        return $this;
    }

    public function getEmailRecup(): ?string
    {
        return $this->emailRecup;
    }

    public function setEmailRecup(string $emailRecup): self
    {
        $this->emailRecup = $emailRecup;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresseRue;
    }

    public function setAdresseRue(?string $adresseRue): self
    {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    public function getAdresseRueComplement(): ?string
    {
        return $this->adresseRueComplement;
    }

    public function setAdresseRueComplement(?string $adresseRueComplement): self
    {
        $this->adresseRueComplement = $adresseRueComplement;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getDroitEmprunt(): ?bool
    {
        return $this->droitEmprunt;
    }

    public function setDroitEmprunt(bool $droitEmprunt): self
    {
        $this->droitEmprunt = $droitEmprunt;

        return $this;
    }

    public function getDroitAchat(): ?bool
    {
        return $this->droitAchat;
    }

    public function setDroitAchat(bool $droitAchat): self
    {
        $this->droitAchat = $droitAchat;

        return $this;
    }

    public function getCommentaireUtilisateur(): ?string
    {
        return $this->commentaireUtilisateur;
    }

    public function setCommentaireUtilisateur(?string $commentaireUtilisateur): self
    {
        $this->commentaireUtilisateur = $commentaireUtilisateur;

        return $this;
    }

    public function getCommentaireStaff(): ?string
    {
        return $this->commentaireStaff;
    }

    public function setCommentaireStaff(?string $commentaireStaff): self
    {
        $this->commentaireStaff = $commentaireStaff;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->dateModification;
    }

    public function setDateModification(?\DateTimeInterface $dateModification): self
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    public function getFonction(): ?Fonction
    {
        return $this->fonction;
    }

    public function setFonction(?Fonction $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * @return Collection|Enregistrement[]
     */
    public function getEnregistrement(): Collection
    {
        return $this->enregistrement;
    }

    public function addEnregistrement(Enregistrement $enregistrement): self
    {
        if (!$this->enregistrement->contains($enregistrement)) {
            $this->enregistrement[] = $enregistrement;
            $enregistrement->addUser($this);
        }

        return $this;
    }

    public function removeEnregistrement(Enregistrement $enregistrement): self
    {
        if ($this->enregistrement->removeElement($enregistrement)) {
            $enregistrement->removeUser($this);
        }

        return $this;
    }

}
