<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php
    $title = "Registration";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
    require_once dirname(__DIR__) . '/config/configuration.php';
    if(isset($_POST['register'])) {
        User::register($_POST);
    }
?>

<body>
	    <?php require_once 'includes/navigation.php'; ?>
	<section id="top-banner" style="background-image:url('images/slider.jpg'); width: 100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
		<div class="top-banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-7 mx-auto top-banner-caption">
						<h1>Register</h1>
						<p>To be able to order online you need to register.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <div class="row">
        <div class="reservation-form-inner col-md-4 offset-md-4">
        	<h3>Register</h3>
        	<form action="#" method="post">
        		<div class="form-group">
        			<input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" required>
        		</div>
                <div class="form-group">
        			<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name" required>
        		</div>
                <div class="form-group">
        			<input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
        		</div>
        		<div class="form-group">
        			<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
        		</div>
        		<div class="form-group">
        			<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        		</div>
                <div class="form-group">
        			<input type="password" name="rePassword" class="form-control" id="rePassword" placeholder="Confirm Password" required>
        		</div>
        		<div class="form-group">
        			<input type="number" name="phone" class="form-control" id="phone" placeholder="Phone" required>
        		</div>
        		<div class="form-btn text-center">
        			<button type="submit" class="btn btn-info" name="register">Submit</button>
        		</div>
        	</form>
        </div>
    </div>
</body>
</html>
