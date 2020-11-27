<?php
include "Controller.php";
include './models/Post.php';

class PostController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = new Post();
    }

    public function index($postName)
    {
        $this->render([ $postName .'/index',
            'viewFile' => $this->db->getTableRow('posts', 'postName', $postName)
            ]);
    }
}
