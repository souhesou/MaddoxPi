<?php

namespace GcampBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GcampBundle:Default:index.html.twig');
    }
}
