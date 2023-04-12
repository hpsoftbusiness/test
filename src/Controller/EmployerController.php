<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployerController extends AbstractController
{
    public function employer()
    {
        var_dump('please log in'); die;

        return $this->render('employer/employee.html.twig');
    }

    public function trial()
    {
        return $this->render('employer/trial.html.twig');
    }

}