<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\ArticleDAO;

class DeleteArticleController
{
    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->deleteArticle($_POST);
            header('Location: /index.php/admin');
        }
    }
}
