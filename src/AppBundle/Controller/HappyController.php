<?php
// src/AppBundle/Controller/HappyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HappyController
{
    /**
     * @Route("/happy/name")
     */
    public function nameAction()
    {
        $name = 'Tester';

        return new Response(
            '<html><body>Have a happy day, '.$name.'!</body></html>'
        );
    }
}
