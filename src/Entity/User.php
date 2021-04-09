<?php

namespace App\Entity;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modification", type="date", nullable=true)
     */
    private $dateModification;

    /**
     * @var \Fonction
     *
     * @ORM\ManyToOne(targetEntity="Fonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fonction_id", referencedColumnName="id")
     * })
     */
    private $fonction;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
     * })
     */
    private $entreprise;

    /**
     * @var \Doctrine\Common\Collections\Collection
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

}
