<?php
include "Controller.php";
include './models/Post.php';

class PostController extends Controller
{
    public function index($postName)
    {
        $file = 'models/' . "$postName" . '.php';

        $result = new Post();

        $post = include $file;
        $this->render([ $postName .'/index',
            'post' => $post,

            'result' => $result->getTable()
            ]);
    }
}
