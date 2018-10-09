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
                if($yo){}
                else if($_GET['route'] === 'unpublishedCommentList') {
                    $this->frontController->unpublishedCommentList();
                }
                else if($_GET['route'] === 'unpublishedComment') {
                    $this->frontController->unpublishedComment($_GET['idCom']);
                }
                else if($_GET['route'] === 'deleteComment') {
                    $this->backController->deleteComment($_POST);
                }
                else if($_GET['route'] === 'deleteArticle') {
                    $this->backController->deleteArticle($_POST);
                }
                else if($_GET['route'] === 'publishComment') {
                    $this->backController->publishComment($_POST);
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
