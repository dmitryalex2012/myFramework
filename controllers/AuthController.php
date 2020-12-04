<?php

include "Controller.php";
include_once "./services/Registration.php";

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
            'message' => $login['message']
        ]);
    }

    /**
     * Registration new user.
     */
    public function registration()
    {
        $user = $_POST['loginName'];
        $pass = $_POST['password'];
        $confirmPass = $_POST['confirmPassword'];
        $registration = Registration::makeRegistration($user, $pass, $confirmPass);

        $this->render([$registration['view'],
            'message' => $registration['message']
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

