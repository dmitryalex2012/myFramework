<?php

include "Controller.php";

class AuthController extends Controller
{
    /**
     * Make authorization
     */
    public function index()
    {
        $userDB = AuthServices::makeAuth();

        $this->render([$userDB['view'],
            'userData' => $userDB
        ]);
    }

    /**
     * Determination the user presence in DB.
     */
    public function testLogin()
    {
        $login = AuthServices::performingLogin();

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
        AuthServices::userOut();

        $this->render(['auth/login']);
    }
}

