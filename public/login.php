<?php
    require_once dirname(__DIR__) . '/config/configuration.php';
    if(isset($_POST['login'])) {
        User::login($_POST['email'], $_POST['password']);
    }
    if(!Session::exist('user')):
?>
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
    <?php require_once 'includes/navigation.php'; ?>
	<section id="top-banner" style="background-image:url('images/slider.jpg'); width: 100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
		<div class="top-banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-7 mx-auto top-banner-caption">
						<h1>Login</h1>
						<p>To be able to order online you need to login!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <div id="container">
            <div class="reservation-form-inner col-md-4 offset-md-4">
            	<h3>Login</h3>
            	<form action="login" method="post">
            		<div class="form-group">
            			<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            		</div>
            		<div class="form-group">
            			<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            		</div>
            		<div class="form-btn text-center">
                        <button type="submit" class="btn btn-info" name="login">Submit</button><br>
                        <a href="registration">Register</a>
                        <a href="forgottenpassword">Forgotten Password</a>
            		</div>
            	</form>
            </div>
    </div>
</body>
<?php
    else:
        Redirect::to("index");
    endif;
?>
</html>
