<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\DAO\UserDAO;
use App\src\model\View;
use App\src\model\Contact;

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

    public function saveComment($post)
    {
        if(isset($post['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->saveComment($post);
            header('Location: ../public/index.php');
        }
        $this->view->render('form_comment', [
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

    public function connection($post)
    {
        if(isset($post['submit'])) {
            $userDAO = new UserDAO();
            $userDAO->connection($post);
            header('Location: ../public/index.php');
        }
        $this->view->render('connection_form', [
            'post' => $post
        ]);
    }

    public function contact($post) {
        if(isset($post['submit'])) {
            $contactForm = new Contact();
            $contactForm->buildContact($post);
            header('Location: ../public/index.php');
        }
        $this->view->render('contact', [
            'post' => $post
        ]);
    }

    public function publishComment($post)
    {
        if(isset($post['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->publishComment($post);
            header('Location: ../public/index.php?route=admin');
        }
        $this->view->render('unpublishedComment', [
            'post' => $post
        ]);
    }

    public function modifyComment($post)
    {
        if(isset($post['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->modifyComment($post);
            header('Location: ../public/index.php?route=admin');
        }
        $this->view->render('comment', [
            'post' => $post
        ]);
    }

    public function modifyArticle($post)
    {
        if(isset($post['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->modifyArticle($post);
            header('Location: ../public/index.php?route=admin');
        }
        $this->view->render('article', [
            'post' => $post
        ]);
    }

    public function deleteComment($post)
    {
        if(isset($post['submit'])) {
            $commentDAO = new CommentDAO();
            $commentDAO->deleteComment($post);
            header('Location: ../public/index.php?route=admin');
        }
        $this->view->render('comment', [
            'post' => $post
        ]);
    }

    public function deleteArticle($post)
    {
        if(isset($post['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->deleteArticle($post);
            header('Location: ../public/index.php?route=admin');
        }
        $this->view->render('article', [
            'post' => $post
        ]);
    }
}
