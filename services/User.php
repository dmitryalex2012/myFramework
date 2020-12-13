<?php

include_once './models/MyActiveRecord.php';
include_once 'Auth.php';

class User
{

    /**
     *
     * NEED TO TEST THE PRESENCE OF THE USER WITH NAME WHICH WAS INPUTTED!!!!!
     *
    */

    public static function userDataChanging()
    {
        $user['loginName'] = htmlspecialchars($_POST['userLogin']);
        $user['phone'] = htmlspecialchars($_POST['userPhone']);
        $user['email'] = htmlspecialchars($_POST['userEmail']);
        $user['photo'] = "./../web/photo/" . $_FILES['userPhoto']['name'];

        $oldName = self::getUserFromSession();
        $oldUser = Auth::userDataFromDB($oldName);

        if (empty($user['loginName'])) {
            $user['loginName'] = $oldUser['loginName'];
        }

        $db = new MyActiveRecord();
        $db->changeTableRow('users', $oldUser, $user);

        self::changeUserInSession($user['loginName']);

        return $user['loginName'] . " you data is changed.";
    }

    private static function getUserFromSession()
    {
        session_start();
        return $_SESSION['userName'];
    }

    public static function changeUserInSession($userName)
    {
        session_start();
        $_SESSION['userName'] = $userName;
    }
}