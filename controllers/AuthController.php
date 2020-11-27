<?php
include "Controller.php";
include "./services/Auth.php";

class AuthController extends Controller
{
    public function index()
    {
        $viewFile = Auth::makeAuth();

        $this->render([$viewFile]);
    }

    public function testLogin()
    {
        $viewFile = Auth::performingLogin();

        $this->render([$viewFile]);
    }
}

