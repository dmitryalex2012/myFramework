<?php

/** Include config */
$config = require __DIR__ . '/config/config.php';

/** DB connection */
//$hostname = DB_HOST;
//$dbname = DB_NAME;
//$this->dbh = new PDO("mysql:host=$this->$hostname; dbname=$this->$dbname", DB_USER, DB_PASS);
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
if (isset($_GET["valueKey"])){
    $data = $_GET["valueKey"];
}

if(isset($data)) {
    $controller->$action($data);
}
else {
    if(isset($action)) {
        $controller->$action();
    }
}
