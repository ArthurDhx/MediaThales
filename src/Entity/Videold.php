<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Videold
 *
 * @ORM\Table(name="videold")
 * @ORM\Entity
 */
class Videold
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
     * @ORM\Column(name="code_theque", type="string", length=1, nullable=true)
     */
    private $codeTheque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_article", type="string", length=255, nullable=true)
     */
    private $codeArticle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gencode", type="string", length=255, nullable=true)
     */
    private $gencode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_auteur", type="string", length=255, nullable=true)
     */
    private $nomAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_auteur", type="string", length=255, nullable=true)
     */
    private $prenomAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="support", type="string", length=255, nullable=true)
     */
    private $support;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_achat", type="date", nullable=true)
     */
    private $dateAchat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_achat", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $prixAchat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sortie", type="string", length=255, nullable=true)
     */
    private $sortie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=true)
     */
    private $tag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_etat", type="string", length=255, nullable=true)
     */
    private $codeEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_retrait", type="date", nullable=true)
     */
    private $dateRetrait;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_sortie", type="integer", nullable=true)
     */
    private $nbSortie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeTheque(): ?string
    {
        return $this->codeTheque;
    }

    public function setCodeTheque(?string $codeTheque): self
    {
        $this->codeTheque = $codeTheque;

        return $this;
    }

    public function getCodeArticle(): ?string
    {
        return $this->codeArticle;
    }

    public function setCodeArticle(?string $codeArticle): self
    {
        $this->codeArticle = $codeArticle;

        return $this;
    }

    public function getGencode(): ?string
    {
        return $this->gencode;
    }

    public function setGencode(?string $gencode): self
    {
        $this->gencode = $gencode;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNomAuteur(): ?string
    {
        return $this->nomAuteur;
    }

    public function setNomAuteur(?string $nomAuteur): self
    {
        $this->nomAuteur = $nomAuteur;

        return $this;
    }

    public function getPrenomAuteur(): ?string
    {
        return $this->prenomAuteur;
    }

    public function setPrenomAuteur(?string $prenomAuteur): self
    {
        $this->prenomAuteur = $prenomAuteur;

        return $this;
    }

    public function getSupport(): ?string
    {
        return $this->support;
    }

    public function setSupport(?string $support): self
    {
        $this->support = $support;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getPrixAchat(): ?string
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(?string $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getSortie(): ?string
    {
        return $this->sortie;
    }

    public function setSortie(?string $sortie): self
    {
        $this->sortie = $sortie;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getCodeEtat(): ?string
    {
        return $this->codeEtat;
    }

    public function setCodeEtat(?string $codeEtat): self
    {
        $this->codeEtat = $codeEtat;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(?\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getNbSortie(): ?int
    {
        return $this->nbSortie;
    }

    public function setNbSortie(?int $nbSortie): self
    {
        $this->nbSortie = $nbSortie;

        return $this;
    }


}
