<?php

include "MyActiveRecord.php";

class Post extends MyActiveRecord
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
        return $this->findTableRow($table, $rowIdentifier, $identifier);
    }
}
