<?php

class Response
{
    public static function start($page)
    {
        $content = $page[0];
        $user = $page[1];

        require 'views/layouts/main.php';
    }
}