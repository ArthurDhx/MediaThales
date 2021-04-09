<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lien
 *
 * @ORM\Table(name="lien", indexes={@ORM\Index(name="IDX_A532B4B57294869C", columns={"article_id"}), @ORM\Index(name="IDX_A532B4B5C58BACA7", columns={"type_lien_id"})})
 * @ORM\Entity
 */
class Lien
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
     * @ORM\Column(name="adresse", type="string", length=500, nullable=false)
     */
    private $adresse;

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
     * @var \TypeLien
     *
     * @ORM\ManyToOne(targetEntity="TypeLien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_lien_id", referencedColumnName="id")
     * })
     */
    private $typeLien;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getTypeLien(): ?TypeLien
    {
        return $this->typeLien;
    }

    public function setTypeLien(?TypeLien $typeLien): self
    {
        $this->typeLien = $typeLien;

        return $this;
    }


}
