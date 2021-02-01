<?php
class Router
{
    private $url;

    public function __construct()
    {
        $this->url = $_GET['url'];

        if (empty($this->url)){
            $this->url = "site/index";
        }

        $this->url = rtrim($this->url);
        $this->url = explode('/', $this->url);
    }

    public function getController()
    {
        return $this->url[0] . "Controller";
    }

    public function getAction()
    {
        return $this->url[1];
    }
}