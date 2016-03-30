<?php

namespace Entreprise\EntrepriseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="Entreprise\EntrepriseBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\ManyToOne(targetEntity="Entreprise\EntrepriseBundle\Entity\Entreprise", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $entreprise;

    /**
     * @ORM\ManyToOne(targetEntity="Epavia\EpaviaBundle\Entity\Secteur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $secteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit", type="string", length=255)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="description_produit", type="text")
     */
    private $descriptionProduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_produit", type="date")
     */
    private $dateProduit;


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
     * Set nomProduit
     *
     * @param string $nomProduit
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string 
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set descriptionProduit
     *
     * @param string $descriptionProduit
     * @return Produit
     */
    public function setDescriptionProduit($descriptionProduit)
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    /**
     * Get descriptionProduit
     *
     * @return string 
     */
    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }

    /**
     * Set dateProduit
     *
     * @param \DateTime $dateProduit
     * @return Produit
     */
    public function setDateProduit($dateProduit)
    {
        $this->dateProduit = $dateProduit;

        return $this;
    }

    /**
     * Get dateProduit
     *
     * @return \DateTime 
     */
    public function getDateProduit()
    {
        return $this->dateProduit;
    }

    /**
     * Set entreprise
     *
     * @param \Entreprise\EntrepriseBundle\Entity\Entreprise $entreprise
     * @return Produit
     */
    public function setEntreprise(\Entreprise\EntrepriseBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \Entreprise\EntrepriseBundle\Entity\Entreprise 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set secteur
     *
     * @param \Epavia\EpaviaBundle\Entity\Secteur $secteur
     * @return Produit
     */
    public function setSecteur(\Epavia\EpaviaBundle\Entity\Secteur $secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \Epavia\EpaviaBundle\Entity\Secteur 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }
}
