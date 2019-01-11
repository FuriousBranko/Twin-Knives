<!DOCTYPE html>
<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<html lang="en">
<?php
    $title = "Login";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
    if(isset($_POST['reset'])) {
        if(User::forgottenPassword($_POST['email'])){
            // true
        } else {
            echo "Try again.";
        }
    }
?>

<body>
    <div class="row">
        <div class="reservation-form-inner col-md-6 offset-md-3">
        	<h3>Forgotten Password<br>Please enter your registered email.</h3>
        	<form action="#" method="post">
        		<div class="form-group">
        			<input type="email" name="email" class="form-control" id="email" placeholder="Email">
        		</div>
        		<div class="form-btn text-center">
                    <button type="submit" name="reset" class="btn btn-info" id="reset">Reset</button>
        		</div>
        	</form>
        </div>
    </div>
</body>
</html>
