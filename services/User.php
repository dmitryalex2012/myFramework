<?php

include_once './models/MyActiveRecord.php';
include_once 'Auth.php';

class User
{

    public static function changeUserInSession($userName)
    {
        session_start();
        $_SESSION['userName'] = $userName;
    }

    public static function userDataChanging()
    {
        $user['loginName'] = htmlspecialchars($_POST['userLogin']);
        $user['phone'] = htmlspecialchars($_POST['userPhone']);
        $user['email'] = htmlspecialchars($_POST['userEmail']);
        $user['photo'] = htmlspecialchars($_POST['userPhoto']);

        $oldUser = Auth::userDataFromDB($user['loginName']);
//        $pass = $oldUser['password'];

        if (empty($user['loginName'])) {
            $user['loginName'] = $oldUser['loginName'];
        }

        $db = new MyActiveRecord();
        $db->changeTableRow('users', $oldUser, $user);

        return $user['loginName'] . " you data is changed.";
    }

}