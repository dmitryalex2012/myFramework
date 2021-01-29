<?php

include_once './services/AuthServices.php';
include './services/Render.php';

class Controller
{
    /**
     * Renders view file.
     * Makes "$content" for layout. Performs user registration check.
     *
     * @param $array
     */
    public function render($array)
    {
        $content = Render::getViewFile($array);

        $auth = new AuthServices();
        $user = $auth->findLogin();

        require 'views/layouts/main.php';
    }
}
