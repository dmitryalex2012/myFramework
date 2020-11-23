<?php

namespace models;
use app;


class MyActiveRecord
{
    public function __construct()
    {
        //        $user = 'sitemanufactura';
//        $pass = '200384';
//
        try {
        include '../config.php';
        $dbh = new PDO("mysql:host=localhost; dbname=trainweb", $user, $pass);
//
//            $query = "SELECT * FROM `test1`";
//            foreach($dbh->query($query) as $row) {

//                echo "<pre>";
//                print_r($row);
//                echo "</pre>";

//                print $row['id'] . "\r\n";
//                print $row['title'] . "\r\n";
//                print $row['content'] . "\n";
//                print $row['note'] . "\n";
//                echo  "<br>";
//            }

//            $query = 'SELECT * FROM `test1`';
//            $query = "SELECT * FROM `test1` WHERE id = '1'";

//            $result = $dbh->query($query);
//            foreach ($result as $row){
//                echo "<pre>";
//                print_r($row['id']);
//                echo "</pre>";
//            }

//            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getTableRow($table, $stringID){



    }
}
