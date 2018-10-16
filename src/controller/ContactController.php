<?php

declare(strict_types=1);

namespace App\controller;

use App\Tool\Contact;
use App\Model\View;

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
            header('Location:'.(new \Framework\UrlGenerator)->generate('home'));
        }
        $this->view->render('contact');
    }
}
