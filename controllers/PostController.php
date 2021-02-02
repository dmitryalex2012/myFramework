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
     * Gets data from DB using "getTableRow" method of the "PostServices" service.
     *
     * @return array
     */
    public function index()
    {
        $postName = $_GET["valueKey"];

        $post = $this->post->getTableRow('postName', $postName);

        return $this->render($postName .'/index', [
            'post' => $post
            ]);
    }
}
