<?php

namespace Kubus\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KubusFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
