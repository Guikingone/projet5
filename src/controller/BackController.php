<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\UserDAO;
use App\src\model\View;

class BackController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function saveArticle($post)
    {
        if(isset($post['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->saveArticle($post);
            header('Location: ../public/index.php');
        }
        $this->view->render('form_article', [
            'post' => $post
        ]);
    }

    public function register($post)
    {
        if(isset($post['submit'])) {
            $userDAO = new UserDAO();
            $userDAO->register($post);
            header('Location: ../public/index.php');
        }
        $this->view->render('register', [
            'post' => $post
        ]);
    }
}