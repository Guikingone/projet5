<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\model\View;

class AdminController
{
    public function __construct()
    {
        $this->view = new View();  
    }

    public function __invoke()
    {
        $this->view->render('admin');
    }
}
