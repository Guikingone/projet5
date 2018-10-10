<?php

declare(strict_types=1);

namespace App\src\controller;

use App\src\model\Contact;
use App\src\model\View;

class ContactController
{
    public function __construct()
    {
        $this->view = new View();
        $this->contactForm = new Contact();
    }

    public function __invoke()
    {
        if(isset($_POST['submit'])) {
            $contactForm = new Contact();
            $contactForm->buildContact($_POST);
            header('Location: /index.php');
        }
        $this->view->render('contact');
    }
}
