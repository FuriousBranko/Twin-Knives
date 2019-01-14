<!DOCTYPE html>
<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<html lang="en">

<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
    if(isset($_POST['push'])) {
        if(Comment::push($_POST)) {
            $message = "Success.";
        } else {
            $message = "Fail.";
        }
    }
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
                        <p>Something smart in this paragraph</p>
                        <div class="form-btn">
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
                            <input type="text" name="comment" id="comment">
                            <div class="star-rating">

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
                            <div class="form-group">
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
                            Unit price
                        </th>
                        <th id="" class="">
                            Quantity
                        </th>
                        <th id="" class="">
                            Total price
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="row0">
                        <td data-title="Image" class="">
                            <div class="">
                                <img class="" title="" alt="" src="">
                            </div>
                        </td>
                        <td data-title="Name" class="">
                            <p class=""><a class="" href="#">
                                    <!-- Naziv Jela--></a> </p>
                        </td>
                        <td data-title="Unit price" class="">
                            <span class=""><span class="">
                                    <!-- Cena po kom --></span> </span>
                        </td>
                        <td data-title="Quantity" class="">
                            <input id="" type="number" name="" class="" value="1" min="0">
                        </td>
                        <td data-title="Total price" class="">
                            <span class=""><span class="">
                                    <!-- Ukupna Cena --></span> </span>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class=""></td>
                        <td id="" class="">
                            Total
                        </td>
                        <td class="" data-title="Total">
                            <span class="">
                                <!-- Sve ukupno--></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>
<?php require_once 'includes/js.php'; ?>

</html>
