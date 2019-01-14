<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Comment
{
public static function get()
    {
        $sql = "SELECT comment, rate FROM comment ORDER BY RAND() LIMIT 3;";
        $connection = Database::getInstance()->getConnection();
        $result = $connection->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo "<div class=\"item\">
								<div class=\"row\">
									<div class=\"col-md-8 text-center\">
										<p>“ ".$row['comment']." ”</p>
									</div>
                            		<div class=\"author-content\">
                                    	<h3> ".$row['rate']."</h3>
									</div>
                                </div>
                            </div>";
            }
        } else {
            return false;
        }
    }

public static function push(array $data)
{
    $sql = "SELECT code FROM order;";
    $connection = Database::getInstance()->getConnection();
    $result = $connection->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $code[] = $row['code'];
            echo $row['code'];
        }
        }
    foreach($data as $key => $value) {
        $$key = $value;
    }
    if(in_array($codeFK, $code)){
    $sql = "INSERT INTO comment(codeFK, comment, rate)";
    $sql.= "VALUES('$codeFK', '$comment', '$rating');";
    }
}
}