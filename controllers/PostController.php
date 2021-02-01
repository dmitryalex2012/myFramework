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

        $viewFile = $this->post->getTableRow('postName', $postName);

        return $this->render([ $postName .'/index',
            'viewFile' => $viewFile
            ]);
    }
}
