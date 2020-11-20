<?php
include "Controller.php";
include 'post1.php';

class Post1Controller extends Controller
{
    public function index()
    {
//        $post1 = "Hello";
        $this->render(['post1/index',
//            'post' => $post1
            ]);
    }

}
