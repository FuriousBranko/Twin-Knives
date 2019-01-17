<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Session
{
    public static function new($name, $value)
    {
        return $_SESSION[$name] = $value;
    }

    public static function exist($name)
    {
        return (isset($_SESSION[$name])) ? true : false;
    }

    public static function get($name)
    {
      return (isset($_SESSION[$name])) ? $_SESSION[$name] : false;
    }

    public static function cart($id, $amount)
    {
        if(Session::exist('cart')) {
            $_SESSION['cart'][$id] = $amount;
        } else {
            $_SESSION['cart'][$id] = 1;
        }
    }
}
