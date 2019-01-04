<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Database {

    protected static $instance;

    protected function __construct() {}

    public static function getInstance()
    {
        if(empty(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host=".DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                self::$instance->query('SET NAMES utf8');
                self::$instance->query('SET CHARACTER SET utf8');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }

}
