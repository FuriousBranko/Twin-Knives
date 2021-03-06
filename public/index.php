<?php
    require_once dirname(__DIR__) . '/config/configuration.php';
    if(isset($_POST['order'])) {
        // need to create function for adding this values into db;
    }
?>
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
	<?php require_once 'includes/navigation.php'; ?>
	<section id="head">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="background-image: url('images/banner.jpg')">
				<div class="carousel-caption">
					<span class="wow fadeInUp">Welcome to</span>
					<h2 class="fonthead wow fadeInUp">Twin Knives</h2>
					<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
						ut labore.</p>
					<a href="menu" class="btn btn-info view-btn wow fadeInUp">VIEW MENU</a>
				</div>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="container">
			<div class="row about-respons">
				<div class="col-md-9 ml-auto about-caption-outer fadeInLeft" data-wow-delay="0.9s">
					<div class="about-caption">
						<img src="images/slider.jpg" alt="about-bg-img" class="img-responsive">
						<h3>We Make Delicious Foods Since 1952.</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
							aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
							dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
				</div>
			</div>
			<div class="col-md-5 server-img wow fadeInUp">
				<img src="images/cook.png" class="img-responsive" alt="server-images">
			</div>
		</div>
	</section>

	<section id="special-menu">
		<div class="container">
			<div class="col-md-12 text-center special-menu-title ">
				<h2>Restau<span>rant</span></h2>
				<h3>special</h3>
			</div>
			<div class="row">
				<div class="owl-carousel special-menu-carousel">
                    <?php echo Food::fetchSpecial(); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="our-clients">
		<div class="container">
			<div class="row">
				<div class="col-md-3 mx-auto text-center wow fadeInUp">
					<h2>Food <span>REVIEWS</span></h2>
				</div>
				<div class="col-md-12 wow fadeInUp">
					<div class="clients-bg">
						<div class="loop owl-carousel owl-theme">
							<?php
							Comment::get();
                			?>
						</div>
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
