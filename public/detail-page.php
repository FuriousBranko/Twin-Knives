<!DOCTYPE html>
<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
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
                        <h1>Menu Details</h1>
                        <p><!-- Ovde ako oces da stavis da ispise Naziv isto, ako ne mozemo ga ostaviti prazno--></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="special-menu-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6 special-menu-detail-image">
                    <img src="images/banner1.jpg" alt="special menu detail image" class="img-responsive">
                </div>
                <div class="col-md-6 special-menu-content">
                    <h3><!-- Naziv--></h3>
                    <h6><!-- Vrsta ( vegan, keto itd ) --></h6>
                    <p><!--Opis i sastojci--></p>
                    <h4>Price<span><!--Cena--></span></h4>
                    <div class="special-menu-btn">
                        <a href="#" class="btn btn-info">Add</a>
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
