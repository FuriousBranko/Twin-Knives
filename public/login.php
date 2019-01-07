<!DOCTYPE html>
<html lang="en">

<?php
    $title = "Login";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
    require_once dirname(__DIR__) . '/config/configuration.php';
    if(isset($_POST['login'])) {
        Database::getInstance()->login($_POST['email'], $_POST['password']);
    }
?>

<body>
    <div class="row">
        <div class="reservation-form-inner col-md-6 offset-md-3">
        	<h3>Login</h3>
        	<form action="#" method="post">
        		<div class="form-group">
        			<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
        		</div>
        		<div class="form-group">
        			<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        		</div>
        		<div class="form-btn text-center">
                    <button type="submit" class="btn btn-info" name="login">Submit</button>
                    <a href="#">Forgotten Password</a>
        		</div>
        	</form>
        </div>
    </div>
</body>
</html>
