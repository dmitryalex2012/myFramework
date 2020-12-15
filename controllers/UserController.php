<?php

include "Controller.php";
include "./services/User.php";

class UserController extends Controller
{
    /**
     * User data changing.
     */
    public function dataChange()
    {
        $result = User::userDataChanging();

        $sendMail = User::sendMessage();
        $result .= "<br>" . $sendMail;

        $this->render(['user/dataChanged',
            'message' => $result
        ]);
    }
}

