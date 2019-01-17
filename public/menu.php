<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
    if(isset($_GET['food'])) {
        $id = $_GET['food'];
        if(isset($_SESSION['cart'][$id])) {
            $a = $_SESSION['cart'][$id];
            Food::addToCart($id, ++$a);
        } else {
            Food::addToCart($id, 1);
        }
        $message = "Added to the cart. <a href=\"order\"> List of orders </a>";
    }
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
                        <p><?php echo (isset($message)) ? $message : ""; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="container">
    	<form action="#" method="get" class="serach-form-area">
    		<div class="row justify-content-center">
    			<!-- <div class="col-md-3 form-cols">
    				<input type="text" class="form-control" name="search" placeholder="what are you looging for?">
    			</div> -->
    			<div class="col-md-2 form-cols">
    				<div class="form-group" id="default-selects">
                        <label for="price">Price: </label>
    					<select class="form-control" name="price" id="price">
                            <option value="any" hidden>Any</option>
                            <option value="down">Price Down</option>
                            <option value="up">Price Up</option>
    					</select>

    				</div>
				</div>
    			<div class="col-md-2 form-cols">
    				<div class="form-group" id="default-selects">
                        <label for="diet">Diet: </label>
    					<select class="form-control" name="diet" id="diet">
                            <option value="any" hidden>Any</option>
                            <option value="vegan">Vegan</option>
                            <option value="keto">Keto</option>
    					</select>

    				</div>
    			</div>
                <!-- <button type="button" class="btn btn-default form-group col-md-1 dropdown-toggle" data-toggle="dropdown">Food</button> -->
                <!-- <ul class="dropdown-menu">
                  <li><input type="checkbox"/>&nbsp;Option 1</a></li>
                  <li><input type="checkbox"/>&nbsp;Option 2</a></li>
                  <li><input type="checkbox"/>&nbsp;Option 3</a></li>
                  <li><input type="checkbox"/>&nbsp;Option 4</a></li>
                  <li><input type="checkbox"/>&nbsp;Option 5</a></li>
                  <li><input type="checkbox"/>&nbsp;Option 6</a></li>
                </ul> -->
                <div class="col-md-2 form-cols">
                    <div class="form-btn">
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
					<?php echo (isset($_GET['price']) or isset($_GET['diet'])) ? Food::fetchMenu($_GET) : Food::fetchMenu(); ?>
				</div>
			</div>
		</div>
	</section>

    <?php require_once 'includes/footer.php' ?>
	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>
<?php require_once 'includes/js.php'; ?>
</html>
