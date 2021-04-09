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


}
