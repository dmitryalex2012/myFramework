<?php
include "Controller.php";

class SiteController extends Controller
{

    /**
     * Performs rendering index page.
     *
     * @return array
     */
    public function index()
    {
        return $this->render(['site/index']);
    }
}
