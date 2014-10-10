<?php

namespace Acme\MissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * prof
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Prof
{
    /**
     * @var intege r
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="string", type="string", length=50)
     */
    private $string;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;


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
     * Set string
     *
     * @param string $string
     * @return prof
     */
    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get string
     *
     * @return string 
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return prof
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="Classe", mappedBy="profs")
     */
    private $classes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add classes
     *
     * @param \Acme\MissionBundle\Entity\Classe $classes
     * @return Prof
     */
    public function addClass(\Acme\MissionBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;

        return $this;
    }

    /**
     * Remove classes
     *
     * @param \Acme\MissionBundle\Entity\Classe $classes
     */
    public function removeClass(\Acme\MissionBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
    }
}
