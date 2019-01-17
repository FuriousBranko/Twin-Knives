<?php

require_once dirname(__DIR__) . '/config/configuration.php';

class User
{
    public static function login($email, $password)
    {
        $errors = [];
        $sql = "SELECT id, password FROM users WHERE email = '$email';";
        $result = Database::getInstance()->getConnection()->query($sql);
        $userId = "";
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hash = $row['password'];
                $userId = $row['id'];
            }
        } else {
            $errors[] = "Check your email.";
        }

        if(Password::verify($password, $hash)) {
            return Session::new('user', $userId);
        } else {
            $errors[] = "Check your password.";
        }
        return $errors;
    }

    public static function register($data)
    {
        $error = 0;
        $conn = Database::getInstance()->getConnection();
        foreach($data as $key => $value) {
            $$key = $conn->escape_string($value);
        }

        if($password === $rePassword) {
            $password = Password::newSession($password);
        } else {
            $error++;
        }

        if(!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $error++;
        }

        if(!$error) {
            $sql = "INSERT INTO users(firstName, lastName, address, phoneNumber, password, email) ";
            $sql.= "VALUES('$firstName', '$lastName', '$address', '$phone', '$password', '$email');";

            if($result = Database::getInstance()->getConnection()->query($sql)) {
                echo "Success!";
            } else {
                echo "Error: " . $sql . "<br>" . Database::getInstance()->getConnection()->error;
            }
        } else {
            // if have errors
        }
    }

    // return true/false
    // public static function forgottenPassword(string $email)
    // {
    //     $error = 0;
    //
    //     if(!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    //         return false;
    //     }
    //     $sql = "SELECT * FROM users WHERE email = '$email';";
    //     $result = Database::getInstance()->getConnection()->query($sql);
    //
    //     if($result->num_rows > 0) {
    //         $emailHash = md5($email);
    //         $subject = "Password reset";
    //         $message = "Reset your password : <a href=\"forgottenpassword.php&key=$emailHash\"> here </a>";
    //         echo $message;
    //         // if(mail($email, $subject, $message)) {
    //         //     return true;
    //         // }
    //     } else {
    //         // check email
    //     }
    // }

    // oldPassword, newPassword, rePassword, id
    public static function resetPassword($data)
    {
      $required = ['oldPassword', 'newPassword', 'rePassword', 'id'];
      $missingKeys = array_diff_key(array_flip($required), $data);
      $conn = Database::getInstance()->getConnection();
      if(empty($missingKeys)) {
        foreach($data as $key => $value) {
          $$key = $conn->escape_string($value);
        }
      } else {
        return false; // someone change names in form
      }

      if($newPassword === $rePassword) {
        $sql = "SELECT * FROM users WHERE id = '$id';";
        $result = $conn->query($sql);
        // if user exist with that id
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if(Password::verify($oldPassword, $row['password'])) { // if is old password okay
              $newPassword = Password::new($newPassword);
              $sql = "UPDATE users SET password = '$newPassword' WHERE id = '$id';"; // update new password
              if($result = $conn->query($sql)) {
                return true;
              } else {
                return false; // problem with query for update
              }
            } return false; // wrong old password
          }
        } // no user with that id
      }
    }

    public static function data($id, $what)
    {
      $params = "";
      foreach($what as $value) {
        $params .= $value.", ";
      }
      $params = rtrim($params, ', ');
      $sql = "SELECT $params FROM users WHERE id = '$id';";
      $conn = Database::getInstance()->getConnection();
      $result = $conn->query($sql);
      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          return $row;
        }
      } else {
        return false;
      }
    }

    public static function showOrders()
    {
        $htmlResponse = "";
        $sql = "SELECT idOrder, price, idUserFK FROM `order`;";
        $conn = Database::getInstance()->getConnection();
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ob_start(); ?>
                <tr class="row0">
                    <td data-title="Name" class="">
                        <p><?php echo $row['idOrder'] ?></p>
                    </td>
                    <td data-title="Price" class="">
                        <span class=""><?php echo $row['price']; ?></span>
                    </td>
                    <td data-title="UserID" class="">
                        <span class=""><?php echo $row['idUserFK']; ?></span>
                    </td>
                </tr>
                <?php
                $htmlResponse .= ob_get_clean();
            }
        }
        return $htmlResponse;
    }

}
