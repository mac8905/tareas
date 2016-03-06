<?php

namespace MAC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use MAC\UserBundle\Entity\User;
use MAC\UserBundle\Form\UserType;

class UserController extends Controller
{
    public function indexAction() 
    {
        $users = $this->getDoctrine()
                      ->getRepository("MACUserBundle:User")
                      ->findAll();
        
        /*$res = 'Lista de usuarios <br>';
        
        foreach ($users as $user) {
            $res .= 'Usuario: ' . $user->getUsername() . ' - ';
            $res .= 'Email: ' . $user->getEmail();
            $res .= '<br>';
        }
        
        return new Response($res);*/
        
        return $this->render('MACUserBundle:User:index.html.twig', array(
            'users' => $users,
            'title' => 'Users'
        ));
    }
    
    public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        
        return $this->render('MACUserBundle:User:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('mac_user_create'),
            'method' => 'POST'
        ));

        return $form;
    }

    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $password = $form->get('password')->getData();
            
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $password);
            
            $user->setPassword($encoded);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('mac_user_index');
        }
        
        return $this->render('MACUserBundle:User:add.html.twig', array(
            'form' => $form->createView()
        ));
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
