<?php

require_once 'Database.php';

class DatabaseQuery extends Database
{

    private static $_sql;

    // DatabaseQuery::select('*','table',[['username','=','bandox'],[password,'=','admin']]);
    public static function select(array $what, string $from, array $params)
    {
        $this->_sql = "SELECT $what FROM $from WHERE ";

    }
}
