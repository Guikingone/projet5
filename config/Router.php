<?php

namespace App\config;

use App\src\controller\BackController;
use App\src\controller\ErrorController;
use App\src\controller\FrontController;

class Router
{
    private $frontController;
    private $backController;
    private $errorController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'article'){
                    $this->frontController->article($_GET['idArt']);
                }
                else if($_GET['route'] === 'saveArticle') {
                    $this->backController->saveArticle($_POST);
                }
                else if($_GET['route'] === 'register') {
                    $this->backController->register($_POST);
                }
                else if($_GET['route'] === 'connection') {
                    $this->backController->connection($_POST);
                }
                else if($_GET['route'] === 'admin') {
                    $this->frontController->admin($_POST);
                }
                else if($_GET['route'] === 'postModif') {
                    $this->frontController->postModif($_POST);
                }
                else if($_GET['route'] === 'commentModif') {
                    $this->frontController->commentModif($_POST);
                }
                else if($_GET['route'] === 'unpublishedComment') {
                    $this->frontController->unpublishedComment($_POST);
                }

                else{
                    $this->errorController->unknown();
                }
            }
            else{
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->error(); 
        }
    }
}
