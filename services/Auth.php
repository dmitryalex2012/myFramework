<?php

class Auth
{
    public static function checkAuth()
    {
        if ((new Auth)->testLogin()){
            $viewFile = 'modules/auth';
        } else{
            $viewFile = 'site/index';
        }

        return $viewFile;
    }

    private function testLogin()
    {
        /**
         * need to insert login testing
         */
        return true;
    }
}
