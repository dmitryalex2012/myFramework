<?php
include "Controller.php";
include_once './services/PostServices.php';

class PostController extends Controller
{
    public $post;

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->post = new PostServices();
    }

    /**
     *
     *
     * @param $postName
     */
    public function index($postName)
    {
        $this->render([ $postName .'/index',
            'viewFile' => $this->post->getTableRow('postName', $postName)
            ]);
    }
}
