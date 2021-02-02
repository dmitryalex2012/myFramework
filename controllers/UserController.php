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
     *
     * @return array
     */
    public function dataChange()
    {
        $result = $this->userServices->userDataChanging();

        $sendMail = $this->userServices->sendMessage();
        $result .= "<br>" . $sendMail;

        return $this->render('user/dataChanged', [
            'message' => $result
        ]);
    }
}
