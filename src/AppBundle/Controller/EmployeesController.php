<?php
namespace AppBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RouteResource;

class EmployeesController extends FOSRestController
{
    /**
     * @return array
     * @View()
     */
    public function showEmployeeAction($empId)
    {
        $employee = $this->getDoctrine()
        ->getRepository(Employees::class)
        ->find($empId);

        if(!$employee)
        {
            return $this->view(null,400);
        }

        return $this->view((array) $employee,200);

    }

    // public function redirectAction()
    // {
    //     $view = $this->redirectView($this->generateUrl('some_route'), 301);
    //     // or
    //     $view = $this->routeRedirectView('some_route', array(), 301);
    //
    //     return $this->handleView($view);
    // }
}
