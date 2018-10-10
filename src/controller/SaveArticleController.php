<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\model\View;

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
            header('Location: /index.php/admin');
        }
        $this->view->render('form_article');
    }
}
