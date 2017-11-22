<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emplacement
 *
 * @ORM\Table(name="emplacement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmplacementRepository")
 */
class Emplacement
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
     * @ORM\Column(name="nom_empla", type="string", length=255)
     */
    private $nomEmpla;

    /**
     * @var string
     *
     * @ORM\Column(name="type_empla", type="string", length=255)
     */
    private $typeEmpla;


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
     * Set nomEmpla
     *
     * @param string $nomEmpla
     *
     * @return Emplacement
     */
    public function setNomEmpla($nomEmpla)
    {
        $this->nomEmpla = $nomEmpla;

        return $this;
    }

    /**
     * Get nomEmpla
     *
     * @return string
     */
    public function getNomEmpla()
    {
        return $this->nomEmpla;
    }

    /**
     * Set typeEmpla
     *
     * @param string $typeEmpla
     *
     * @return Emplacement
     */
    public function setTypeEmpla($typeEmpla)
    {
        $this->typeEmpla = $typeEmpla;

        return $this;
    }

    /**
     * Get typeEmpla
     *
     * @return string
     */
    public function getTypeEmpla()
    {
        return $this->typeEmpla;
    }
}

