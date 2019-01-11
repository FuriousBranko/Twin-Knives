<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Session
{
    public static function new(string $name, $value)
    {
        return $_SESSION[$name] = $value;
    }

    public static function exist(string $name)
    {
        return (isset($_SESSION[$name])) ? true : false;
    }

    public static function get(string $name)
    {
      return (isset($_SESSION[$name])) ? $_SESSION[$name] : false;
    }
}
