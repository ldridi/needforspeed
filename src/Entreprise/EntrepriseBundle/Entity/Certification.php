<?php

namespace Entreprise\EntrepriseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certification
 *
 * @ORM\Table(name="certification")
 * @ORM\Entity(repositoryClass="Entreprise\EntrepriseBundle\Repository\CertificationRepository")
 */
class Certification
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
     * @ORM\Column(name="nom_certification", type="string", length=255)
     */
    private $nomCertification;

    /**
     * @var string
     *
     * @ORM\Column(name="description_certification", type="string", length=255)
     */
    private $descriptionCertification;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_certification", type="string", length=255)
     */
    private $lienCertification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_obtention_certification", type="date")
     */
    private $dateObtentionCertification;


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
     * Set nomCertification
     *
     * @param string $nomCertification
     * @return Certification
     */
    public function setNomCertification($nomCertification)
    {
        $this->nomCertification = $nomCertification;

        return $this;
    }

    /**
     * Get nomCertification
     *
     * @return string 
     */
    public function getNomCertification()
    {
        return $this->nomCertification;
    }

    /**
     * Set descriptionCertification
     *
     * @param string $descriptionCertification
     * @return Certification
     */
    public function setDescriptionCertification($descriptionCertification)
    {
        $this->descriptionCertification = $descriptionCertification;

        return $this;
    }

    /**
     * Get descriptionCertification
     *
     * @return string 
     */
    public function getDescriptionCertification()
    {
        return $this->descriptionCertification;
    }

    /**
     * Set lienCertification
     *
     * @param string $lienCertification
     * @return Certification
     */
    public function setLienCertification($lienCertification)
    {
        $this->lienCertification = $lienCertification;

        return $this;
    }

    /**
     * Get lienCertification
     *
     * @return string 
     */
    public function getLienCertification()
    {
        return $this->lienCertification;
    }

    /**
     * Set dateObtentionCertification
     *
     * @param \DateTime $dateObtentionCertification
     * @return Certification
     */
    public function setDateObtentionCertification($dateObtentionCertification)
    {
        $this->dateObtentionCertification = $dateObtentionCertification;

        return $this;
    }

    /**
     * Get dateObtentionCertification
     *
     * @return \DateTime 
     */
    public function getDateObtentionCertification()
    {
        return $this->dateObtentionCertification;
    }
}
