<?php

include "Controller.php";
include_once "./services/RegistrationServices.php";

class RegistrationController extends Controller
{
    private $registrationServices;

    public function __construct()
    {
        $this->registrationServices = new RegistrationServices();
    }

    /**
     * RegistrationServices new user.
     */
    public function registration()
    {
        $user = $_POST['loginName'];
        $pass = $_POST['password'];
        $confirmPass = $_POST['confirmPassword'];
        $registration = $this->registrationServices->makeRegistration($user, $pass, $confirmPass);

        $this->render([$registration['view'],
            'message' => $registration['message']
            ]);
    }
}

