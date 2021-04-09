<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enregistrement
 *
 * @ORM\Table(name="enregistrement", indexes={@ORM\Index(name="IDX_15FA02FEBA1EB09", columns={"statut_enregistrement_id"}), @ORM\Index(name="IDX_15FA02FFB88E14F", columns={"utilisateur_id"}), @ORM\Index(name="IDX_15FA02F7294869C", columns={"article_id"}), @ORM\Index(name="IDX_15FA02FBCB228FB", columns={"type_enregistrement_id"})})
 * @ORM\Entity
 */
class Enregistrement
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
     * @ORM\Column(name="no_commande", type="string", length=50, nullable=false)
     */
    private $noCommande;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_preparation_fini", type="datetime", nullable=true)
     */
    private $datePreparationFini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_enregistrement", type="datetime", nullable=false)
     */
    private $dateEnregistrement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rendu", type="datetime", nullable=true)
     */
    private $dateRendu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rendu_theorique", type="datetime", nullable=false)
     */
    private $dateRenduTheorique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_communication", type="text", length=0, nullable=true)
     */
    private $noteCommunication;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;

    /**
     * @var \TypeEnregistrement
     *
     * @ORM\ManyToOne(targetEntity="TypeEnregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_enregistrement_id", referencedColumnName="id")
     * })
     */
    private $typeEnregistrement;

    /**
     * @var \StatutEnregistrement
     *
     * @ORM\ManyToOne(targetEntity="StatutEnregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statut_enregistrement_id", referencedColumnName="id")
     * })
     */
    private $statutEnregistrement;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="enregistrement")
     * @ORM\JoinTable(name="enregistrement_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="enregistrement_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
