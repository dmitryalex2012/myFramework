<?php
include "Controller.php";

class PostController extends Controller
{
    public function index($postName)
    {
        $file = 'models/' . "$postName" . '.php';

//        include '../models/Post.php';
//        $result = new Post();


        $hostname = 'localhost';
        $dbname = 'myframewok';
        $user = 'sitemanufactura';
        $pass = 200384;

        $result = "empty";

        try {
            $dbh = new PDO("mysql:host=$hostname; dbname=$dbname", $user, $pass);

            $query = "SELECT * FROM `posts` WHERE id = '1'";
            $result = $dbh->query($query);

            $dbh = null;
        } catch (PDOException $e) {
            $result = "Error!: " . $e->getMessage() . "<br/>";
            die();
        }


        $post = include $file;
        $this->render([ $postName .'/index',
            'post' => $post,

//            'result' => $result->getTable()
            'result' => $result

            ]);
    }

}
