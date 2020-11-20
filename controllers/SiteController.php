<?php
include "Controller.php";

class SiteController extends Controller
{
    public function index()
    {

        $this->render(['site/index']);

    }

}
