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
    public function showUserAction($id)
    {
        return new Response(
            '<html><body>'.$id.'</body></html>'
        );
    }

    /**
    * @Route("/users/{slug}", name="address_show")
    */
    public function showAddressAction($slug)
    {
        return new Response(
            '<html><body>'.$slug.'</body></html>'
        );
    }

    // default values to placeholder - or use default parameter setting  like `defaults={"id": 1}`
    /**
    * @Route("/profile/{id}", name="profile", requirements={"id": "\d+"})
    *
    */
    public function showProfileAction($id=1)
    {
        return new Response(
            '<html><body>'.$id.'</body></html>'
        );
    }
}
