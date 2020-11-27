<?php

include './models/MyActiveRecord.php';

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
        if (self::isLogged()){
            $viewFile = 'auth/user';
        } else{
            $viewFile = 'auth/login';
        }

        return $viewFile;
    }

    /**Is customer logged yet?
     *
     * @return bool
     */
    private static function isLogged()
    {
//        session_start();
//        unset($_SESSION['customerLogged']);

        session_start();
        if (isset($_SESSION['customerLogged'])){
            $result = true;
        } else{
            $result = false;
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
                    self::userInSession();

                }
            }
        }

        return $viewFile;
    }

    protected static function userInSession()
    {
        session_start();
        $_SESSION['customerLogged'] = '';
    }

}
