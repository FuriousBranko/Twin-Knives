<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Validation
{

    public static function login(string $email, string $password)
    {
        $sql = "SELECT id, password FROM users WHERE email = '$email';";
        $result = Database::getInstance()->getConnection()->query($sql);
        $userId = "";
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hash = $row['password'];
                $userId = $row['id'];
            }
        } else {
            // check your email
        }

        if(Password::verify($password, $hash)) {
            return Session::new('user', $userId);
        } else {
            // check your password
        }
    }

    public static function register(array $data)
    {

        $error = 0;

        foreach($data as $key => $value) {
            $$key = $value;
        }

        if($password === $rePassword) {
            $password = Password::new($password);
        } else {
            $error++;
        }

        if(!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $error++;
        }

        if(!$error) {
            $sql = "INSERT INTO users(firstName, lastName, address, phoneNumber, password, email) ";
            $sql.= "VALUES('$firstName', '$lastName', '$address', '$phone', '$password', '$email');";

            if($result = Database::getInstance()->getConnection()->query($sql)) {
                echo "Success!";
            } else {
                echo "Error: " . $sql . "<br>" . Database::getInstance()->getConnection()->error;
            }
        }
    }

}
