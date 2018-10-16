<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\ArticleDAO;

class DeleteArticleController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->deleteArticle($_POST);
            header('Location:'.(new \Framework\UrlGenerator)->generate('admin'));
        }
    }
}
