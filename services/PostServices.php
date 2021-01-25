<?php

include_once './models/Post.php';

class PostServices
{
    public function getTableRow($table, $rowIdentifier, $identifier)
    {
        return Post::getTableRow($table, $rowIdentifier, $identifier);
    }
}
