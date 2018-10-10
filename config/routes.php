<?php

return [
    'home' => [
        'path' => '/index.php',
        'controller' => App\src\Controller\HomeController::class
    ],
    'articles' => [
        'path' => '/index.php/articles',
        'controller' => App\src\Controller\ArticlesController::class
    ],
    'article_details' => [
        'path' => '/article/{id}',
        'controller' => App\src\Controller\ArticleDetailsController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'create_comment' => [
        'path' => '/saveComment/article{id}',
        'controller' => App\src\Controller\CreateCommentController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'saved_comment' => [
        'path' => '/saveComment',
        'controller' => App\src\Controller\SaveCommentController::class,
    ],
    'contact' => [
        'path' => '/contact',
        'controller' => App\src\Controller\ContactController::class,
    ],
    'register' => [
        'path' => '/register',
        'controller' => App\src\Controller\RegisterController::class,
    ],
    'connection' => [
        'path' => '/connection',
        'controller' => App\src\Controller\ConnectionController::class,
    ],
    'disconnect' => [
        'path' => '/disconnect',
        'controller' => App\src\Controller\DisconnectController::class,
    ],
    'admin' => [
        'path' => '/admin',
        'controller' => App\src\Controller\AdminController::class,
    ],
    'create_article' => [
        'path' => '/admin/create_article',
        'controller' => App\src\Controller\SaveArticleController::class,
    ],
    'list_article' => [
        'path' => '/admin/list_article',
        'controller' => App\src\Controller\ListArticleController::class,
    ],
    'modif_article' => [
        'path' => '/admin/modif_article/{id}',
        'controller' => App\src\Controller\ModifArticleController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'modified_article' => [
        'path' => '/admin/modified_article',
        'controller' => App\src\Controller\ModifiedArticleController::class,
    ],
    'delete_article' => [
        'path' => '/admin/deleteArticle',
        'controller' => App\src\Controller\DeleteArticleController::class,
    ],
    'modify_comment_list' => [
        'path' => '/admin/commentModif',
        'controller' => App\src\Controller\ListCommentModifController::class,
    ],
    'modif_comment' => [
        'path' => '/admin/comment/{id}',
        'controller' => App\src\Controller\ModifCommentController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'modify_comment' => [
        'path' => '/admin/modifyComment',
        'controller' => App\src\Controller\ModifyCommentController::class,
    ],
    'delete_comment' => [
        'path' => '/admin/deleteComment',
        'controller' => App\src\Controller\DeleteCommentController::class,
    ],
    'modify_unpublishedComment_list' => [
        'path' => '/admin/unpublishedCommentList',
        'controller' => App\src\Controller\UnpublishedCommentListController::class,
    ],
    'modif_unpublishedComment' => [
        'path' => '/admin/unpublishedComment/{id}',
        'controller' => App\src\Controller\UnpublishedCommentController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'publish_comment' => [
        'path' => '/admin/publishComment',
        'controller' => App\src\Controller\PublishCommentController::class,
    ],
];
