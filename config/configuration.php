<?php

    // define('DB_HOST','169.254.0.2:3306');
    // define('DB_USER','spolnici_branko');
    // define('DB_PASS','0616399branko');
    // define('DB_NAME','spolnici_twinknives');

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','twinknives');


    spl_autoload_register(function ($class_name) {
        require_once dirname(__DIR__) . '/src/' . $class_name . '.php';
    });

    if(!isset($_SESSION)) {
        session_start();
    }
