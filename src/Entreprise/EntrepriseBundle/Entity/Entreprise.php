<?php

namespace Entreprise\EntrepriseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="Entreprise\EntrepriseBundle\Repository\EntrepriseRepository")
 */
class Entreprise
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
     * @ORM\Column(name="raison_social_entreprise", type="string", length=255)
     */
    private $raisonSocialEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="denomination_entreprise", type="string", length=255)
     */
    private $denominationEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation_entreprise", type="text")
     */
    private $presentationEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_entreprise", type="string", length=255)
     */
    private $adresseEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostale_entreprise", type="string", length=255)
     */
    private $codepostaleEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_entreprise", type="string", length=255)
     */
    private $villeEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude_entreprise", type="string", length=255)
     */
    private $longitudeEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude_entreprise", type="string", length=255)
     */
    private $latitudeEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="registre_commerce_entreprise", type="string", length=255)
     */
    private $registreCommerceEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation_entreprise", type="string", length=255)
     */
    private $dateCreationEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="effectif_entreprise", type="string", length=255)
     */
    private $effectifEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="capital_social_entreprise", type="string", length=255)
     */
    private $capitalSocialEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_entreprise", type="string", length=255)
     */
    private $faxEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_entreprise", type="string", length=255)
     */
    private $mobileEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="email_entreprise", type="string", length=255)
     */
    private $emailEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="web_entreprise", type="string", length=255)
     */
    private $webEntreprise;


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
     * Set raisonSocialEntreprise
     *
     * @param string $raisonSocialEntreprise
     * @return Entreprise
     */
    public function setRaisonSocialEntreprise($raisonSocialEntreprise)
    {
        $this->raisonSocialEntreprise = $raisonSocialEntreprise;

        return $this;
    }

    /**
     * Get raisonSocialEntreprise
     *
     * @return string
     */
    public function getRaisonSocialEntreprise()
    {
        return $this->raisonSocialEntreprise;
    }

    /**
     * Set denominationEntreprise
     *
     * @param string $denominationEntreprise
     * @return Entreprise
     */
    public function setDenominationEntreprise($denominationEntreprise)
    {
        $this->denominationEntreprise = $denominationEntreprise;

        return $this;
    }

    /**
     * Get denominationEntreprise
     *
     * @return string
     */
    public function getDenominationEntreprise()
    {
        return $this->denominationEntreprise;
    }

    /**
     * Set presentationEntreprise
     *
     * @param string $presentationEntreprise
     * @return Entreprise
     */
    public function setPresentationEntreprise($presentationEntreprise)
    {
        $this->presentationEntreprise = $presentationEntreprise;

        return $this;
    }

    /**
     * Get presentationEntreprise
     *
     * @return string
     */
    public function getPresentationEntreprise()
    {
        return $this->presentationEntreprise;
    }

    /**
     * Set adresseEntreprise
     *
     * @param string $adresseEntreprise
     * @return Entreprise
     */
    public function setAdresseEntreprise($adresseEntreprise)
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    /**
     * Get adresseEntreprise
     *
     * @return string
     */
    public function getAdresseEntreprise()
    {
        return $this->adresseEntreprise;
    }

    /**
     * Set codepostaleEntreprise
     *
     * @param string $codepostaleEntreprise
     * @return Entreprise
     */
    public function setCodepostaleEntreprise($codepostaleEntreprise)
    {
        $this->codepostaleEntreprise = $codepostaleEntreprise;

        return $this;
    }

    /**
     * Get codepostaleEntreprise
     *
     * @return string
     */
    public function getCodepostaleEntreprise()
    {
        return $this->codepostaleEntreprise;
    }

    /**
     * Set villeEntreprise
     *
     * @param string $villeEntreprise
     * @return Entreprise
     */
    public function setVilleEntreprise($villeEntreprise)
    {
        $this->villeEntreprise = $villeEntreprise;

        return $this;
    }

    /**
     * Get villeEntreprise
     *
     * @return string
     */
    public function getVilleEntreprise()
    {
        return $this->villeEntreprise;
    }

    /**
     * Set longitudeEntreprise
     *
     * @param string $longitudeEntreprise
     * @return Entreprise
     */
    public function setLongitudeEntreprise($longitudeEntreprise)
    {
        $this->longitudeEntreprise = $longitudeEntreprise;

        return $this;
    }

    /**
     * Get longitudeEntreprise
     *
     * @return string
     */
    public function getLongitudeEntreprise()
    {
        return $this->longitudeEntreprise;
    }

    /**
     * Set latitudeEntreprise
     *
     * @param string $latitudeEntreprise
     * @return Entreprise
     */
    public function setLatitudeEntreprise($latitudeEntreprise)
    {
        $this->latitudeEntreprise = $latitudeEntreprise;

        return $this;
    }

    /**
     * Get latitudeEntreprise
     *
     * @return string
     */
    public function getLatitudeEntreprise()
    {
        return $this->latitudeEntreprise;
    }

    /**
     * Set registreCommerceEntreprise
     *
     * @param string $registreCommerceEntreprise
     * @return Entreprise
     */
    public function setRegistreCommerceEntreprise($registreCommerceEntreprise)
    {
        $this->registreCommerceEntreprise = $registreCommerceEntreprise;

        return $this;
    }

    /**
     * Get registreCommerceEntreprise
     *
     * @return string
     */
    public function getRegistreCommerceEntreprise()
    {
        return $this->registreCommerceEntreprise;
    }

    /**
     * Set dateCreationEntreprise
     *
     * @param string $dateCreationEntreprise
     * @return Entreprise
     */
    public function setDateCreationEntreprise($dateCreationEntreprise)
    {
        $this->dateCreationEntreprise = $dateCreationEntreprise;

        return $this;
    }

    /**
     * Get dateCreationEntreprise
     *
     * @return string
     */
    public function getDateCreationEntreprise()
    {
        return $this->dateCreationEntreprise;
    }

    /**
     * Set effectifEntreprise
     *
     * @param string $effectifEntreprise
     * @return Entreprise
     */
    public function setEffectifEntreprise($effectifEntreprise)
    {
        $this->effectifEntreprise = $effectifEntreprise;

        return $this;
    }

    /**
     * Get effectifEntreprise
     *
     * @return string
     */
    public function getEffectifEntreprise()
    {
        return $this->effectifEntreprise;
    }

    /**
     * Set capitalSocialEntreprise
     *
     * @param string $capitalSocialEntreprise
     * @return Entreprise
     */
    public function setCapitalSocialEntreprise($capitalSocialEntreprise)
    {
        $this->capitalSocialEntreprise = $capitalSocialEntreprise;

        return $this;
    }

    /**
     * Get capitalSocialEntreprise
     *
     * @return string
     */
    public function getCapitalSocialEntreprise()
    {
        return $this->capitalSocialEntreprise;
    }

    /**
     * Set faxEntreprise
     *
     * @param string $faxEntreprise
     * @return Entreprise
     */
    public function setFaxEntreprise($faxEntreprise)
    {
        $this->faxEntreprise = $faxEntreprise;

        return $this;
    }

    /**
     * Get faxEntreprise
     *
     * @return string
     */
    public function getFaxEntreprise()
    {
        return $this->faxEntreprise;
    }

    /**
     * Set mobileEntreprise
     *
     * @param string $mobileEntreprise
     * @return Entreprise
     */
    public function setMobileEntreprise($mobileEntreprise)
    {
        $this->mobileEntreprise = $mobileEntreprise;

        return $this;
    }

    /**
     * Get mobileEntreprise
     *
     * @return string
     */
    public function getMobileEntreprise()
    {
        return $this->mobileEntreprise;
    }

    /**
     * Set emailEntreprise
     *
     * @param string $emailEntreprise
     * @return Entreprise
     */
    public function setEmailEntreprise($emailEntreprise)
    {
        $this->emailEntreprise = $emailEntreprise;

        return $this;
    }

    /**
     * Get emailEntreprise
     *
     * @return string
     */
    public function getEmailEntreprise()
    {
        return $this->emailEntreprise;
    }

    /**
     * Set webEntreprise
     *
     * @param string $webEntreprise
     * @return Entreprise
     */
    public function setWebEntreprise($webEntreprise)
    {
        $this->webEntreprise = $webEntreprise;

        return $this;
    }

    /**
     * Get webEntreprise
     *
     * @return string
     */
    public function getWebEntreprise()
    {
        return $this->webEntreprise;
    }
}
