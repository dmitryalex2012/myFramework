<?php
include "Controller.php";
//include "../models/post1.php";

class Post1Controller extends Controller
{
    public function index()
    {

        $this->render('post1/index');

    }

}
