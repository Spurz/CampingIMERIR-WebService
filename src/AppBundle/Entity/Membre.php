<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MembreRepository")
 */
class Membre
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
     * @ORM\Column(name="nom_membre", type="string", length=255)
     */
    private $nomMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_membre", type="string", length=255)
     */
    private $prenomMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_membre", type="string", length=255)
     */
    private $mailMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_membre", type="string", length=255)
     */
    private $mdpMembre;


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
     * Set nomMembre
     *
     * @param string $nomMembre
     *
     * @return Membre
     */
    public function setNomMembre($nomMembre)
    {
        $this->nomMembre = $nomMembre;

        return $this;
    }

    /**
     * Get nomMembre
     *
     * @return string
     */
    public function getNomMembre()
    {
        return $this->nomMembre;
    }

    /**
     * Set prenomMembre
     *
     * @param string $prenomMembre
     *
     * @return Membre
     */
    public function setPrenomMembre($prenomMembre)
    {
        $this->prenomMembre = $prenomMembre;

        return $this;
    }

    /**
     * Get prenomMembre
     *
     * @return string
     */
    public function getPrenomMembre()
    {
        return $this->prenomMembre;
    }

    /**
     * Set mailMembre
     *
     * @param string $mailMembre
     *
     * @return Membre
     */
    public function setMailMembre($mailMembre)
    {
        $this->mailMembre = $mailMembre;

        return $this;
    }

    /**
     * Get mailMembre
     *
     * @return string
     */
    public function getMailMembre()
    {
        return $this->mailMembre;
    }

    /**
     * Set mdpMembre
     *
     * @param string $mdpMembre
     *
     * @return Membre
     */
    public function setMdpMembre($mdpMembre)
    {
        $this->mdpMembre = $mdpMembre;

        return $this;
    }

    /**
     * Get mdpMembre
     *
     * @return string
     */
    public function getMdpMembre()
    {
        return $this->mdpMembre;
    }
}

