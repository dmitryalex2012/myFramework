<?php

include_once './services/AuthServices.php';
include './services/Render.php';

class Controller
{
    /**
     * Renders view file.
     * Gets "$content" for layout. Performs user registration check.
     *
     * @param $array
     * @return array
     */
    public function render($array)
    {
        $content = Render::getViewFile($array);

        $user = $this->auth();

        return $data = [
            0 => $content,
            1 => $user
        ];
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
