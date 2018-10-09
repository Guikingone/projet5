<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\CommentDAO;
use App\src\model\View;

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
        $this->view->render('unpublishedCommentList', [
            'comments' => $comments
        ]);
    }
}
