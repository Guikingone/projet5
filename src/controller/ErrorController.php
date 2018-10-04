<?php

namespace App\src\controller;
use App\src\model\View;

class ErrorController
{
    public function unknown()
    {
        require '../templates/base.php';
    }

    public function error()
    {
        require '../templates/base.php';
    }
}
