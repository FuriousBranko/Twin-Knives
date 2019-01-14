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
        } else {
            return false;
        }
    }

    public static function fetchMenu(array $params = ['price' => '', 'diet' => ''])
    {
        $sql = "SELECT * FROM food";
        if(!empty($params)) {
            if($params['diet'] == 'vegan') {
                $sql .= " WHERE diet = 'vegan' ";
            } elseif ($params['diet'] == 'keto') {
                $sql .= " WHERE diet = 'keto' ";
            }

            if($params['price'] == "up") {
                $sql .= " ORDER BY price DESC;";
            } elseif ($params['price'] == "down") {
                $sql .= " ORDER BY price ASC;";
            }
        }
        $connection = Database::getInstance()->getConnection();
        $result = $connection->query($sql);
        $htmlResponse = "";

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $info = json_decode($row['information']);
                ob_start(); ?>
                <div class="menu-listing-1">
                    <div class="col-md-5 menu-image">
                        <div class="menu-inner-image">
                            <a href="<?php echo 'food/'.$row['id'].'/'.$row['name']; ?>"><img src="<?php echo $row['image'];?>" alt="menu image" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-7 menu-content">
                        <h4><a href="<?php echo 'food/'.$row['id'].'/'.$row['name']; ?>"><?php echo $row['name']?></a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p class="price"><a href="#"><span>add</span></a><span>$</span><?php echo $row['price'] ?></p>
                    </div>
                </div>
                <?php $htmlResponse .= ob_get_clean();
            }
        }
        return $htmlResponse;
    }

    public static function fetchSpecial()
    {
        $sql = "SELECT * FROM food";
        $connection = Database::getInstance()->getConnection();
        $result = $connection->query($sql);
        $htmlResponse = "";

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ob_start();
                ?>
                <div class="item wow">
                    <div class="col-md-12 col-sm-12">
                        <div class="hovereffect">
                            <a href="<?php echo 'food/'.$row['id'].'/'.$row['name']; ?>"><img src="<?php echo $row['image']?>" alt="special menu item"></a>
                            <div class="overlay">
                                <h4><?php echo $row['name']; ?></h4>
                                <p><?php echo "Diet: " . $row['diet']; ?></p>
                                <h5>$<?php echo $row['price']; ?></h5>
                                <a href="<?php echo 'food/'.$row['id'].'/'.$row['name']; ?>" class="btn btn-info">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $htmlResponse .= ob_get_clean();
            }
        }
        return $htmlResponse;
    }
}
