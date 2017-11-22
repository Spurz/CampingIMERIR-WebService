<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table(name="visite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisiteRepository")
 */
class Visite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_visite", type="string", length=255)
     */
    private $nomVisite;

    /**
     * @var string
     *
     * @ORM\Column(name="type_visite", type="string", length=255)
     */
    private $typeVisite;

    /**
     * @var string
     *
     * @ORM\Column(name="info_visite", type="string", length=255)
     */
    private $infoVisite;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomVisite
     *
     * @param string $nomVisite
     *
     * @return Visite
     */
    public function setNomVisite($nomVisite)
    {
        $this->nomVisite = $nomVisite;

        return $this;
    }

    /**
     * Get nomVisite
     *
     * @return string
     */
    public function getNomVisite()
    {
        return $this->nomVisite;
    }

    /**
     * Set typeVisite
     *
     * @param string $typeVisite
     *
     * @return Visite
     */
    public function setTypeVisite($typeVisite)
    {
        $this->typeVisite = $typeVisite;

        return $this;
    }

    /**
     * Get typeVisite
     *
     * @return string
     */
    public function getTypeVisite()
    {
        return $this->typeVisite;
    }

    /**
     * Set infoVisite
     *
     * @param string $infoVisite
     *
     * @return Visite
     */
    public function setInfoVisite($infoVisite)
    {
        $this->infoVisite = $infoVisite;

        return $this;
    }

    /**
     * Get infoVisite
     *
     * @return string
     */
    public function getInfoVisite()
    {
        return $this->infoVisite;
    }
}

