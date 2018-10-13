<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\CommentDAO;

class DeleteCommentController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->deleteComment($_POST);
            header('Location: /index.php/admin');
        }
    }
}
