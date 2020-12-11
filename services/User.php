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
        $name = htmlspecialchars($_POST['userLogin']);
        $phone = htmlspecialchars($_POST['userPhone']);
        $email = htmlspecialchars($_POST['userEmail']);
        $photo = htmlspecialchars($_POST['userPhoto']);

        $oldUser = Auth::userDataFromDB($name);
        $pass = $oldUser['password'];

        if (empty($user['name'])) {
            $user['name'] = 'No name';
        }

        $db = new MyActiveRecord();
        $db->changeTableRow('users', $oldUser['loginName'], $name, $pass, $phone, $email, $photo);

        return $user['name'] . " you data is changed.";
    }

}