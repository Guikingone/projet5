<?php
session_start();

use Framework\Router;
use Framework\UrlGenerator;

require '../config/dev.php';
require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();
$router->handleRequest($_SERVER);

