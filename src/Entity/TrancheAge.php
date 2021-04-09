<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrancheAge
 *
 * @ORM\Table(name="tranche_age")
 * @ORM\Entity
 */
class TrancheAge
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
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age_min", type="integer", nullable=true)
     */
    private $ageMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age_max", type="integer", nullable=true)
     */
    private $ageMax;

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

    public function getAgeMin(): ?int
    {
        return $this->ageMin;
    }

    public function setAgeMin(?int $ageMin): self
    {
        $this->ageMin = $ageMin;

        return $this;
    }

    public function getAgeMax(): ?int
    {
        return $this->ageMax;
    }

    public function setAgeMax(?int $ageMax): self
    {
        $this->ageMax = $ageMax;

        return $this;
    }


}
