<?php
include "Controller.php";

class SiteController extends Controller
{
    /**
     * Performs rendering index page.
     */
    public function index()
    {
        $this->render(['site/index']);
    }
}
