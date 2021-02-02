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
     * Makes authorization
     *
     * @return array
     */
    public function index()
    {
        $userDB = $this->auth->makeAuth();

        return $this->render($userDB['view'], [
            'userData' => $userDB
        ]);
    }

    /**
     * Determines the user presence in DB.
     *
     * @return array
     */
    public function testLogin()
    {
        $login = $this->auth->performingLogin();

        return $this->render($login['view'], [
            'message' => $login['message'],
            'userData' => $login
        ]);
    }

    /**
     * Outs from log.
     *
     * @return array
     */
    public function out()
    {
        $this->auth->userOut();

        return $this->render('auth/login', null);
    }
}

