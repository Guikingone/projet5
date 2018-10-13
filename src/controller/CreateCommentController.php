<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\ArticleDAO;
use App\DAO\CommentDAO;
use App\Model\View;

class CreateCommentController
{
    private $articleDAO;
    private $view;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->view = new View();
    }

    public function __invoke(array $params = [])
    {
        $article = $this->articleDAO->getArticle($params['id']);
        $this->view->render('form_comment', [
            'article' => $article,
        ]);
    }
}
