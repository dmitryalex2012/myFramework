<?php

include_once './services/AuthServices.php';
include './services/Render.php';

class Controller
{
//    public $auth;

//    public function __construct()
//    {
//        $this->auth = new AuthServices();
//    }

    /**
     * Rendering view file (make "$content" for "Layout", user registration check).
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
