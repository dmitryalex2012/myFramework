<?php

include "Controller.php";
include_once "./services/AuthServices.php";

class AuthController extends Controller
{
    public $auth;

    public function __construct()
    {
        $this->auth = new AuthServices();
    }

    /**
     * Make authorization
     */
    public function index()
    {
        $userDB = $this->auth->makeAuth();

        $this->render([$userDB['view'],
            'userData' => $userDB
        ]);
    }

    /**
     * Determination the user presence in DB.
     */
    public function testLogin()
    {
        $login = $this->auth->performingLogin();

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
        $this->auth->userOut();

        $this->render(['auth/login']);
    }
}

