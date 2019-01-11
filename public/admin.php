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
                        <h1>Admin Panel</h1>
                        <p>LMAO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="form-btn">
        <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#menuAdd">Add menu</button>
    </div>
    <!-- Modal -->
    <div id="menuAdd" class="modal fade" role="dialog">
        <div class="modal-dialog col-md-2">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Menu</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="menuName" class="form-control" id="menuName" placeholder="Menu Name"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="numbers" name="menuPrice" class="form-control" id="menuPrice" placeholder="Menu Price"
                                required>
                        </div>
                        <!-- za ovog sledeceg neznam sta ti je bolje textbox ili samo text ako me kontas -->
                        <div class="form-group">
                            <input type="text" name="menuInfo" class="form-control" id="menuInfo" placeholder="Menu Info"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="menuDiet" class="form-control" id="menuDiet" placeholder="Menu Diet Type"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="file" name="menuImg" class="form-control" id="menuImg" placeholder="Menu Image"
                                required>
                        </div>
                        <div class="form-group">
                            <div class="form-btn text-center">
                                <button type="submit" class="btn btn-info" name="addMenu">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Change Menu -->
    <div class="form-btn">
        <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#menuChange">Change menu</button>
    </div>
    <!-- Modal -->
    <div id="menuChange" class="modal fade" role="dialog">
        <div class="modal-dialog col-md-2">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Menu</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="number" name="MenuID" class="form-control" id="MenuID" min="1" placeholder="Menu ID"
                        required>
                    <div class="form-group">
                        <div class="form-btn text-center">
                            <button type="submit" class="btn btn-info" name="searchID">Search ID</button>
                        </div>
                    </div>
                    <tbody>
                        <tr class="row0">
                            <td data-title="Image" class="">
                                <div class="">
                                    <img class="" title="" alt="" src="">
                                </div>
                            </td>
                            <td data-title="Name" class="">
                                <p class=""><a class="" href="#"><!-- Naziv Jela--></a> </p>
                            </td>
                            <td data-title="Unit price" class="">
                                <span class=""><span class=""><!-- Cena po kom --></span> </span>
                            </td>
                        </tr>
                    </tbody>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="menuNameChange" class="form-control" id="menuNameChange" placeholder="Menu Name Change"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="numbers" name="menuPriceChange" class="form-control" id="menuPriceChange" placeholder="Menu Price Change"
                                required>
                        </div>
                        <!-- za ovog sledeceg neznam sta ti je bolje textbox ili samo text ako me kontas -->
                        <div class="form-group">
                            <input type="text" name="menuInfoChange" class="form-control" id="menuInfoChange" placeholder="Menu Info Change"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="menuDietChange" class="form-control" id="menuDietChange" placeholder="Menu Diet Type Change"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="file" name="menuImgChange" class="form-control" id="menuImgChange" placeholder="Menu Image Change"
                                required>
                        </div>
                        <div class="form-group">
                            <div class="form-btn text-center">
                                <button type="submit" class="btn btn-info" name="change">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Orders -->
    <div class="form-btn">
        <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#seeOrders">See Orders</button>
    </div>
    <!-- Modal -->
    <div id="seeOrders" class="modal fade" role="dialog">
        <div class="modal-dialog col-md-2">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Orders</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <div class="form-btn text-center">
                            <button type="submit" class="btn btn-info" name="change">Save</button>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</body>
<?php require_once 'includes/js.php'; ?>

</html>
