<?php

namespace Kubus\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KubusManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
