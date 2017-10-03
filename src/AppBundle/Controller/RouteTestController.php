<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RouteTestController extends Controller
{
    /**
    * Matches /users exactly
    * @Route("/users", name="users_list")
    */
    public function listAction()
    {
        return new Response(
            '<html><body>UserList</body></html>'
        );
    }

    /**
    *
    * @Route("/users/{id}", name="user_show", requirements={"id": "\d+"})
    */
    public function showUser($id)
    {
        return new Response(
            '<html><body>'.$id.'</body></html>'
        );
    }

    /**
    * @Route("/users/{slug}", name="address_show")
    */
    public function showAddress($slug)
    {
        return new Response(
            '<html><body>'.$slug.'</body></html>'
        );
    }
}
