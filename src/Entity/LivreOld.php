<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LivreOld
 *
 * @ORM\Table(name="livre_old")
 * @ORM\Entity
 */
class LivreOld
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
     * @ORM\Column(name="code_article", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="date_achat", type="string", length=255, nullable=true)
     */
    private $dateAchat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_achat", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $prixAchat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sortie", type="string", length=255, nullable=true)
     */
    private $sortie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_sortie", type="integer", nullable=true)
     */
    private $nbSortie;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modif", type="date", nullable=true)
     */
    private $dateModif;


}
