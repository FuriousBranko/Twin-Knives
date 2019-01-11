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
						<h1>Menu</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="container">
    	<form action="#" method="get" class="serach-form-area">
    		<div class="row justify-content-center">
    			<div class="col-md-3 form-cols">
    				<input type="text" class="form-control" name="search" placeholder="what are you looging for?">
    			</div>
    			<div class="col-md-2 form-cols">
    				<div class="form-group" id="default-selects">
    					<select class="form-control" name="price">
                <option value="1">Price Down</option>
                <option value="2">Price Up</option>
    					</select>

    				</div>
				</div>
    			<div class="col-md-2 form-cols">
    				<div class="form-group" id="default-selects">
    					<select class="form-control" name="price">
                <option value="1">Vegan</option>
                <option value="2">Keto</option>
    					</select>

    				</div>
    			</div>
    			<!-- oces ovako da moze da bira samo 1 sastojak ili vise ? --
    			<div class="col-md-2 form-cols">
					
    				<div class="form-group" id="default-selects2">
              <input type="checkbox" name="diet" value="Egg"> Egg
              <input type="checkbox" name="diet" value="Tomato"> Tomato
              <input type="checkbox" name="diet" value="Beef"> Beef
			  <input type="checkbox" name="diet" value="Chicken"> Chicken
-->

        <button type="button" class="btn btn-default form-group col-md-1 dropdown-toggle" data-toggle="dropdown">Food</button>
<ul class="dropdown-menu">
  <li><input type="checkbox"/>&nbsp;Option 1</a></li>
  <li><input type="checkbox"/>&nbsp;Option 2</a></li>
  <li><input type="checkbox"/>&nbsp;Option 3</a></li>
  <li><input type="checkbox"/>&nbsp;Option 4</a></li>
  <li><input type="checkbox"/>&nbsp;Option 5</a></li>
  <li><input type="checkbox"/>&nbsp;Option 6</a></li>
</ul>


<!-- ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; -->
    				</div>
    			</div>
    			<div class="col-md-2 form-cols">
    				<div class="form-btn ">
    					<button type="submit" class="btn btn-info" name="search">Search</button>
    				</div>
    			</div>
    		</div>
    	</form>
    </section>

	<section class="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Menu</h2>
					<div class="menu-listing-1">
						<div class="col-md-5 menu-image">
							<div class="menu-inner-image">
								<a href="#"><img src="images/thumb2.jpg" alt="menu image" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-md-7 menu-content">
							<h4><a href="detail-page.html">Lorem Ipsum Dolor</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="price"><a href="#"><span>add</span></a><span>$</span>10</p>
						</div>
					</div>
					<div class="menu-listing-1">
						<div class="col-md-5 menu-image">
							<div class="menu-inner-image">
								<img src="images/thumb2.jpg" alt="menu image" class="img-responsive">
							</div>
						</div>
						<div class="col-md-7 menu-content">
							<h4><a href="detail-page.html">Lorem Ipsum Dolor</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="price"><span>$</span>10</p>
						</div>
					</div>
					<div class="menu-listing-1">
						<div class="col-md-5 menu-image">
							<div class="menu-inner-image">
								<img src="images/thumb2.jpg" alt="menu image" class="img-responsive">
							</div>
						</div>
						<div class="col-md-7 menu-content">
							<h4><a href="detail-page.html">Lorem Ipsum Dolor</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="price"><span>$</span>10</p>
						</div>
					</div>
					<div class="menu-listing-1">
						<div class="col-md-5 menu-image">
							<div class="menu-inner-image">
								<img src="images/thumb2.jpg" alt="menu image" class="img-responsive">
							</div>
						</div>
						<div class="col-md-7 menu-content">
							<h4><a href="detail-page.html">Lorem Ipsum Dolor</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="price"><span>$</span>10</p>
						</div>
					</div>
					<div class="menu-listing-1">
						<div class="col-md-5 menu-image">
							<div class="menu-inner-image">
								<img src="images/thumb2.jpg" alt="menu image" class="img-responsive">
							</div>
						</div>
						<div class="col-md-7 menu-content">
							<h4><a href="detail-page.html">Lorem Ipsum Dolor</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="price"><span>$</span>10</p>
						</div>
					</div>
					<div class="menu-listing-1">
						<div class="col-md-5 menu-image">
							<div class="menu-inner-image">
								<img src="images/thumb2.jpg" alt="menu image" class="img-responsive">
							</div>
						</div>
						<div class="col-md-7 menu-content">
							<h4><a href="detail-page.html">Lorem Ipsum Dolor</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="price"><span>$</span>10</p>
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
