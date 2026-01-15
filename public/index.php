<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request , PHP_URL_PATH);

$firstPath = '/smart-wallet-MVC/public';
if(strpos($path , $firstPath) === 0){
    $path = substr($path , strlen($firstPath));
}

switch($path){
    case '/':
    case '/login':
        require __DIR__ . '/../app/views/auth/login.php';
        break;
    case '/signup':
        require __DIR__ . '/../app/views/auth/signup.php';
        break;
    default:
        echo "404 NOT FOUND";
        break;
}