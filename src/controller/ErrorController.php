<?php

namespace App\src\controller;

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