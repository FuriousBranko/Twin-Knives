<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Password
{
    private $_hash = "";
    private $_password = "";
    // $password is typed by user, if criteria is okay
    // return is hashed password
    public static function new($password)
    {
        // if is criteria okay, password is hashed and returned
        return password_hash($password, PASSWORD_DEFAULT);
    }

    // $password -> from user
    // $hash -> fetched from database
    public static function verify($password, $hash)
    {
        if(isset($hash) && isset($password)) {
            $this->_password = $password;
            $this->_hash = $hash;

            if(password_verify($this->_password, $this->_hash)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
