<?php
    //
    // define('DB_HOST','169.254.0.2:3306');
    // define('DB_USER','spolnici_branko');
    // define('DB_PASS','0616399branko');
    // define('DB_NAME','spolnici_twinknives');
    //
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','twinknives');
    ini_set('display_errors', 'on');
    ini_set('log_errors', 'on');
    ini_set('display_startup_errors', 'on');
    ini_set('error_reporting', E_ALL);

    spl_autoload_register(function ($className) {
        require_once dirname(__DIR__) . '/src/' . $className . '.php';
    });

    if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
