<?php

include_once "MyActiveRecord.php";

class Users extends MyActiveRecord
{
    /**
     * Get method model for changing row in DB table
     *
     * @param $rowIdentifier
     * @param $identifier
     */
    public function changeTableRow($rowIdentifier, $identifier)
    {
        self::changeRow($rowIdentifier, $identifier);
    }
}
