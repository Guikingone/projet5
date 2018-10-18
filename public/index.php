<?php
session_start();

require '../config/dev.php';
require_once __DIR__ . '/../vendor/autoload.php';

$router = new Framework\Router();
$router->handleRequest($_SERVER);

$csrfToken = bin2hex(random_bytes(15));
$_SESSION['csrfToken'] = $csrfToken;
