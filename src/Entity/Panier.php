<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="IDX_24CC0DF2BCB228FB", columns={"type_enregistrement_id"}), @ORM\Index(name="IDX_24CC0DF2FB88E14F", columns={"utilisateur_id"}), @ORM\Index(name="IDX_24CC0DF27294869C", columns={"article_id"})})
 * @ORM\Entity
 */
class Panier
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur;


}
