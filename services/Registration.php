<?php

class Registration
{
    public static function makeRegistration()
    {
        $registration['view'] = 'auth/user';
        $registration['message'] = 'Registered';


        return $registration;
    }
}
