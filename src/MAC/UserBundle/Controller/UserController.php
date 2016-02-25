<?php

namespace MAC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction() 
    {
        $users = $this->getDoctrine()
                      ->getRepository("MACUserBundle:User")
                      ->findAll();
        
        $res = 'Lista de usuarios <br>';
        
        foreach ($users as $user) {
            $res .= 'Usuario: ' . $user->getUsername() . ' - ';
            $res .= 'Email: ' . $user->getEmail();
            $res .= '<br>';
        }
        
        return new Response($res);
    }
    
    public function viewAction($id)
    {
        $user = $this->getDoctrine()
                     ->getRepository("MACUserBundle:User")
                     ->find($id);
                     
        $res = 'Usuario: ' . $user->getUsername() . ' - ';
        $res .= 'Email: ' . $user->getEmail();
        
        return new Response($res);
    }
}
