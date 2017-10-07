<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;

class EmployeesController implements ClassResourceInterface
{
    public function getUsersAction()
    {
        $pArray = ['test1', 'test2', 'test3'];
        return $pArray;
    } // "get_users"            [GET] /users
}
