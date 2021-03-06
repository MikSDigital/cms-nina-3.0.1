<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Entity(repositoryClass="App\Repository\ConfigurationRepository")
 */
class Configuration
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
     * @ORM\Column(name="url", type="text")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="text")
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="emailContact", type="string", length=255)
     */
    private $emailContact;

    /**
     * @var string
     *
     * @ORM\Column(name="emailMaintenance", type="string", length=255)
     */
    private $emailMaintenance;

    /**
     * @var string
     *
     * @ORM\Column(name="emailNewsletter", type="string", length=255)
     */
    private $emailNewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="analytics", type="text")
     */
    private $analytics;

    /**
     * @var string
     *
     * @ORM\Column(name="editeur", type="string", length=255)
     */
    private $editeur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Langue")
     */
    private $langueDefaut;

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
     * Set url
     *
     * @param string $url
     *
     * @return Configuration
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Configuration
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Configuration
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
     * Set emailContact
     *
     * @param string $emailContact
     *
     * @return Configuration
     */
    public function setEmailContact($emailContact)
    {
        $this->emailContact = $emailContact;

        return $this;
    }

    /**
     * Get emailContact
     *
     * @return string
     */
    public function getEmailContact()
    {
        return $this->emailContact;
    }

    /**
     * Set emailMaintenance
     *
     * @param string $emailMaintenance
     *
     * @return Configuration
     */
    public function setEmailMaintenance($emailMaintenance)
    {
        $this->emailMaintenance = $emailMaintenance;

        return $this;
    }

    /**
     * Get emailMaintenance
     *
     * @return string
     */
    public function getEmailMaintenance()
    {
        return $this->emailMaintenance;
    }

    /**
     * Set emailNewsletter
     *
     * @param string $emailNewsletter
     *
     * @return Configuration
     */
    public function setEmailNewsletter($emailNewsletter)
    {
        $this->emailNewsletter = $emailNewsletter;

        return $this;
    }

    /**
     * Get emailNewsletter
     *
     * @return string
     */
    public function getEmailNewsletter()
    {
        return $this->emailNewsletter;
    }

    /**
     * Set analytics
     *
     * @param string $analytics
     *
     * @return Configuration
     */
    public function setAnalytics($analytics)
    {
        $this->analytics = $analytics;

        return $this;
    }

    /**
     * Get analytics
     *
     * @return string
     */
    public function getAnalytics()
    {
        return $this->analytics;
    }

    /**
     * Set editeur
     *
     * @param string $editeur
     *
     * @return Configuration
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return string
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set langueDefaut
     *
     * @param \App\Entity\Langue $langueDefaut
     *
     * @return Configuration
     */
    public function setLangueDefaut(\App\Entity\Langue $langueDefaut = null)
    {
        $this->langueDefaut = $langueDefaut;
    
        return $this;
    }

    /**
     * Get langueDefaut
     *
     * @return \App\Entity\Langue
     */
    public function getLangueDefaut()
    {
        return $this->langueDefaut;
    }
}
