<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\CommentDAO;

class ModifyCommentController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            if ($_POST['csrfToken'] == $_SESSION['csrfToken']) {
                $commentDAO = new CommentDAO();
                $commentDAO->modifyComment($_POST);
                header('Location:'.(new \Framework\UrlGenerator)->generate('admin'));
            } else {
                echo 'une erreur est survenue';
            }
        }
    }
}
