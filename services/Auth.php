<?php

include_once './models/MyActiveRecord.php';

class Auth
{
    /**Customer authentication.
     *
     * @return string
     */
    public static function makeAuth()
    {
        if (self::testLogin()){
            $viewFile = 'auth/user';
        } else{
            $viewFile = 'auth/login';
        }

        return $viewFile;
    }

    /**
     * User login testing.
     *
     * @return array
     */
    public static function testLogin()
    {
        session_start();
        if (isset($_SESSION['userName'])){
            $result = $_SESSION['userName'];
        } else {
            $result = null;
        }

        return $result;
    }

    /**Performing customer login.
     *
     * @return string
     */
    public static function performingLogin()
    {
        $viewFile = 'auth/login';

        if (!empty($_POST['loginName']) && !empty($_POST['password']) && isset($_POST['login'])){

            $loginName = htmlspecialchars($_POST['loginName']);
            $password = htmlspecialchars($_POST['password']);

            $db = new MyActiveRecord();
            $user = $db->findTableRow('users', 'loginName', $loginName);

            if (!empty($user['loginName'])){
                if ($user['password'] === $password) {
                    $viewFile = 'auth/user';
                    self::userInSession($user['loginName']);

                }
            }
        } elseif (isset($_POST['registration'])){
            $viewFile = 'auth/registration';
        }

        return $viewFile;
    }

    /**
     * Write user in Session
     *
     * @param $userName
     */
    protected static function userInSession($userName)
    {
        session_start();
        $_SESSION['userName'] = $userName;
    }
}
