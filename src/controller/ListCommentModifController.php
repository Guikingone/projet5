<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\CommentDAO;
use App\src\model\View;

class ListCommentModifController
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
        $comments = $this->commentDAO->getComments();
        $this->view->render('commentModif', [
            'comments' => $comments
        ]);
    }
}
