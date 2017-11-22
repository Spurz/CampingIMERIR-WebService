<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diaporama
 *
 * @ORM\Table(name="diaporama")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiaporamaRepository")
 */
class Diaporama
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
     * @ORM\Column(name="nom_diapo", type="string", length=255)
     */
    private $nomDiapo;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_diapo", type="string", length=255)
     */
    private $commentaireDiapo;


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
     * Set nomDiapo
     *
     * @param string $nomDiapo
     *
     * @return Diaporama
     */
    public function setNomDiapo($nomDiapo)
    {
        $this->nomDiapo = $nomDiapo;

        return $this;
    }

    /**
     * Get nomDiapo
     *
     * @return string
     */
    public function getNomDiapo()
    {
        return $this->nomDiapo;
    }

    /**
     * Set commentaireDiapo
     *
     * @param string $commentaireDiapo
     *
     * @return Diaporama
     */
    public function setCommentaireDiapo($commentaireDiapo)
    {
        $this->commentaireDiapo = $commentaireDiapo;

        return $this;
    }

    /**
     * Get commentaireDiapo
     *
     * @return string
     */
    public function getCommentaireDiapo()
    {
        return $this->commentaireDiapo;
    }
}

