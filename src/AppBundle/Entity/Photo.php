<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRepository")
 */
class Photo
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
     * @ORM\Column(name="nom_photo", type="string", length=255)
     */
    private $nomPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_photo", type="string", length=255)
     */
    private $commentairePhoto;


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
     * Set nomPhoto
     *
     * @param string $nomPhoto
     *
     * @return Photo
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->nomPhoto = $nomPhoto;

        return $this;
    }

    /**
     * Get nomPhoto
     *
     * @return string
     */
    public function getNomPhoto()
    {
        return $this->nomPhoto;
    }

    /**
     * Set commentairePhoto
     *
     * @param string $commentairePhoto
     *
     * @return Photo
     */
    public function setCommentairePhoto($commentairePhoto)
    {
        $this->commentairePhoto = $commentairePhoto;

        return $this;
    }

    /**
     * Get commentairePhoto
     *
     * @return string
     */
    public function getCommentairePhoto()
    {
        return $this->commentairePhoto;
    }
}

