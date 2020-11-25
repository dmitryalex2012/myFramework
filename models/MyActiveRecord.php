<?php

//include './config.php';


class MyActiveRecord
{
//    protected $hostname = $this->hostname;
//$dbname = 'myframework';
//$user = 'sitemanufactura';
//$pass = 200384;

    public function __construct()
    {
//        $hostname = $this->$hostname;
    }

//    public function getTableRow($table, $stringID)
    public function getTableRow()
    {

        include './config.php';
//        $myDB = include './config.php';
//        $hostname = $myDB['hostname'];

//        $hostname = 'localhost';
//        $dbname = 'myframework';
//        $user = 'sitemanufactura';
//        $pass = 200384;

        try {
            $dbh = new PDO("mysql:host=$hostname; dbname=$dbname", $user, $pass);
            $sth = $dbh->prepare("SELECT * FROM `posts` WHERE id = '1'");
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            $dbh = null;
        } catch (PDOException $e) {
            $result = "Error!: " . $e->getMessage() . "<br/>";
//            die();
        }

        return $result;

    }
}
