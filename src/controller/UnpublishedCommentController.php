<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\CommentDAO;
use Framework\View;

class UnpublishedCommentController
{
    private $commentDAO;
    private $view;

    public function __construct()
    {
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
    }

    public function __invoke(array $params = [])
    {
        $comment = $this->commentDAO->getUnpublishedComment($params['id']);
        $this->view->render('comment_unpublished_form', [
            'comment' => $comment,
            'csrfToken' => $_SESSION['csrfToken'] = (new \App\Tool\TokenGenerator)->generateCsrfToken()
        ]);
    }
}
