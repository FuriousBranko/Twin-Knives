<!DOCTYPE html>
<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<html lang="en">

<?php
    $title = "TwinKnives";
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
						<h1>Reservation</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="facilities">
		<div class="container">
			<div class="row hall-reservation">
				<div class="col-md-6 reservation-image">
					<img src="images/restaurant.jpg" alt="team-image" class="img-responsive">
				</div>
				<div class="col-md-6 reservation-time">
					<div class="col-md-4 mx-auto text-center">
						<h2>Hall <span>Lorem</span></h2>
					</div>
					<p>Aenean eget mauris finibus, sollicitudin lorem sit amet, feugiat purus. Vestibulum tincidunt sollicitudin lacus, at luctus ante mollis eget. In euismod turpis placerat malesuada venenatis. Phasellus quis volutpat nisl.</p>
					<p><strong>Private Room Size:</strong> 700 SQ Feet</p>
					<p><strong>Capacity:</strong> 50 seated, 60 standing</p>
					<div class="reservation-btn text-center">
						<a href="#reservation" class="btn btn-info page-scroll">Book Now</a>
					</div>
				</div>
			</div>
			<div class="row hall-reservation">
				<div class="col-md-6 reservation-time">
					<div class="col-md-4 mx-auto text-center">
						<h2>Bar <span>Lorem</span></h2>
					</div>
					<p>Aenean eget mauris finibus, sollicitudin lorem sit amet, feugiat purus. Vestibulum tincidunt sollicitudin lacus, at luctus ante mollis eget. In euismod turpis placerat malesuada venenatis. Phasellus quis volutpat nisl.</p>
					<p><strong>Private Room Size:</strong> 700 SQ Feet</p>
					<p><strong>Capacity:</strong> 50 seated, 60 standing</p>
					<div class="reservation-btn text-center">
						<a href="#reservation" class="btn btn-info page-scroll">Book Now</a>
					</div>
				</div>
				<div class="col-md-6 reservation-image">
					<img src="images/bar.jpg" alt="team-image" class="img-responsive">
				</div>
			</div>
		</div>
	</section>

	<section id="menu-page-about" style="background-image:url('images/banner2.jpg'); width: 100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
		<div class="menu-page-about-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-7 mx-auto menu-page-about-caption">
						<h2>Lorem Ipsum</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="facilities">
		<div class="container">
			<div class="row hall-reservation">
				<div class="col-md-6 reservation-image">
					<img src="images/dish.jpg" alt="team-image" class="img-responsive">
				</div>
				<div class="col-md-6 reservation-time">
					<div class="col-md-4 mx-auto text-center">
						<h2>Food <span>Lorem</span></h2>
					</div>
					<p>Vestibulum felis nunc, placerat et consectetur ac, pulvinar quis quam. Maecenas porttitor nec risus eu ullamcorper. Integer faucibus nunc ut bibendum faucibus. Duis in eleifend erat.</p>
					<p>Pellentesque tristique elit eget interdum varius. Vestibulum lectus enim, consectetur vel nunc eu, commodo varius enim.</p>
					<div class="reservation-btn text-center">
						<a href="#reservation" class="btn btn-info page-scroll">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="reservation" style="background-image: url('images/slider.jpg'); width:100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
		<div class="reservation-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mr-auto restaurant-info">
						<p>For catering inquiries / Hall Reservation</p>
						<h6>Contact <span>Restaurant</span></h6>
						<h6>123-456-7890</h6>
						<a href="https://demo.drupalfreethemes.com/cdn-cgi/l/email-protection#462f28202906342335322733342728326825292b"><span class="__cf_email__" data-cfemail="61080f070e2113041215001413000f154f020e0c">[email&#160;protected]</span></a><br>
						<a href="#">www.restaurant.com</a>
					</div>
					<div class="col-md-5 reservation-form">
						<div class="reservation-form-inner">
							<h3>Reservation</h3>
							<form>
								<div class="row">
									<div class="col-md-6 form-field">
										<div class="form-group">
											<input type="text" class="form-control" id="Name" placeholder="Name">
										</div>
									</div>
									<div class="col-md-6 form-field">
										<div class="form-group">
											<input type="email" class="form-control" id="email" placeholder="Email">
										</div>
									</div>
									<div class="col-md-6 form-field">
										<div class="form-group">
											<input class="form-control" type="text" value="" id="datepicker" readonly="" placeholder="Date" name="datetime_return" required="">
										</div>
									</div>
									<div class="col-md-6 form-field">
										<div class="form-group">
											<input type="time" class="form-control" placeholder="Time" id="appt-time" name="appt-time">
										</div>
									</div>
									<div class="col-md-6 form-field">
										<div class="form-group">
											<select name="party-size" class="form-control" id="name" placeholder="Party-Size">
												<option>Party size</option>
												<option value="5">5</option>
												<option value="10">10</option>
												<option value="20">20</option>
												<option value="30">30</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 form-field">
										<div class="form-group">
											<select name="Hall Reservation" class="form-control" id="name" placeholder="Party-Size">
												<option>Hall Reservation</option>
												<option value="5">1</option>
												<option value="10">2</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-btn text-center">
									<a href="#" class="btn btn-info">Submit</a>
								</div>
							</form>
						</div>
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
