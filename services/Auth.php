<?php

include_once './models/MyActiveRecord.php';

class Auth
{
//    private $db;
//
//    public function __construct()
//    {
//        $this->db = new MyActiveRecord();
//    }

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
     * @return bool
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

        if (!empty($_POST['loginName']) && !empty($_POST['password'])){

            $loginName = $_POST['loginName'];
            $password = $_POST['password'];

            $db = new MyActiveRecord();
            $user = $db->findTableRow('users', 'loginName', $loginName);

            if (!empty($user['loginName'])){
                if ($user['password'] === $password) {
                    $viewFile = 'auth/user';
                    self::userInSession($user['loginName']);

                }
            }
        }

        return $viewFile;
    }

    protected static function userInSession($userName)
    {
        session_start();
        $_SESSION['userName'] = $userName;
    }
}
