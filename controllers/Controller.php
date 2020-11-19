<?php
class Controller
{
    public function render($name)
    {


        $content = file_get_contents('views/' . $name . ".php");
//        $content = include 'views/' . $name . '.php';

        require 'views/layouts/main.php';

    }

}
