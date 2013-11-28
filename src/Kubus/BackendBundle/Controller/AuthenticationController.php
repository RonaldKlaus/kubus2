<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthenticationController extends Controller
{
    public function loginAction()
    {
    	// Put the authentication stuff here
    	// load person-model
    	// load roles

    	// redirect to welcome-page
    	return $this->render('KubusBackendBundle:Navigation:index.html.twig');
    }

    public function logoutAction()
    {
    	// delete session, person etc. here

    	// redirect to welcome-page
    	return $this->render('KubusBackendBundle:Navigation:index.html.twig');
    }

}
