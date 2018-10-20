<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\CommentDAO;
use Framework\View;

class UnpublishedCommentListController
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
        $comments = $this->commentDAO->getUnpublishedComments();
        $this->view->render('comment_unpublished_list', [
            'comments' => $comments
        ]);
    }
}
