<?php

include "Controller.php";
include_once "./services/RegistrationServices.php";

class RegistrationController extends Controller
{
     /**
     * RegistrationServices new user.
     */
    public function registration()
    {
        $user = $_POST['loginName'];
        $pass = $_POST['password'];
        $confirmPass = $_POST['confirmPassword'];
        $registration = RegistrationServices::makeRegistration($user, $pass, $confirmPass);

        $this->render([$registration['view'],
            'message' => $registration['message']
            ]);
    }
}

