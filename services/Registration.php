<?php
include_once './models/MyActiveRecord.php';

class Registration
{
    public static function makeRegistration($user, $pass, $confirmPass)
    {
        $registration['view'] = 'auth/registration';
        $registration['message'] = '';

        if (empty($user) || empty($pass) || empty($confirmPass)){

            $registration['view'] = 'auth/registration';
            $registration['message'] = 'Fill all fields.';

        } else {

//            $userDB = 'Alex';       // NEED
//            $passDB = "12345";      //      DELETE

            $db = new MyActiveRecord();
            $userDB = $db->findTableRow('users', 'loginName', $user);

            if ($pass != $confirmPass) {

                $registration['view'] = 'auth/registration';
                $registration['message'] = 'Input correct password and confirm it.';

            } elseif (($user === $userDB['loginName']) && ($pass) === $userDB['password']) {

                /**
                 * Need to make write to DB new user.
                 */
                $registration['view'] = 'auth/user';
                $registration['message'] = 'You are registered successfully.';

            }
        }

        return $registration;
    }

}
