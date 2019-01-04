<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Password {

    private $_password;

    // $password is typed by user, if criteria is okay
    // return is hashed password
    public function new(string $password)
    {
        // if is criteria okay, password is hashed and returned
        return password_hash($password, PASSWORD_DEFAULT);
    }

    // $password -> from user
    // $hash -> fetched from database
    public function verify(string $password, string $hash)
    {
        if(password_verify($password, $hash)) {
            // logged in
        } else {
            // redirected
        }
    }

}
