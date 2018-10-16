<?php
session_start();

require '../config/dev.php';
require_once __DIR__ . '/../vendor/autoload.php';

$router = new Framework\Router();
$router->handleRequest($_SERVER);
