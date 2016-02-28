<?php

namespace Events\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstName,$count)
    {
        //return $this->render('EventBundle:Default:index.html.twig');

/*    	$data  = array(
    		'count' => 5,
    		'firstName' => 'Kiran',
    		'Message' => 'It\'s a traaaaaaap'
    	);

    	$json = json_encode($data);

        $response = new Response($json);
        $response->headers->set('Content-Type', 'application/json');

        return $response;*/
        //var_dump($firstName, $count); die;
        return $this->render('EventBundle:Default:index.html.twig', array('name' => $firstName));
    }
}