<?php

include_once './models/MyActiveRecord.php';

class Auth
{
    /**Customer authentication.
     *
     * @return array
     */
    public static function makeAuth()
    {
        if (self::findLogin()){

            $login = self::findLogin();
            $userDB = self::userDataFromDB($login);
            $userDB['view'] = 'auth/user';

        } else{

            $userDB['view'] = 'auth/login';

        }

        return $userDB;
    }

    /**
     * User login testing.
     *
     * @return array
     */
    public static function findLogin()
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
        $login = [
            'view' => 'auth/login',
            'message' => 'Fill all fields.',
            'loginName' => null,
            'phone' => null,
            'email' => null,
            'photo' => null
        ];


        $loginName = htmlspecialchars($_POST['loginName']);
        $password = htmlspecialchars($_POST['password']);

        if (!empty($loginName) && !empty($password)){

            $userDB = self::userDataFromDB($loginName);

            if(($userDB['loginName'] != $loginName) || ($userDB['password'] != $password)){

                $login['view'] = 'auth/login';
                $login['message'] = 'Illegal login or password.';

            } elseif (($userDB['loginName'] === $loginName) && ($userDB['password'] === $password)){

                $login = self::userDataFromDB($loginName);
                $login['view'] = 'auth/user';

                self::userInSession($userDB['loginName']);

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

    /**
     * Get user data from DB
     *
     * @param $loginName
     * @return mixed
     */
    public static function userDataFromDB($loginName)
    {
        $db = new MyActiveRecord();
        return $db->findTableRow('users', 'loginName', $loginName);
    }

}
