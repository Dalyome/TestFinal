<?php

namespace Mike\RacineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MikeRacineBundle:Default:index.html.twig');
    }
}
