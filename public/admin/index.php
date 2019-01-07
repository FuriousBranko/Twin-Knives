<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<html lang="en">
<?php
    $title = "Admin Panel";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once '../includes/headData.php';
?>
<body>
    <div class="reservation-form-inner">
    	<h3>Login</h3>
    	<form>
    		<div class="form-group">
    			<input type="text" class="form-control" id="username" placeholder="Admin Meister">
    		</div>
    		<div class="form-group">
    			<input type="password" class="form-control" id="password" placeholder="Password">
    		</div>
    		<div class="form-btn text-center">
    			<a href="#" class="btn btn-info">Login</a><br>
    		</div>
    	</form>
    </div>
</body>
</html>
