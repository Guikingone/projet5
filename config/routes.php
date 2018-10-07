<?php

return [
    'home' => [
        'path' => '/projet5/public/index',
        'controller' => App\src\Controller\HomeController::class
    ],
    'articles' => [
        'path' => '/projet5/public/index/articles',
        'controller' => App\src\Controller\ArticlesController::class
    ],
    'article_details' => [
        'path' => '/projet5/public/index/article-{id}',
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
    'connection' => [
        'path' => '/projet5/public/index/connection',
        'controller' => App\src\Controller\ConnectionController::class,
    ],
    'disconnect' => [
        'path' => '/projet5/public/index/disconnect',
        'controller' => App\src\Controller\DisconnectController::class,
    ],
    'admin' => [
        'path' => '/projet5/public/index/admin',
        'controller' => App\src\Controller\AdminController::class,
    ],
    'create_article' => [
        'path' => '/projet5/public/index/admin/create_article',
        'controller' => App\src\Controller\SaveArticleController::class,
    ],
    'list_article' => [
        'path' => '/projet5/public/index/admin/list_article',
        'controller' => App\src\Controller\ListArticleController::class,
    ],
    'modif_article' => [
        'path' => '/projet5/public/index/admin/modif_article/{id}',
        'controller' => App\src\Controller\ModifArticleController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'modified_article' => [
        'path' => '/projet5/public/index/admin/modified_article',
        'controller' => App\src\Controller\ModifiedArticleController::class,
    ],
];
