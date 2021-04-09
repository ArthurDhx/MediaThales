<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutEnregistrement
 *
 * @ORM\Table(name="statut_enregistrement")
 * @ORM\Entity
 */
class StatutEnregistrement
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


}
