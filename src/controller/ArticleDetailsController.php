<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\ArticleDAO;
use App\DAO\CommentDAO;
use App\Model\View;

class ArticleDetailsController
{
    private $articleDAO;
    private $commentDAO;
    private $view;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
    }

    public function __invoke(array $params = [])
    {
        $article = $this->articleDAO->getArticle($params['id']);
        $comments = $this->commentDAO->getCommentsFromArticle($params['id']);
        $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}
