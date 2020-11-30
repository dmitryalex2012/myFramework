<?php
include "Controller.php";

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

    /**
     * Registration new user.
     *
     */
    public function register()
    {
        /**
         * Need to make!
         */
        $viewFile = 'auth/login';

        $this->render([$viewFile]);
    }
}

