<?php

namespace AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{
    /**
     * @Route("/users", name="admin_users_view")
     * @Template("AdminBundle::Users/view.html.twig")
     */
    public function viewAcion(Request $request)
    {
    	//Entity Manager
    	$em = $this->getDoctrine()->getManager();
    	
    	$users = $em->getRepository("UserBundle\Entity\User")->findAll();
    	
        return array(
        		"users" => $users,
        );
    }
}