<?php

class Request
{
    public static function start($controllerName, $action)
    {
        require 'controllers/' . $controllerName . '.php';

        $controller = new $controllerName;

        return $controller->$action();
    }
}