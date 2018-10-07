<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\ArticleDAO;

class ModifiedArticleController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->modifyArticle($_POST);
            header('Location: /projet5/public/index/admin');
        }
    }
}
