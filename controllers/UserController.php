<?php

include "Controller.php";
include "./services/UserServices.php";

class UserController extends Controller
{
    /**
     * UserServices data changing.
     */
    public function dataChange()
    {
        $result = UserServices::userDataChanging();

        $sendMail = UserServices::sendMessage();
        $result .= "<br>" . $sendMail;

        $this->render(['user/dataChanged',
            'message' => $result
        ]);
    }
}

