<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\CommentDAO;
use App\Model\View;

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
            header('Location: /index.php');
        }
    }
}
