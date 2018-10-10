<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\CommentDAO;

class ModifyCommentController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->modifyComment($_POST);
            header('Location: /index.php/admin');
        }
    }
}
