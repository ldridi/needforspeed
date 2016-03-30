<?php

namespace Entreprise\EntrepriseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris")
 * @ORM\Entity(repositoryClass="Entreprise\EntrepriseBundle\Repository\FavorisRepository")
 */
class Favoris
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_favoris", type="date")
     */
    private $dateFavoris;


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
     * Set dateFavoris
     *
     * @param \DateTime $dateFavoris
     * @return Favoris
     */
    public function setDateFavoris($dateFavoris)
    {
        $this->dateFavoris = $dateFavoris;

        return $this;
    }

    /**
     * Get dateFavoris
     *
     * @return \DateTime 
     */
    public function getDateFavoris()
    {
        return $this->dateFavoris;
    }
}
