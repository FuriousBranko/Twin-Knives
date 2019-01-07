<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Password
{
    // $password is typed by user, if criteria is okay
    // return is hashed password
    public static function new(string $password)
    {
        // if is criteria okay, password is hashed and returned
        return password_hash($password, PASSWORD_DEFAULT);
    }

    // $password -> from user
    // $hash -> fetched from database
    public static function verify(string $password, string $hash)
    {
        if(password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }

}
