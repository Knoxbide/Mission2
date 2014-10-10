<?php

namespace Acme\MissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * profClasse
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Classe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

   
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\OneToMany(targetEntity="Eleve", mappedBy="classe")
     */
    private $eleves;
    
    /**
     * @ORM\ManyToMany(targetEntity="Prof", inversedBy="classes")
     *
     */
    private $profs;
  
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Classe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add eleves
     *
     * @param \Acme\MissionBundle\Entity\Eleve $eleves
     * @return Classe
     */
    public function addEleve(\Acme\MissionBundle\Entity\Eleve $eleves)
    {
        $this->eleves[] = $eleves;

        return $this;
    }

    /**
     * Remove eleves
     *
     * @param \Acme\MissionBundle\Entity\Eleve $eleves
     */
    public function removeEleve(\Acme\MissionBundle\Entity\Eleve $eleves)
    {
        $this->eleves->removeElement($eleves);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * Add profs
     *
     * @param \Acme\MissionBundle\Entity\Prof $profs
     * @return Classe
     */
    public function addProf(\Acme\MissionBundle\Entity\Prof $profs)
    {
        $this->profs[] = $profs;

        return $this;
    }

    /**
     * Remove profs
     *
     * @param \Acme\MissionBundle\Entity\Prof $profs
     */
    public function removeProf(\Acme\MissionBundle\Entity\Prof $profs)
    {
        $this->profs->removeElement($profs);
    }

    /**
     * Get profs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfs()
    {
        return $this->profs;
    }
}
