<!DOCTYPE html>
<html lang="en">

<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
    $description = "Something very interesting";
    require_once 'includes/headData.php';
?>

<body>
    <?php require_once 'includes/navigation.php'; ?>
	<section id="top-banner" style="background-image:url('images/slider.jpg'); width: 100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
		<div class="top-banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-7 mx-auto top-banner-caption">
						<h1>Contact</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="get-in-touch">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 contact-details">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.31566551444!2d-74.26055712301496!3d40.69714774517821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1528368737139"
					 width="600" height="475" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-4 reservation-form">
					<div class="reservation-form-inner">
						<h3>Contact Form</h3>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="Name" placeholder="Name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" placeholder="Phone NUmber">
							</div>
							<div class="form-group">
								<textarea class="form-control" id="email" placeholder="Message" rows="5"></textarea>
							</div>
							<div class="form-btn text-center">
								<a href="#" class="btn btn-info">Submit</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php require_once 'includes/footer.php' ?>
	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>
<?php require_once 'includes/js.php'; ?>
</html>
