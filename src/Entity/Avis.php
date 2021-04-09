<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="IDX_8F91ABF0FB88E14F", columns={"utilisateur_id"}), @ORM\Index(name="IDX_8F91ABF07294869C", columns={"article_id"})})
 * @ORM\Entity
 */
class Avis
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
     * @ORM\Column(name="texte", type="text", length=0, nullable=true)
     */
    private $texte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $note;

    /**
     * @var bool
     *
     * @ORM\Column(name="signale", type="boolean", nullable=false)
     */
    private $signale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur;


}
