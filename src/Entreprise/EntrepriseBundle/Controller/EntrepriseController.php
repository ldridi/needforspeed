<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EntrepriseController extends Controller
{
    public function profileAction()
    {
        return $this->render('EntrepriseBundle:Entreprise:profile.html.twig');
    }

    public function produitAction()
    {
        return $this->render('EntrepriseBundle:Entreprise:produit.html.twig');
    }

    public function portfolioAction()
    {
        return $this->render('EntrepriseBundle:Entreprise:portfolio.html.twig');
    }

    public function eventsAction()
    {
        return $this->render('EntrepriseBundle:Entreprise:events.html.twig');
    }

    public function blogAction()
    {
        return $this->render('EntrepriseBundle:Entreprise:blog.html.twig');
    }

    public function contactAction()
    {
        return $this->render('EntrepriseBundle:Entreprise:contact.html.twig');
    }
}
