<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\model\View;

class ModifArticleController
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
        if(isset($_POST['submit'])) {
                $articleDAO = new ArticleDAO();
                $articleDAO->modifyArticle($_POST);
                header('Location: /projet5/public/index/admin');
            } else {
                $article = $this->articleDAO->getArticle($params['id']);
                $this->view->render('articleModify', [
                    'article' => $article
                ]);
            }
    }
}
