<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champ
 *
 * @ORM\Entity(repositoryClass="App\Repository\ChampRepository")
 */
class Champ
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TypeModule", mappedBy="champs")
     */
    private $typesModules;

    public function __toString()
    {
        return $this->getNom();
    }

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Champ
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
     * Set type
     *
     * @param string $type
     *
     * @return Champ
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typesModules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add typeModule
     *
     * @param \App\Entity\TypeModule $typeModule
     *
     * @return Champ
     */
    public function addTypeModule(\App\Entity\TypeModule $typeModule)
    {
        $this->typesModules[] = $typeModule;
    
        return $this;
    }

    /**
     * Remove typeModule
     *
     * @param \App\Entity\TypeModule $typeModule
     */
    public function removeTypeModule(\App\Entity\TypeModule $typeModule)
    {
        $this->typesModules->removeElement($typeModule);
    }

    /**
     * Get typesModules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypesModules()
    {
        return $this->typesModules;
    }
}
