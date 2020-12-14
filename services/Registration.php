<?php
include_once './models/MyActiveRecord.php';

class Registration
{
    /**
     * Registration performing.
     *
     * @param $user
     * @param $pass
     * @param $confirmPass
     * @return mixed
     */
    public static function makeRegistration($user, $pass, $confirmPass)
    {
        $registration['view'] = 'auth/registration';
        $registration['message'] = '';

        if (empty($user) || empty($pass) || empty($confirmPass)){

            $registration['view'] = 'auth/registration';
            $registration['message'] = 'Fill all fields.';

        } else {

            $db = new MyActiveRecord();
            $userDB = $db->findTableRow('users', 'loginName', $user);

            if ($pass != $confirmPass) {

                $registration['view'] = 'auth/registration';
                $registration['message'] = 'Input correct password and confirm it.';

            } elseif ($userDB['loginName'] === $user){

                $registration['view'] = 'auth/registration';
                $registration['message'] = "User with login \"$user\" already exists.";

            /** Registration performing. */
            } else{

                $db->writeTableRow('users', $user, $pass, null, null, null);

                $registration['view'] = 'auth/registrationSuccessful';
                $registration['message'] = "You are registered successfully. <br> Perform login.";
            }
        }

        return $registration;
    }

}
