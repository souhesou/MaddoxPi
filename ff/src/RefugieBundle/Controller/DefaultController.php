<?php

namespace RefugieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RefugieBundle:Default:index.html.twig');
    }
}
