<?php

namespace Epavia\EpaviaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EpaviaBundle:Default:index.html.twig');
    }
}
