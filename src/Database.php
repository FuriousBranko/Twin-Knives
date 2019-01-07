<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Database
{

    private static $_instance;
    private $_connection;

    private function __construct()
    {
        $this->_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->_connection->error) {
            exit("Error : " . $this->_connection->error);
        }
    }

    // magic method clone is empty to prevent duplication of connection
    private function __clone() {}

    public static function getInstance()
    {
        if(empty(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getConnection()
    {
        return $this->_connection;
    }

    // username or email
    public function login(string $email, string $password)
    {
        $sql = "SELECT password FROM users WHERE email = '$email';";
        $result = $this->_connection->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hash = $row['password'];
            }
        } else {
            // check your email
        }

        if(Password::verify($password, $hash)) {
            echo "Nice";
        } else {
            // check your password
        }

    }

    public function register(array $data)
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

            if($result = $this->_connection->query($sql)) {
                echo "Success!";
            } else {
                echo "Error: " . $sql . "<br>" . $this->_connection->error;
            }
        }
    }

}
