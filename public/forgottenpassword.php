<!DOCTYPE html>
<html lang="en">

<?php
    $title = "Login";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
?>

<body>
<div class="reservation-form-inner">
						<h3>Forgotten Password<br>Please enter your registered email.</h3>
						<form>
							<div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-btn text-center">
                            <button type="submit" class="btn btn-info" id="login">Login</button>
							</div>
						</form>
					</div>
</body>
</html>