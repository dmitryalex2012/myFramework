<?php

include "Controller.php";

class AuthController extends Controller
{
    /**
     * Make authorization
     */
    public function index()
    {
        $viewFile = Auth::makeAuth();

        $this->render([$viewFile]);
    }

    /**
     * Determination the user presence in DB.
     */
    public function testLogin()
    {
        $login = Auth::performingLogin();

        $this->render([$login['view'],
            'message' => $login['message'],
            'userData' => $login
        ]);
    }

    /**
     * Out from logged.
     */
    public function out()
    {
        Auth::userOut();

        $this->render(['auth/login']);
    }
}

