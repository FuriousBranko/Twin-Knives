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
						<h1>About Us</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et vestibulum enim. Curabitur non orci vitae neque convallis.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="about" class="about-us-page">
		<div class="container">
			<div class="row about-respons">
				<div class="col-md-9 ml-auto about-caption-outer">
					<div class="about-caption">
						<img src="images/slider.jpg" alt="about-bg-img" class="img-responsive">
						<h3>We Make Delicious Foods Since 1952.</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
				</div>
			</div>
			<div class="col-md-5 server-img">
				<img src="images/cook.png" class="img-responsive" alt="server-images">
			</div>
		</div>
	</section>


	<section id="our-restaurant" class="about-page-desc">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 about-page-image">
					<div class="col-md-12 our-restaurant-image">
						<img src="images/restaurant_1.jpg" alt="team-image" class="img-responsive">
					</div>
					<div class="col-md-12 our-restaurant-info"="0.6s">
						<h2>Lorem Ipsum</h2>
						<p>Lorem ipsum is simply dummy text of the printing and typesetting industryLorem ipsum is simply dummy text of the printing and typesetting industryLorem ipsum is simply dummy text.Lorem ipsum is simply dummy text of the printing and
							typesetting.Lorem ipsum is simply dummy text of the printing.</p>
					</div>
				</div>
				<div class="col-md-6 about-page-image">
					<div class="col-md-12 our-restaurant-info">
						<h2>Lorem Ipsum</h2>
						<p>Lorem ipsum is simply dummy text of the printing and typesetting industryLorem ipsum is simply dummy text of the printing and typesetting industryLorem ipsum is simply dummy text.Lorem ipsum is simply dummy text of the printing and
							typesetting.Lorem ipsum is simply dummy text of the printing.</p>
					</div>
					<div class="col-md-12 our-restaurant-image">
						<img src="images/restaurant_2.jpg" alt="team-image" class="img-responsive">
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
						<a href="https://demo.drupalfreethemes.com/cdn-cgi/l/email-protection#70191e161f3002150304110502111e045e131f1d"><span class="__cf_email__" data-cfemail="deb7b0b8b19eacbbadaabfabacbfb0aaf0bdb1b3">[email&#160;protected]</span></a><br>
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
