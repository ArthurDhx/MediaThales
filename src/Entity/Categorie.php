<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
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
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_emprunt_max", type="integer", nullable=false)
     */
    private $dureeEmpruntMax;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_emprunt_max_nouveaute", type="integer", nullable=false)
     */
    private $dureeEmpruntMaxNouveaute;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_emprunt_max", type="integer", nullable=false)
     */
    private $nbEmpruntMax;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_emprunt_max_nouveaute", type="integer", nullable=false)
     */
    private $nbEmpruntMaxNouveaute;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_nouveaute", type="integer", nullable=false)
     */
    private $dureeNouveaute;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_vente_defaut", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $montantVenteDefaut;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="categorie")
     * @ORM\JoinTable(name="categorie_genre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     *   }
     * )
     */
    private $genre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Rubrique", inversedBy="categorie")
     * @ORM\JoinTable(name="categorie_rubrique",
     *   joinColumns={
     *     @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rubrique_id", referencedColumnName="id")
     *   }
     * )
     */
    private $rubrique;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->genre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rubrique = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
