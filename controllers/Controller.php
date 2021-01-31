<?php

include_once './services/AuthServices.php';
include './services/Render.php';

class Controller
{
    /**
     * Gets "$content" for layout. Performs user registration check.
     * Renders view file.
     *
     * @param $array
     */
    public function render($array)
    {
        $content = Render::getViewFile($array);

        $user = $this->auth();

        require 'views/layouts/main.php';
    }

    /**
     * Calls "AuthServices" for user authentication.
     *
     * @return array
     */
    public function auth()
    {
        $auth = new AuthServices();
        return $auth->findLogin();
    }
}
