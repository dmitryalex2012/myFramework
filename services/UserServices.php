<?php

//include_once './models/MyActiveRecord.php';
include_once './models/Users.php';
include_once 'AuthServices.php';

class UserServices
{
    private $users;

    public function __construct()
    {
        $this->users = new Users();
    }

    /**
     * Changing user data.
     *
     * @return string
     */
    public function userDataChanging()
    {
        $user['loginName'] = htmlspecialchars($_POST['userLogin']);
        $user['phone'] = htmlspecialchars($_POST['userPhone']);
        $user['email'] = htmlspecialchars($_POST['userEmail']);
        $user['photo'] = "./../web/photo/" . $_FILES['userPhoto']['name'];

        $oldName = self::getUserFromSession();
        $oldUser = AuthServices::userDataFromDB($oldName);

        if (empty($user['loginName'])) {
            $user['loginName'] = $oldUser['loginName'];
        }

        $this->users->changeRow($oldUser, $user);

        self::changeUserInSession($user['loginName']);

        return $user['loginName'] . " you data is changed.";
    }

    /**
     * Get user name from session.
     *
     * @return mixed
     */
    private static function getUserFromSession()
    {
        session_start();
        return $_SESSION['userName'];
    }

    /**
     * Change user name in session.
     *
     * @param $userName
     */
    public static function changeUserInSession($userName)
    {
        session_start();
        $_SESSION['userName'] = $userName;
    }

    /**
     * Message sending via SMTP server
     *
     * @return string
     */
    public static function sendMessage()
    {
        $to = 'dmitryalex2012@gmail.com';
        $subject = 'RegistrationServices confirmation.';
        $message = 'You data is changed successfully.';
        if (mail($to, $subject, $message)){
            $result = "The message about registration was send successfully on administrator email.";
        } else{
            $result = "The message about registration was not send on administrator email.";
        }

        return $result;
    }
}
