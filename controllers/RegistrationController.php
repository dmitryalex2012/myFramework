<?php

include "Controller.php";
include_once "./services/Registration.php";

class RegistrationController extends Controller
{
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
}

