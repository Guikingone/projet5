<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\model\View;

class ModifiedArticleController
{
    private $articleDAO;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
    }

    public function modifyArticle()
    {
        if(isset($_POST['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->modifyArticle($_POST);
            header('Location: /projet5/public/index/admin');
        };
    }
}
