<?php

include_once "MyActiveRecord.php";

class Posts extends MyActiveRecord
{
    /**
     * Find the row with "$postName" identifier in the DB table (using "MyActiveRecord" class)
     *
     * @param $rowIdentifier
     * @param $identifier
     * @return mixed
     */
    public function findTableRow($rowIdentifier, $identifier)
    {
        return self::findRow($rowIdentifier, $identifier);
    }
}
