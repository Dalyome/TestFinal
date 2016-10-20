<?php

namespace Mike\CRUDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('MikeCRUDBundle:Article')->findAll();

        return $this->render('MikeCRUDBundle:Default:index.html.twig', array(
            'articles' => $articles,
        ));
    }
}
