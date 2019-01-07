<!DOCTYPE html>
<html lang="en">

<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
?>

<body>
<div class="reservation-form-inner">
						<h3>Register</h3>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="username" placeholder="Name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
                            <div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Confirm Password">
							</div>
							<div class="form-group">
								<input type="number" min="8" max="11" class="form-control" id="phone" placeholder="Phone">
							</div>
							<div class="form-btn text-center">
								<a href="#" class="btn btn-info">Submit</a>
							</div>
						</form>
					</div>
</body>
</html>