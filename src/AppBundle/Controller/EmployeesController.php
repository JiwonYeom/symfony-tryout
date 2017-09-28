<?php
namespace AppBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;

class EmployeesController extends FOSRestController
{
    public function getEmployeesAction()
    {
        //$data = ...; // get data, in this case list of users.
        $data = ['Jiwon','Jamie','John'];
        // $view = $this->view($data, 200)
        //     ->setTemplate("MyBundle:Users:getUsers.html.twig")
        //     ->setTemplateVar('users');

        // return $this->handleView($view);
        return $data;
    }

    public function redirectAction()
    {
        $view = $this->redirectView($this->generateUrl('some_route'), 301);
        // or
        $view = $this->routeRedirectView('some_route', array(), 301);

        return $this->handleView($view);
    }
}
