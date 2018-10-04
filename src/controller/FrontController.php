<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\model\View;

class FrontController
{
    private $articleDAO;
    private $commentDAO;
    private $view;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
    }

    public function home()
    {
        $articles = $this->articleDAO->getNewArticles();
        $this->view->render('home', [
            'articles' => $articles
        ]);
    }

    public function allArticle()
    {
        $articles = $this->articleDAO->getArticles();
        $this->view->render('allArticle', [
            'articles' => $articles
        ]);
    }

    public function article($id)
    {
        $article = $this->articleDAO->getArticle($id);
        $comments = $this->commentDAO->getCommentsFromArticle($id);
        $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function postModif()
    {
        $articles = $this->articleDAO->getArticles();
        $this->view->render('postModif', [
            'articles' => $articles
        ]);
    }

    public function commentModif()
    {
        $comments = $this->commentDAO->getComments();
        $this->view->render('commentModif', [
            'comments' => $comments
        ]);
    }

    public function unpublishedCommentList()
    {
        $comments = $this->commentDAO->getUnpublishedComments();
        $this->view->render('unpublishedCommentList', [
            'comments' => $comments
        ]);
    }

    public function unpublishedComment($id)
    {
        $comment = $this->commentDAO->getUnpublishedComment($id);
        $this->view->render('unpublishedComment', [
            'comment' => $comment
        ]);
    }

    public function getComment($id)
    {
        $comment = $this->commentDAO->getComment($id);
        $this->view->render('Comment', [
            'comment' => $comment
        ]);
    }

    public function getArticle($id)
    {
        $article = $this->articleDAO->getArticle($id);
        $this->view->render('articleModify', [
            'article' => $article
        ]);
    }

    public function admin()
    {
        $this->view->render('admin');
    }

    public function disconnect()
    {
        $this->view->render('disconnect');
    }
}
