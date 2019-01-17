<?php

class Redirect
{
  public static function to($name)
  {
    return header("Location: " . $name);
  }
}
