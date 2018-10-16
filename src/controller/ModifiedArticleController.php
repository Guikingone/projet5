<?php

declare(strict_types=1);

namespace App\controller;

use App\DAO\ArticleDAO;

class ModifiedArticleController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->modifyArticle($_POST);
            header('Location:'.(new \Framework\UrlGenerator)->generate('admin'));
        }
    }
}
