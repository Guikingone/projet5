<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\CommentDAO;
use App\src\model\View;

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
            $commentDAO = new CommentDAO();
            $commentDAO->saveComment($_POST);
            header('Location: /');
        }
    }
}
