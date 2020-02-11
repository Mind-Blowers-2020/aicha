<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\categorieRepository")
 */
class categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcat", type="integer")
     * @ORM\Id


     */
    private $idcat;

    /**
     * @return int
     */
    public function getIdcat()
    {
        return $this->idcat;
    }

    /**
     * @param int $idcat
     */
    public function setIdcat($idcat)
    {
        $this->idcat = $idcat;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nomcat", type="string", length=255)
     */
    private $nomcat;


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
     * Set nomcat
     *
     * @param string $nomcat
     *
     * @return categorie
     */
    public function setNomcat($nomcat)
    {
        $this->nomcat = $nomcat;

        return $this;
    }

    /**
     * Get nomcat
     *
     * @return string
     */
    public function getNomcat()
    {
        return $this->nomcat;
    }
    public function __toString()
    {
        return $this->nomcat;
    }
}

