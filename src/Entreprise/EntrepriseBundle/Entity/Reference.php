<?php

namespace Entreprise\EntrepriseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reference
 *
 * @ORM\Table(name="reference")
 * @ORM\Entity(repositoryClass="Entreprise\EntrepriseBundle\Repository\ReferenceRepository")
 */
class Reference
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
     * @ORM\Column(name="titre_reference", type="string", length=255)
     */
    private $titreReference;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reference", type="text")
     */
    private $descriptionReference;

    /**
     * @var string
     *
     * @ORM\Column(name="site_reference", type="string", length=255)
     */
    private $siteReference;


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
     * Set titreReference
     *
     * @param string $titreReference
     * @return Reference
     */
    public function setTitreReference($titreReference)
    {
        $this->titreReference = $titreReference;

        return $this;
    }

    /**
     * Get titreReference
     *
     * @return string 
     */
    public function getTitreReference()
    {
        return $this->titreReference;
    }

    /**
     * Set descriptionReference
     *
     * @param string $descriptionReference
     * @return Reference
     */
    public function setDescriptionReference($descriptionReference)
    {
        $this->descriptionReference = $descriptionReference;

        return $this;
    }

    /**
     * Get descriptionReference
     *
     * @return string 
     */
    public function getDescriptionReference()
    {
        return $this->descriptionReference;
    }

    /**
     * Set siteReference
     *
     * @param string $siteReference
     * @return Reference
     */
    public function setSiteReference($siteReference)
    {
        $this->siteReference = $siteReference;

        return $this;
    }

    /**
     * Get siteReference
     *
     * @return string 
     */
    public function getSiteReference()
    {
        return $this->siteReference;
    }
}
