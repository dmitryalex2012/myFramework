<?php

include "Controller.php";
include_once "./services/UserServices.php";

class UserController extends Controller
{
    private $userServices;

    public function __construct()
    {
        $this->userServices = new UserServices();
    }

    /**
     * Calls service for changing user data and send message to user mail.
     */
    public function dataChange()
    {
        $result = $this->userServices->userDataChanging();

        $sendMail = $this->userServices->sendMessage();
        $result .= "<br>" . $sendMail;

        $this->render(['user/dataChanged',
            'message' => $result
        ]);
    }
}

