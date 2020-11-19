<?php

$url = $_GET['url'];

if (empty($url)){
    $url = "site/index";
}

$url = rtrim($url, '/');
$url = explode('/', $url);
require 'controllers/' . $url[0] . 'Controller.php';

$controllerName = $url[0] . "Controller";
$controller = new $controllerName;
$action = $url[1];
$data = $url[2];

if(isset($data)) {
    $controller->$action($data);
}
else {
    if(isset($action)) {
        $controller->$action();
    }
}

