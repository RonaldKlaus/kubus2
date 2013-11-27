<?php

namespace Kubus\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KubusAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
