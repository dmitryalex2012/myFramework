<?php

$url = $_GET['url'];

if (empty($url)){
    $url = "site/index";
}

$url = rtrim($url, '/');
$url = explode('/', $url);
require 'controllers/'.$url[0].'.php';
$controller = new $url[0];
$action = $url[1];

if(isset($url[2])) {
    $controller->$url[1]($url[2]);
}
else {
    if(isset($url[1])) {
        $controller->$action();
    }
}

