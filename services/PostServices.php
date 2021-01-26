<?php

include_once './models/Posts.php';

class PostServices
{
    private $posts;

    public function __construct()
    {
        $this->posts = new Posts();
    }

    public function getTableRow($table, $rowIdentifier, $identifier)
    {
        return $this->posts->getTableRow($table, $rowIdentifier, $identifier);
    }
}
