<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\CommentDAO;

class PublishCommentController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->publishComment($_POST);
            header('Location: /admin');
        }
    }
}
