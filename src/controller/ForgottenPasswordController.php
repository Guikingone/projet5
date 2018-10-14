<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\UserDAO;
use App\Model\View;

class ForgottenPasswordController
{
    public function __construct()
    {
        $this->view = new View();
        $this->userDAO = new UserDAO();
    }

    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $userDAO = new UserDAO();
            $userDAO->forgottenPassword($_POST);
            header('Location: /');
        }
        $this->view->render('forgotten_password');
    }
}
