<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\CommentDAO;

class DeleteCommentController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->deleteComment($_POST);
            header('Location: /admin');
        }
    }
}
