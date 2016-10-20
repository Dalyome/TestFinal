<?php

namespace Mike\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MikeTwigBundle:Default:index.html.twig');
    }
}
