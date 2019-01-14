<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Comment
{
    public static function get()
    {
        $sql = "SELECT comment, rate FROM comment ORDER BY RAND() LIMIT 3;";
        $connection = Database::getInstance()->getConnection();
        $result = $connection->query($sql);
        $rating = 0;
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                switch ($row['rate']) {
                    case 1:
                        $rating= "<img src=\"images/rate1.png\" alt=\"client image\" class=\"img-responsive\">";
                        break;
                    case 2:
                        $rating= "<img src=\"images/rate2.png\" alt=\"client image\" class=\"img-responsive\">";
                        break;
                    case 3:
                        $rating= "<img src=\"images/rate3.png\" alt=\"client image\" class=\"img-responsive\">";
                        break;
                    case 4:
                        $rating= "<img src=\"images/rate4.png\" alt=\"client image\" class=\"img-responsive\">";
                        break;
                    case 5:
                        $rating= "<img src=\"images/rate5.png\" alt=\"client image\" class=\"img-responsive\">";
                        break;
                }
               echo "<div class=\"item\">
                                <div class=\"row\">
                                   <div class=\"col-md-4 client-image\">
                                        ".$rating."
                                   </div>
									<div class=\"col-md-8\">
										<p>“<i> ".$row['comment']." </i>”</p>
									
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
        $sql = "SELECT `code` FROM `order`";
        $connection = Database::getInstance()->getConnection();
        $result = $connection->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $code[] = $row['code'];
            }
        }
        foreach($data as $key => $value) {
            $$key = $value;
        }
        if(in_array($codeFK, $code)){
            $sql = "INSERT INTO comment(codeFK, comment, rate) ";
            $sql.= "VALUES('$codeFK', '$comment', '$rating');";
            if($result = $connection->query($sql)) {
                return true;
            } else {
                return false;
            }
        }
    }
}
