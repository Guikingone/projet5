<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Framework\\' => array($baseDir . '/etc'),
    'Egulias\\EmailValidator\\' => array($vendorDir . '/egulias/email-validator/EmailValidator'),
    'App\\Tool\\' => array($baseDir . '/src/Tool'),
    'App\\Model\\' => array($baseDir . '/src/Model'),
    'App\\DAO\\' => array($baseDir . '/src/DAO'),
    'App\\Controller\\' => array($baseDir . '/src/Controller'),
    'App\\' => array($baseDir . '/src'),
);
