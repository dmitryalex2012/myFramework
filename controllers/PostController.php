<?php
include "Controller.php";
include './models/Post.php';

class PostController extends Controller
{
    public function index($postName)
    {
        $result = new Post();

        $this->render([ $postName .'/index',
            'result' => $result->getTableRow($postName)
            ]);
    }
}
