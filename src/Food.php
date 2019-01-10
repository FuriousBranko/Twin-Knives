<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Food
{

    public static function fetch(int $id)
    {
        $sql = "SELECT * FROM food WHERE id = $id;";
        $result = Database::getInstance()->getConnection()->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $row['information'] = json_decode($row['information']);
                return $row;
            }
        }
    }

}
