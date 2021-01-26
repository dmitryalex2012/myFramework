<?php

include_once "MyActiveRecord.php";

class Posts extends MyActiveRecord
{
    /**Get the row with "$postName" identifier from the DB table (using "MyActiveRecord" class)
     *
     * @param $table
     * @param $rowIdentifier
     * @param $identifier
     * @return mixed
     */
    public function getTableRow($table, $rowIdentifier, $identifier)
    {
        /** NEED CHANGE "new Post !!!!!" */
//        return (new Posts)->findTableRow($table, $rowIdentifier, $identifier);
        return self::findTableRow($table, $rowIdentifier, $identifier);
//        return static::findTableRow($table, $rowIdentifier, $identifier);
//        return (new MyActiveRecord)->findTableRow($table, $rowIdentifier, $identifier);
    }
}
