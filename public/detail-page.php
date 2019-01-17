<?php
require_once dirname(__DIR__) . '/config/configuration.php';
$food = Food::fetch($_GET['id']);
if(!$food) {
    Redirect::to("index");
}
?>
<!DOCTYPE html>
<html lang="en">
<base href = "http://localhost/Twin-Knives/public/" />
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
                        <h1>Menu Details</h1>
                        <p><?php echo $food['name']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="special-menu-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6 special-menu-detail-image">
                    <img src="<?php echo $food['image']; ?>" alt="special menu detail image" class="img-responsive">
                </div>
                <div class="col-md-6 special-menu-content">
                    <h3><?php echo $food['name']; ?></h3>
                    <h6><?php echo "Dijeta: " . $food['diet']; ?></h6>
                    <p><?php foreach($food['information'] as $key => $value) {
                        echo ucwords($key) . " : $value <br>";
                    } ?></p>
                    <h4>Price<span><?php echo $food['price'] . "$"; ?></span></h4>
                    <div class="special-menu-btn">
                    <?php if(!Session::exist('user')): ?>
                        <a href="register" class="btn btn-info">Add</a>
                    <?php else: ?>
                        <a href="#" class="btn btn-info">Add</a>
                    <?php endif; ?>
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
