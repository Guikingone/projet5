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
        'path' => '/index.php/article/{id}',
        'controller' => App\src\Controller\ArticleDetailsController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'create_comment' => [
        'path' => '/index.php/saveComment/article{id}',
        'controller' => App\src\Controller\CreateCommentController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'saved_comment' => [
        'path' => '/index.php/saveComment',
        'controller' => App\src\Controller\SaveCommentController::class,
    ],
    'contact' => [
        'path' => '/index.php/contact',
        'controller' => App\src\Controller\ContactController::class,
    ],
    'register' => [
        'path' => '/index.php/register',
        'controller' => App\src\Controller\RegisterController::class,
    ],
    'connection' => [
        'path' => '/index.php/connection',
        'controller' => App\src\Controller\ConnectionController::class,
    ],
    'disconnect' => [
        'path' => '/index.php/disconnect',
        'controller' => App\src\Controller\DisconnectController::class,
    ],
    'admin' => [
        'path' => '/index.php/admin',
        'controller' => App\src\Controller\AdminController::class,
    ],
    'create_article' => [
        'path' => '/index.php/admin/create_article',
        'controller' => App\src\Controller\SaveArticleController::class,
    ],
    'list_article' => [
        'path' => '/index.php/admin/list_article',
        'controller' => App\src\Controller\ListArticleController::class,
    ],
    'modif_article' => [
        'path' => '/index.php/admin/modif_article/{id}',
        'controller' => App\src\Controller\ModifArticleController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'modified_article' => [
        'path' => '/index.php/admin/modified_article',
        'controller' => App\src\Controller\ModifiedArticleController::class,
    ],
    'delete_article' => [
        'path' => '/index.php/admin/deleteArticle',
        'controller' => App\src\Controller\DeleteArticleController::class,
    ],
    'modify_comment_list' => [
        'path' => '/index.php/admin/commentModif',
        'controller' => App\src\Controller\ListCommentModifController::class,
    ],
    'modif_comment' => [
        'path' => '/index.php/admin/comment/{id}',
        'controller' => App\src\Controller\ModifCommentController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'modify_comment' => [
        'path' => '/index.php/admin/modifyComment',
        'controller' => App\src\Controller\ModifyCommentController::class,
    ],
    'delete_comment' => [
        'path' => '/index.php/admin/deleteComment',
        'controller' => App\src\Controller\DeleteCommentController::class,
    ],
    'modify_unpublishedComment_list' => [
        'path' => '/index.php/admin/unpublishedCommentList',
        'controller' => App\src\Controller\UnpublishedCommentListController::class,
    ],
    'modif_unpublishedComment' => [
        'path' => '/index.php/admin/unpublishedComment/{id}',
        'controller' => App\src\Controller\UnpublishedCommentController::class,
        'params' => [
            'id' => '\d+'
        ]
    ],
    'publish_comment' => [
        'path' => '/index.php/admin/publishComment',
        'controller' => App\src\Controller\PublishCommentController::class,
    ],
    'password_forgotten' => [
        'path' => '/index.php/forgotten_password',
        'controller' => App\src\Controller\ForgottenPasswordController::class,
    ],
    'new_password_form' => [
        'path' => '/index.php/newpassword?token={token}',
        'controller' => App\src\Controller\NewPasswordFormController::class,
        'params' => [
            'token' => '\d+'
        ]
    ],
];
