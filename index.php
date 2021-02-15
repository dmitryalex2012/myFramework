<?php

/** Config inclusion. DB connection. */
$config = require __DIR__ . '/config/config.php';

include 'core/autoloader.php';

$DB = new LoadDB($config);

/** URL analysis. Getting "controller" and "action" from URL. */
$router = new Router();
$controller = $router->getController();
$action = $router->getAction();

/** Controller/action loading. */
$page = Request::start($controller, $action);

/** The view page loading. */
Response::start($page);
