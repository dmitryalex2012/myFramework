<?php

/** Include config */
$config = require __DIR__ . '/config/config.php';

/** DB connection */
$DB = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER, DB_PASS);



$url = $_GET['url'];

if (empty($url)){
    $url = "site/index";
}

$url = rtrim($url);
$url = explode('/', $url);



require 'controllers/' . $url[0] . 'Controller.php';

$controllerName = $url[0] . "Controller";
$controller = new $controllerName;
$action = $url[1];

$requestResult = $controller->$action();


$content = $requestResult[0];
$user = $requestResult[1];

require 'views/layouts/main.php';
