<?php
include "Controller.php";

class Post1Controller extends Controller
{
    public function index()
    {
        $post1 = include 'models/post1.php';
        $this->render(['post1/index',
            'post' => $post1
            ]);
    }

}
