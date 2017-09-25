<?php
// src/AppBundle/Controller/HappyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HappyController extends Controller
{
    /**
     * @Route("/happy/name")
     */
    public function nameAction()
    {
        $name = 'Tester';

        // return new Response(
        //     '<html><body>Have a happy day, '.$name.'!</body></html>'
        // );
        return $this->render('happy/name.html.twig', array(
            'name' => $name,
        ));
    }

    /**
    * @Route("/happy/sayhi")
    */
    public function sayHiAction()
    {
        return new Response(
            '<html><body>Hi there!</body></html>'
        );
    }
}
