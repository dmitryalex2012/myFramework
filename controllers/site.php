<?php
class Site
{
    public function index()
    {

        $this->render('index');

    }

    public function render($name)
    {

        require 'views/site/' . $name . ".php";

    }

}
