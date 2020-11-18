<?php
class Controller
{
    public function render($name)
    {

        require 'views/' . $name . ".php";

    }

}
