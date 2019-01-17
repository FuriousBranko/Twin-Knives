<?php
    require_once dirname(__DIR__) . '/config/configuration.php';
    if(isset($_POST['push'])) {
        if(Comment::push($_POST)) {
            $message = "Success.";
        } else {
            $message = "Fail.";
        }
    }
    if(Session::exist('user')) {
        $user = User::data(Session::get('user'), ['firstName', 'lastName', 'email', 'address', 'phoneNumber']);
        $user['fullName'] = $user['firstName'] . " " . $user['lastName'];
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
<style>
.star-rating {
    direction: rtl;
}
.star-rating input[type="radio"] {
    display: none;
}
.star-rating > label {
    color: #ccc;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    cursor: pointer;
    font-size: 50px;
}
.star-rating > label:hover,
.star-rating > label:hover ~ label,
.star-rating > input[type="radio"]:checked ~ label{
    color: #f2b600;
}
</style>
<body>
    <?php require_once 'includes/navigation.php'; ?>
    <section id="top-banner" style="background-image:url('images/slider.jpg'); width: 100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
        <div class="top-banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto top-banner-caption">
                        <h1>Order</h1>
                        <p>See your orders</p>
                        <p>Don't forget to comment</p>
                        <div class="form-btn plus">
                            <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#newcomment">Comment</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div id="newcomment" class="modal fade" role="dialog">
            <div class="modal-dialog col-md-2">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Comment</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="number" name="codeFK" class="form-control" id="codeFK" placeholder="Order Code">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="comment" id="comment">
                            </div>
                            <div class="star-rating text-center">

                                <input id="star-5" type="radio" name="rating" value="5">
                                <label for="star-5" title="5 stars">
                                    <i class="fa fa-star fa-xs"></i>
                                </label>

                                <input id="star-4" type="radio" name="rating" value="4">
                                <label for="star-4" title="4 stars">
                                    <i class="fa fa-star fa-xs"></i>
                                </label>

                                <input id="star-3" type="radio" name="rating" value="3">
                                <label for="star-3" title="3 stars">
                                    <i class="fa fa-star fa-xs"></i>
                                </label>

                                <input id="star-2" type="radio" name="rating" value="2">
                                <label for="star-2" title="2 stars">
                                    <i class="fa fa-star fa-xs"></i>
                                </label>

                                <input id="star-1" type="radio" name="rating" value="1">
                                <label for="star-1" title="1 star">
                                    <i class="fa fa-star fa-xs"></i>
                                </label>

                            </div>
                            <div class="form-group plus">
                                <div class="form-btn text-center">
                                    <button type="submit" class="btn btn-info" name="push">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </section>
    <div class="container">
        <div id="" class="">
            <br>
            <table class="table table-striped table-hover" width="100%">
                <thead>
                    <tr>
                        <th id="" class="">
                            Image
                        </th>
                        <th id="" class="">
                            Name
                        </th>
                        <th id="" class="">
                            Amount
                        </th>
                        <th id="" class="">
                            Price
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php echo Food::showOrder(); ?>
                </tbody>

                <tfoot>
                    <form action="index" method="post">
                        <label for="name">Full name:</label>
                        <input type="text" name="name" value="<?php echo $user['fullName']; ?>" id="name"><br>
                        <label for="address">Adress:</label>
                        <input type="text" name="address" value="<?php echo $user['address']; ?>" id="address"><br>
                        <label for="email">Email:</label>
                        <input type="text" name="email" value="<?php echo $user['email']; ?>" id="email"><br>
                        <label for="phone">Phone Number:</label>
                        <input type="text" name="phone" value="<?php echo $user['phoneNumber']; ?>" id="phone">
                    </form>
                </tfoot>
            </table>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>
<?php require_once 'includes/js.php'; ?>

</html>
