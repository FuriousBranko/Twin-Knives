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
}
