<?php
    // if(isset($_POST['submit'])) {
    //     if($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
    //         $_SESSION['admin'] = true;
    //         header("Location: index.php");
    //     } else {
    //         $_SESSION['admin'] = false;
    //         header("Location: index.php");
    //     }
    // } else {
    //     $_SESSION['admin'] = false;
    // }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin panel</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
