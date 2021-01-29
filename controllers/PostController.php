<?php
include "Controller.php";
include_once './services/PostServices.php';

class PostController extends Controller
{
    public $post;

    public function __construct()
    {
        $this->post = new PostServices();
    }

    public function index($postName)
    {
        $this->render([ $postName .'/index',
            'viewFile' => $this->post->getTableRow('postName', $postName)
            ]);
    }
}
