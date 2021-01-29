<?php

include_once './models/Users.php';

class AuthServices
{
    public $users;

    public function __construct()
    {
        $this->users = new Users();
    }

    /**
     * Customer authentication.
     *
     * @return array
     */
    public function makeAuth()
    {
        if (self::findLogin()){

            $login = self::findLogin();
            $userDB = self::userDataFromDB($login['name']);
            $userDB['view'] = 'user/user';

        } else{

            $userDB['view'] = 'auth/login';

        }

        return $userDB;
    }

    /**
     * Gets user data.
     *
     * @return array
     */
    public function findLogin()
    {
        session_start();

        if (isset($_SESSION['userName'])){

            $userDB = self::userDataFromDB($_SESSION['userName']);
            $user['photo'] = $userDB['photo'];
            $user['name'] = $_SESSION['userName'];

        } else {

            $user = null;

        }

        return $user;
    }

    /**
     * Performs customer login.
     *
     * @return array
     */
    public  function performingLogin()
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

                $login = $userDB;
                $login['view'] = 'user/user';

                self::userInSession($userDB['loginName']);

            }

        } elseif (isset($_POST['registration'])){

            $login['view'] = 'auth/registration';
            $login['message'] = null;

        }

        return $login;
    }

    /**
     * Writes user in Session.
     *
     * @param $userName
     */
    public function userInSession($userName)
    {
        session_start();
        $_SESSION['userName'] = $userName;
    }

    /**
     * Deletes user from Session.
     */
    public function userOut()
    {
        session_start();
        unset($_SESSION['userName']);
    }

    /**
     * Gets user data from DB.
     *
     * @param $loginName
     * @return mixed
     */
    public function userDataFromDB($loginName)
    {
        return $this->users->findRow('loginName', $loginName);
    }

}
