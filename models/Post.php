<?php

//use app\models\Colleagues;

class Post extends MyActiveRecord
{

    public function getTable()
    {
        return $this->getTableRow();
    }



//return Colleagues::find()->all();
//}
//
//public static function findColleague($colleagueID)
//{
//    return Colleagues::find()->where(['id' => $colleagueID])->one();
}
