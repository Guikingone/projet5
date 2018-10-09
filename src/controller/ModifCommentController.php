<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\CommentDAO;
use App\src\model\View;

class ModifCommentController
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
        $comment = $this->commentDAO->getComment($params['id']);
        $this->view->render('comment', [
            'comment' => $comment
        ]);
    }
}
