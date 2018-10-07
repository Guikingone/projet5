<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\UserDAO;
use App\src\model\View;

class RegisterController
{
    public function __construct()
    {
        $this->userDAO = new UserDAO();
        $this->view = new View();  
    }

    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $userDAO = new UserDAO();
            $userDAO->register($_POST);
            header('Location: /projet5/public/index');
        }
        $this->view->render('register');
    }
}
