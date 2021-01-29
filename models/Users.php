<?php

include_once "MyActiveRecord.php";

class Users extends MyActiveRecord
{
    /**
     * Changes row in DB table.
     *
     * @param $rowIdentifier
     * @param $identifier
     */
    public function changeTableRow($rowIdentifier, $identifier)
    {
        self::changeRow($rowIdentifier, $identifier);
    }
}
