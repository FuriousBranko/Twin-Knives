<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class Food
{
    public static function fetch($id)
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

    public static function fetchMenu($params = ['price' => '', 'diet' => ''])
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
        $conn = Database::getInstance()->getConnection();
        $result = $conn->query($sql);
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
                        <?php if(Session::exist('user')): ?>
                            <p class="price"><a href="menu?food=<?php echo $row['id']; ?>"><span>Add</span></a> <span>$</span><?php echo $row['price'] ?></p>
                        <?php else: ?>
                            <p class="price"><a href="registration"><span>Add</span></a> <span>$</span><?php echo $row['price'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $htmlResponse .= ob_get_clean();
            }
        }
        return $htmlResponse;
    }

    public static function fetchSpecial()
    {
        $sql = "SELECT * FROM food LIMIT 5";
        $conn = Database::getInstance()->getConnection();
        $result = $conn->query($sql);
        $htmlResponse = "";

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ob_start();
                ?>
                <div class="item wow">
                    <div class="col-md-12 col-sm-12">
                        <div class="hovereffect">
                            <a href="<?php echo 'food/'.$row['id'].'/'.$row['name']; ?>"><img src="<?php echo "images/".$row['image']?>" alt="special menu item"></a>
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

    public static function addMenu($data)
    {   // array_combine($keys, $values) : array
        $required = ['menuName', 'menuPrice', 'menuDiet', 'menuImg'];
        $conn = Database::getInstance()->getConnection();
        foreach($data as $key => $value) {
            if(in_array($key, $required)) {
                $$key = $conn->escape_string($value);
            } else {
                return false;
            }
        }
        if(isset($data['ingridient']) && isset($data['amount'])) {
            $information = json_encode(array_combine($data['ingridient'], $data['amount']));
        } else {
            return false;
        }

        $sql = "INSERT INTO food(name, price, information, diet, image) ";
        $sql.= "VALUES('$menuName', '$menuPrice', '$information', '$menuDiet', '$menuImg');";

        if($result = Database::getInstance()->getConnection()->query($sql)) {
            return "Success!";
        } else {
            return "Error: " . $sql . "<br>" . Database::getInstance()->getConnection()->error;
        }
    }

    public static function deleteMenu($id)
    {
        $sql = "DELETE FROM food WHERE id = $id;";
        if($result = Database::getInstance()->getConnection()->query($sql)) {
            return "Success!";
        } else {
            return "Error: " . $sql . "<br>" . Database::getInstance()->getConnection()->error;
        }
    }

    public static function showOrder()
    {
        $htmlResponse = "";
        if(!empty(Session::exist('cart'))):
            foreach(Session::get('cart') as $key => $value):
                $food = Food::fetch($key);
            ob_start(); ?>
            <tr class="row0">
                <td data-title="Image" class="">
                    <div class="">
                        <img class="" title="" alt="" src="">
                    </div>
                </td>
                <td data-title="Name">
                    <a href="<?php echo 'food/'.$food['id'].'/'.$food['name'];?>"><?php echo $food['name']; ?></a>
                    <input type="hidden" name="name[]" value="<?php echo $food['name']; ?>">
                </td>
                <td data-title="Amount">
                    <p><?php echo $_SESSION['cart'][$key]; ?></p>
                    <input type="hidden" name="amount[]" value="<?php echo $_SESSION['cart'][$key]; ?>">
                </td>
                <td data-title="Price">
                    <span class=""><?php echo $food['price'] * $_SESSION['cart'][$key]; ?></span>
                    <input type="hidden" name="price[]" value="<?php echo $food['price'] * $_SESSION['cart'][$key]; ?>">
                </td>
            </tr>
            <?php
            endforeach;
            $htmlResponse .= ob_get_clean();
        endif;
        return $htmlResponse;
    }

    public static function addToCart($id, $amount)
    {
        return Session::cart($id, $amount);
    }
}
