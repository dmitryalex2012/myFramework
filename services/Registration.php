<?php

class Registration
{
    public static function makeRegistration($user, $pass, $confirmPass)
    {
        if (empty($user) || empty($pass) || empty($confirmPass)){

            $registration['view'] = 'auth/registration';
            $registration['message'] = 'Fill all fields.';

        } else{

            $registration['view'] = 'auth/user';
            $registration['message'] = 'Registered';

        }

        return $registration;
    }
}
