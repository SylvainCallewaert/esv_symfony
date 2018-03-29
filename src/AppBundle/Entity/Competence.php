<?php

namespace AppBundle\Entity;

/**
 * Competence
 */
class Competence
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $designation;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Competence
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Competence
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stagiaires;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stagiaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add stagiaire
     *
     * @param \AppBundle\Entity\Stagiaire $stagiaire
     *
     * @return Competence
     */
    public function addStagiaire(\AppBundle\Entity\Stagiaire $stagiaire)
    {
        $this->stagiaires[] = $stagiaire;

        return $this;
    }

    /**
     * Remove stagiaire
     *
     * @param \AppBundle\Entity\Stagiaire $stagiaire
     */
    public function removeStagiaire(\AppBundle\Entity\Stagiaire $stagiaire)
    {
        $this->stagiaires->removeElement($stagiaire);
    }

    /**
     * Get stagiaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStagiaires()
    {
        return $this->stagiaires;
    }
}
