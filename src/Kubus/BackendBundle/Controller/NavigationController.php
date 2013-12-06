<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
    public function indexAction()
    {
      //check if user is signed in
      echo "NavigationController";
    	return $this->render('KubusBackendBundle:Navigation:index.html.twig');
    }

}
