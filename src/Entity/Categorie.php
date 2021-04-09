<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDureeEmpruntMax(): ?int
    {
        return $this->dureeEmpruntMax;
    }

    public function setDureeEmpruntMax(int $dureeEmpruntMax): self
    {
        $this->dureeEmpruntMax = $dureeEmpruntMax;

        return $this;
    }

    public function getDureeEmpruntMaxNouveaute(): ?int
    {
        return $this->dureeEmpruntMaxNouveaute;
    }

    public function setDureeEmpruntMaxNouveaute(int $dureeEmpruntMaxNouveaute): self
    {
        $this->dureeEmpruntMaxNouveaute = $dureeEmpruntMaxNouveaute;

        return $this;
    }

    public function getNbEmpruntMax(): ?int
    {
        return $this->nbEmpruntMax;
    }

    public function setNbEmpruntMax(int $nbEmpruntMax): self
    {
        $this->nbEmpruntMax = $nbEmpruntMax;

        return $this;
    }

    public function getNbEmpruntMaxNouveaute(): ?int
    {
        return $this->nbEmpruntMaxNouveaute;
    }

    public function setNbEmpruntMaxNouveaute(int $nbEmpruntMaxNouveaute): self
    {
        $this->nbEmpruntMaxNouveaute = $nbEmpruntMaxNouveaute;

        return $this;
    }

    public function getDureeNouveaute(): ?int
    {
        return $this->dureeNouveaute;
    }

    public function setDureeNouveaute(int $dureeNouveaute): self
    {
        $this->dureeNouveaute = $dureeNouveaute;

        return $this;
    }

    public function getMontantVenteDefaut(): ?string
    {
        return $this->montantVenteDefaut;
    }

    public function setMontantVenteDefaut(string $montantVenteDefaut): self
    {
        $this->montantVenteDefaut = $montantVenteDefaut;

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getGenre(): Collection
    {
        return $this->genre;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->genre->contains($genre)) {
            $this->genre[] = $genre;
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->genre->removeElement($genre);

        return $this;
    }

    /**
     * @return Collection|Rubrique[]
     */
    public function getRubrique(): Collection
    {
        return $this->rubrique;
    }

    public function addRubrique(Rubrique $rubrique): self
    {
        if (!$this->rubrique->contains($rubrique)) {
            $this->rubrique[] = $rubrique;
        }

        return $this;
    }

    public function removeRubrique(Rubrique $rubrique): self
    {
        $this->rubrique->removeElement($rubrique);

        return $this;
    }

}
