<?php
include "Controller.php";
include "./services/Auth.php";

class AuthController extends Controller
{
    public function index()
    {
        $viewFile = Auth::checkAuth();

        $this->render([$viewFile]);
    }
}
