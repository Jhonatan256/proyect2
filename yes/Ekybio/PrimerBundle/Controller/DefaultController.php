<?php

namespace Ekybio\PrimerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EkybioPrimerBundle:Default:index.html.twig');
    }
}
