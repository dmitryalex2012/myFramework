<?php

class LoadDB
{
    public function __construct($params)
    {
        $DB = new PDO('mysql:host=' . $params['host'] . '; dbname=' . $params['name'], $params['user'], $params['pass']);
    }

}