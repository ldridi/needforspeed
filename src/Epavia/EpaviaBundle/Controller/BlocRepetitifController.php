<?php

namespace Epavia\EpaviaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlocRepetitifController extends Controller
{
    public function profileEntrepriseAction()
    {
        return $this->render('EpaviaBundle:blocRepetitif:profileEntreprise.html.twig');
    }
}
