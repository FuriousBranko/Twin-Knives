<?php
require_once dirname(__DIR__) . '/config/configuration.php';

unset($_SESSION['user']);

header("Location: index");
?>
