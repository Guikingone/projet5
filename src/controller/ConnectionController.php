<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\UserDAO;
use App\src\model\View;

class ConnectionController
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
            $userDAO->connection($_POST);
            header('Location: /projet5/public/index');
        }
        $this->view->render('connection_form');
    }
}
