<!DOCTYPE html>
<html lang="en">

<?php
    $title = "Login";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
    require_once dirname(__DIR__) . '/config/configuration.php';
    if(isset($_POST['submit'])) {
        $a = Database::getInstance()->login($_POST['email'], $_POST['password']);
    }
?>

<body>
<div class="reservation-form-inner">
	<h3>Login</h3>
	<form action="#" method="post">
		<div class="form-group">
			<input type="email" name="email" class="form-control" id="email" placeholder="Email">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" id="password" placeholder="Password">
		</div>
		<div class="form-btn text-center">
            <input type="submit" name="submit" class="btn btn-info" value="Login"><br>
            <a href="#">Forgotten Password</a>
		</div>
	</form>
</div>
</body>
</html>
