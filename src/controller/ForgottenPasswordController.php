<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\UserDAO;
use App\src\model\View;

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
            header('Location: /index.php');
        }
        $this->view->render('forgotten_password');
    }
}
