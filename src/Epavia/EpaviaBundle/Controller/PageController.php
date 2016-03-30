<?php

namespace Epavia\EpaviaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function contactAction()
    {
        return $this->render('EpaviaBundle:Page:contact.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('EpaviaBundle:Page:aboutus.html.twig');
    }
}
