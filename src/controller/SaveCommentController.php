<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\CommentDAO;
use Framework\View;

class SaveCommentController
{
    private $commentDAO;
    private $view;

    public function __construct()
    {
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
    }

    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            if ($_POST['csrfToken'] == $_SESSION['csrfToken']) {
                $commentDAO = new CommentDAO();
                $commentDAO->saveComment($_POST);
                header('Location:'.(new \Framework\UrlGenerator)->generate('home'));
            }
        }
    }
}
