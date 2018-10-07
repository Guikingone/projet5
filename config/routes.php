<?php

use App\src\Controller\HomeController;
use App\src\Controller\ArticlesController;
use App\src\Controller\ArticleDetailsController;
use App\src\Controller\ContactController;

return [
    'home' => [
        'path' => '/projet5/public/index',
        'controller' => HomeController::class
    ],
    'articles' => [
        'path' => '/projet5/public/index/articles',
        'controller' => App\src\Controller\ArticlesController::class
    ],
    'article_details' => [
        'path' => '/projet5/public/index/article/{id}',
        'controller' => App\src\Controller\ArticleDetailsController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'contact' => [
        'path' => '/projet5/public/index/contact',
        'controller' => App\src\Controller\ContactController::class,
    ],
    'register' => [
        'path' => '/projet5/public/index/register',
        'controller' => App\src\Controller\RegisterController::class,
    ],
];
