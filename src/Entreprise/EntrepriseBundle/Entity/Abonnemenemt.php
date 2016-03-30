<?php

namespace Entreprise\EntrepriseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnemenemt
 *
 * @ORM\Table(name="abonnemenemt")
 * @ORM\Entity(repositoryClass="Entreprise\EntrepriseBundle\Repository\AbonnemenemtRepository")
 */
class Abonnemenemt
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
