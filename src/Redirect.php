<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Redirect
{
  public static function to($name)
  {
    return header("Location: $name");
  }
}
