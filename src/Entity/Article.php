<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="IDX_23A0E664296D31F", columns={"genre_id"}), @ORM\Index(name="IDX_23A0E66BCF5E72D", columns={"categorie_id"}), @ORM\Index(name="IDX_23A0E66A43AD6F0", columns={"tranche_age_id"}), @ORM\Index(name="IDX_23A0E66F6203804", columns={"statut_id"})})
 * @ORM\Entity
 */
class Article
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
     * @var string|null
     *
     * @ORM\Column(name="gencode", type="string", length=255, nullable=true)
     */
    private $gencode;

    /**
     * @var string
     *
     * @ORM\Column(name="code_article", type="string", length=20, nullable=false)
     */
    private $codeArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vignette", type="string", length=255, nullable=true)
     */
    private $vignette;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_publication", type="date", nullable=true)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_obtention", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $montantObtention;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_caution", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $montantCaution;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_vente", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $montantVente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="text", length=0, nullable=true)
     */
    private $observation;

    /**
     * @var bool
     *
     * @ORM\Column(name="numerique", type="boolean", nullable=false)
     */
    private $numerique;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     * })
     */
    private $genre;

    /**
     * @var \TrancheAge
     *
     * @ORM\ManyToOne(targetEntity="TrancheAge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tranche_age_id", referencedColumnName="id")
     * })
     */
    private $trancheAge;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     * })
     */
    private $categorie;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statut_id", referencedColumnName="id")
     * })
     */
    private $statut;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entite", inversedBy="article")
     * @ORM\JoinTable(name="article_entite",
     *   joinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="entite_id", referencedColumnName="id")
     *   }
     * )
     */
    private $entite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Rubrique", inversedBy="article")
     * @ORM\JoinTable(name="article_rubrique",
     *   joinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rubrique_id", referencedColumnName="id")
     *   }
     * )
     */
    private $rubrique;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="article")
     * @ORM\JoinTable(name="article_tag",
     *   joinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rubrique = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
