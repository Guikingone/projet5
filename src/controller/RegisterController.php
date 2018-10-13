<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\UserDAO;
use App\Model\View;

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
            header('Location: /index.php');
        }
        $this->view->render('register');
    }
}
