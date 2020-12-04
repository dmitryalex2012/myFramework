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
     * @return array
     */
    public static function performingLogin()
    {
        $login['view'] = 'auth/login';
        $login['message'] = 'Fill all fields.';

        $loginName = htmlspecialchars($_POST['loginName']);
        $password = htmlspecialchars($_POST['password']);

        if (!empty($loginName) && !empty($password)){

            $db = new MyActiveRecord();
            $userDB = $db->findTableRow('users', 'loginName', $loginName);

            if (($userDB['loginName'] === $loginName) && ($userDB['password'] === $password)){

                $login['view'] = 'auth/user';
                $login['message'] = null;
                self::userInSession($userDB['loginName']);

            } elseif(($userDB['loginName'] != $loginName) || ($userDB['password'] != $password)){

                $login['view'] = 'auth/login';
                $login['message'] = 'Illegal login or password.';

            }

        } elseif (isset($_POST['registration'])){

            $login['view'] = 'auth/registration';
            $login['message'] = null;

        }

        return $login;
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

    /**
     * Delete user from Session
     */
    public static function userOut()
    {
        session_start();
        unset($_SESSION['userName']);
    }
}
