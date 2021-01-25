<?php
include_once './models/MyActiveRecord.php';

class RegistrationServices
{
    /**
     * RegistrationServices performing.
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

        /** The LOGIN should begin from capital letter. */
        if (!preg_match('/^[a-z]/i', $user)){

            $registration['view'] = 'auth/registration';
            $registration['message'] = 'Login should begins from letter.';

        return $registration;
    }

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
                $registration['message'] = "UserServices with login \"$user\" already exists.";

            /** RegistrationServices performing. */
            } else{

                $db->writeTableRow('users', $user, $pass, null, null, null);

                $registration['view'] = 'auth/registrationSuccessful';
                $registration['message'] = "You are registered successfully. <br> Perform login.";
            }
        }

        return $registration;
    }

}
