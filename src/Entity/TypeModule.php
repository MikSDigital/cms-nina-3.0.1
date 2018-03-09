<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeModule
 *
 * @ORM\Entity(repositoryClass="App\Repository\TypeModuleRepository")
 */
class TypeModule
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
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Module", mappedBy="type")
     */
    private $modules;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Champ", inversedBy="typesModules", cascade={"persist"})
     */
    private $champs;

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
     * @return TypeModule
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
     * Set champs
     *
     * @param array $champs
     *
     * @return TypeModule
     */
    public function setChamps($champs)
    {
        $this->champs = $champs;
    
        return $this;
    }

    /**
     * Get champs
     *
     * @return array
     */
    public function getChamps()
    {
        return $this->champs;
    }


    /**
     * Add module
     *
     * @param \App\Entity\Module $module
     *
     * @return TypeModule
     */
    public function addType(\App\Entity\Module $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \App\Entity\Module $module
     */
    public function removeType(\App\Entity\Module $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->champs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add champ
     *
     * @param \App\Entity\Champ $champ
     *
     * @return TypeModule
     */
    public function addChamp(\App\Entity\Champ $champ)
    {
        $this->champs[] = $champ;
    
        return $this;
    }

    /**
     * Remove champ
     *
     * @param \App\Entity\Champ $champ
     */
    public function removeChamp(\App\Entity\Champ $champ)
    {
        $this->champs->removeElement($champ);
    }
}
