<?php

include_once "MyActiveRecord.php";

class Post extends MyActiveRecord
{
    /**Get the row with "$postName" identifier from the DB table (using "MyActiveRecord" class)
     *
     * @param $table
     * @param $rowIdentifier
     * @param $identifier
     * @return mixed
     */
    public static function getTableRow($table, $rowIdentifier, $identifier)
    {
        /** NEED CHANGE "new Post !!!!!" */
        return (new Post)->findTableRow($table, $rowIdentifier, $identifier);
    }
}
