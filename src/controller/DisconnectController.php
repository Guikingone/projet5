<?php

declare(strict_types=1);

namespace App\controller;

use App\Model\View;

class DisconnectController
{
    public function __construct()
    {
        $this->view = new View();  
    }

    public function __invoke()
    {
        $this->view->render('disconnect');
    }
}
