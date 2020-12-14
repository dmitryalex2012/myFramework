<?php

include "Controller.php";

class AuthController extends Controller
{
    /**
     * Make authorization
     */
    public function index()
    {
        $userDB = Auth::makeAuth();

        $this->render([$userDB['view'],
//        $this->render(['user/user',
            'userData' => $userDB
        ]);
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

