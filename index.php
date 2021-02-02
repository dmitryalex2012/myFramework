<?php

/** Config inclusion. */
$config = require __DIR__ . '/config/config.php';

/** DB connection. */
$DB = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER, DB_PASS);

include 'core/autoloader.php';

/** URL analysis. Getting "controller" and "action" from URL. */
$router = new Router();
$controller = $router->getController();
$action = $router->getAction();

/** Controller/action loading. */
$page = Request::start($controller, $action);

/** The view page loading. */
Response::start($page);
