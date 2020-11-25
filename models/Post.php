<?php

include "MyActiveRecord.php";

class Post extends MyActiveRecord
{
    /**Get the row with "$postName" identifier from the DB table (using "MyActiveRecord" class)
     *
     * @param $postName
     * @return mixed
     */
    public function getTableRow($postName)
    {
        return $this->findTableRow($postName);
    }
}
