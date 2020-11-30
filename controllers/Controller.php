<?php

include_once './services/Auth.php';
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

        $userName = Auth::testLogin();

        require 'views/layouts/main.php';
    }

}
