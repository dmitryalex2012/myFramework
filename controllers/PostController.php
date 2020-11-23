<?php
include "Controller.php";

class PostController extends Controller
{
    public function index($postName)
    {
        $file = 'models/' . "$postName" . '.php';

        $post = include $file;
        $this->render([ $postName .'/index',
            'post' => $post
            ]);
    }

}
