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


}
