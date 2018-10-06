<?php

namespace App\src\controller;
use App\src\model\View;

class ErrorController
{
    public function unknown()
    {
        $this->view->render('unknown');
    }

    public function error()
    {
        $this->view->render('error');
    }
}
