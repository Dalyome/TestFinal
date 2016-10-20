<?php

namespace Mike\CRUDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MikeCRUDBundle:Default:index.html.twig');
    }
}
