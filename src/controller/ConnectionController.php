<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\UserDAO;
use App\Model\View;

class ConnectionController
{
    public function __construct()
    {
        $this->userDAO = new UserDAO();
        $this->view = new View();  
    }

    public function __invoke()
    {
        if(isset($post['submit'])) {
            $userDAO = new UserDAO();
            $userDAO->connection($post);
            header('Location:'.(new \Framework\UrlGenerator)->generate('home'));
        }
        $this->view->render('connection_form', [
            'post' => $post,
        ]);
    }
}
