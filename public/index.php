<?php
session_start();

use Framework\Router;

require '../config/dev.php';
require '../config/Autoloader.php';
require_once __DIR__ . '/../vendor/autoload.php';
\App\config\Autoloader::register();

$router = new Router();
$router->handleRequest($_SERVER);
