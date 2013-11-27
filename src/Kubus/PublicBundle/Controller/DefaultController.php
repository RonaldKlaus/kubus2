<?php

namespace Kubus\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KubusPublicBundle:Default:index.html.twig', array('name' => $name));
    }
}
