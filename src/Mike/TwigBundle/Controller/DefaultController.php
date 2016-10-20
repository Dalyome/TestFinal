<?php

namespace Mike\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MikeTwigBundle:Default:index.html.twig');
    }
    public function conditionAction()
    {
        return $this->render('MikeTwigBundle:Default:condition.html.twig');
    }
    public function boucleAction($chiffre,$chiffre2)
    {
        // pour passer nos variables get au template, on doit utiliser un tableau associatif
        return $this->render('MikeTwigBundle:Default:boucle.html.twig',
                array("nb1"=>$chiffre,"nb2"=>$chiffre2));
    }
}
