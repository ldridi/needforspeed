<?php

namespace Epavia\EpaviaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAbonnement
 *
 * @ORM\Table(name="type_abonnement")
 * @ORM\Entity(repositoryClass="Epavia\EpaviaBundle\Repository\TypeAbonnementRepository")
 */
class TypeAbonnement
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
     * @ORM\Column(name="nom_typeAbonnement", type="string", length=255)
     */
    private $nomTypeAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="description_typeAbonnement", type="text")
     */
    private $descriptionTypeAbonnement;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_typeAbonnement", type="float")
     */
    private $prixTypeAbonnement;


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
     * Set nomTypeAbonnement
     *
     * @param string $nomTypeAbonnement
     * @return TypeAbonnement
     */
    public function setNomTypeAbonnement($nomTypeAbonnement)
    {
        $this->nomTypeAbonnement = $nomTypeAbonnement;

        return $this;
    }

    /**
     * Get nomTypeAbonnement
     *
     * @return string 
     */
    public function getNomTypeAbonnement()
    {
        return $this->nomTypeAbonnement;
    }

    /**
     * Set descriptionTypeAbonnement
     *
     * @param string $descriptionTypeAbonnement
     * @return TypeAbonnement
     */
    public function setDescriptionTypeAbonnement($descriptionTypeAbonnement)
    {
        $this->descriptionTypeAbonnement = $descriptionTypeAbonnement;

        return $this;
    }

    /**
     * Get descriptionTypeAbonnement
     *
     * @return string 
     */
    public function getDescriptionTypeAbonnement()
    {
        return $this->descriptionTypeAbonnement;
    }

    /**
     * Set prixTypeAbonnement
     *
     * @param float $prixTypeAbonnement
     * @return TypeAbonnement
     */
    public function setPrixTypeAbonnement($prixTypeAbonnement)
    {
        $this->prixTypeAbonnement = $prixTypeAbonnement;

        return $this;
    }

    /**
     * Get prixTypeAbonnement
     *
     * @return float 
     */
    public function getPrixTypeAbonnement()
    {
        return $this->prixTypeAbonnement;
    }
}
