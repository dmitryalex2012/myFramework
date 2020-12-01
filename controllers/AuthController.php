<?php
include "Controller.php";
include "./services/Registration.php";

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
        $viewFile = Auth::performingLogin();

        $this->render([$viewFile]);
    }

    /**
     * Registration new user.
     */
    public function register()
    {
        /**
         * Need to make!
         */
        $registration = Registration::makeRegistration();

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

