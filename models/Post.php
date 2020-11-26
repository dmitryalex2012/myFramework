<?php

include "MyActiveRecord.php";

class Post extends MyActiveRecord
{
    /**Get the row with "$postName" identifier from the DB table (using "MyActiveRecord" class)
     *
     * @param $identifier
     * @return mixed
     */
    public function getTableRow($identifier)
    {
        return $this->findTableRow($identifier);
    }
}
