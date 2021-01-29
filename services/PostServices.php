<?php

include_once './models/Posts.php';

class PostServices
{
    private $posts;

    public function __construct()
    {
        $this->posts = new Posts();
    }

    /**
     * Get the row with "$postName" identifier from the DB table
     *
     * @param $rowIdentifier
     * @param $identifier
     * @return mixed
     */
    public function getTableRow($rowIdentifier, $identifier)
    {
        return $this->posts->findTableRow($rowIdentifier, $identifier);
    }
}
