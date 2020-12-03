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
//        $viewFile = Auth::performingLogin();
        $login = Auth::performingLogin();

//        $this->render([$viewFile]);

        $this->render([$login['view'],
            'message' => $login['message']
        ]);
    }

    /**
     * Registration new user.
     */
    public function register()
    {
        $user = $_POST['loginName'];
        $pass = $_POST['password'];
        $confirmPass = $_POST['confirmPassword'];
        $registration = Registration::makeRegistration($user, $pass, $confirmPass);

//        $registration['message'] = "1=" . $_POST['loginName'] . "2=" . $_POST['password'] . "3=" . $_POST['confirmPassword'];

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

