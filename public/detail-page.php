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
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
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
                    <h3>Proin convallis tellus erat</h3>
                    <h6>Proin ante augue</h6>
                    <p>Phasellus ac tempus purus, in elementum ex. Sed vulputate ex augue, at malesuada lacus malesuada
                        quis. Aenean convallis ultrices massa, molestie gravida diam viverra eget. Aliquam rutrum
                        fringilla venenatis. Maecenas mattis sit amet ante quis euismod. Ut tempus congue porta.
                        Aliquam at sapien at est pretium aliquet in nec leo. Vestibulum felis nunc, placerat et
                        consectetur ac, pulvinar quis quam.</p>
                    <h4>Price<span>$25</span></h4>
                    <div class="special-menu-btn">
                        <a href="#" class="btn btn-info">Non Veg</a>
                        <a href="#" class="btn btn-info">Indian</a>
                        <a href="#" class="btn btn-info">Main Course</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="special-menu">
        <div class="container">
            <div class="row">
                <div class="owl-carousel special-menu-carousel">
                    <div class="item">
                        <div class="col-md-12 col-sm-12 special-menu-items">
                            <div class="hovereffect">
                                <a href="#"><img src="images/thumb1.jpg" alt="special menu item"></a>
                                <div class="overlay">
                                    <h4>LOREM IPSUM</h4>
                                    <p>CATEGORY</p>
                                    <h5>$25</h5>
                                    <a href="#" class="btn btn-info">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 col-sm-12 special-menu-items">
                            <div class="hovereffect">
                                <a href="#"><img src="images/thumb2.jpg" alt="special menu item"></a>
                                <div class="overlay">
                                    <h4>LOREM IPSUM</h4>
                                    <p>CATEGORY</p>
                                    <h5>$25</h5>
                                    <a href="#" class="btn btn-info">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 col-sm-12 special-menu-items">
                            <div class="hovereffect">
                                <a href="#"><img src="images/thumb3.jpg" alt="special menu item"></a>
                                <div class="overlay">
                                    <h4>LOREM IPSUM</h4>
                                    <p>CATEGORY</p>
                                    <h5>$25</h5>
                                    <a href="#" class="btn btn-info">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 col-sm-12 special-menu-items">
                            <div class="hovereffect">
                                <a href="#"><img src="images/thumb4.jpg" alt="special menu item"></a>
                                <div class="overlay">
                                    <h4>LOREM IPSUM</h4>
                                    <p>CATEGORY</p>
                                    <h5>$25</h5>
                                    <a href="#" class="btn btn-info">VIEW</a>
                                </div>
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
