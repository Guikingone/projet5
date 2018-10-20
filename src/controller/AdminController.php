<?php

declare(strict_types=1);

namespace App\controller;

use Framework\View;

class AdminController
{
    public function __construct()
    {
        $this->view = new View();  
    }

    public function __invoke()
    {
        $this->view->render('admin_page');
    }
}
