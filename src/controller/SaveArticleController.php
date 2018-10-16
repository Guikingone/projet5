<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\ArticleDAO;
use App\Model\View;

class SaveArticleController
{
    private $articleDAO;
    private $view;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->view = new View();
    }

    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->saveArticle($_POST);
            header('Location:'.(new \Framework\UrlGenerator)->generate('admin'));
        }
        $this->view->render('form_article');
    }
}
