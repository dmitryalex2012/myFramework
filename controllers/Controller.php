<?php

include_once './services/AuthServices.php';
include './services/Render.php';

class Controller
{
    /**
     * Rendering view file (make "$content" for "Layout", user registration check).
     *
     * @param $array
     */
    public function render($array)
    {
        $content = Render::getViewFile($array);

        $user = AuthServices::findLogin();

        require 'views/layouts/main.php';
    }

}
