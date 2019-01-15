<!DOCTYPE html>
<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<html lang="en">

<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
    $description = "Something very interesting";
    require_once 'includes/headData.php';
    if(Session::get('permission') != 1) {
        Redirect::to('index');
    }

?>

<body>
    <?php require_once 'includes/navigation.php'; ?>
    <section id="top-banner" style="background-image:url('images/slider.jpg'); width: 100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
        <div class="top-banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto top-banner-caption">
                        <h1>Admin Panel</h1>
                        <p>Add and remove menu items</p>
                        <p>See all orders</p>
                        <?php
                            if(isset($_POST['addMenu'])) {
                                echo Food::addMenu($_POST);
                            }
                            if(isset($_POST['deleteMenu'])) {
                                echo Food::deleteMenu($_POST['menuId']);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center">
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
                                    <input type="numbers" name="menuPrice" class="form-control" id="menuPrice"
                                        placeholder="Menu Price" required>
                                </div>
                                <!-- za ovog sledeceg neznam sta ti je bolje textbox ili samo text ako me kontas -->
                                <div class="row" id="infoRow">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="ingridient[]" class="form-control" id="menuIngridient"
                                            placeholder="Ingridient" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="amount[]" class="form-control" id="menuAmount"
                                            placeholder="Amount" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-btn plus text-center">
                                        <button type="button" class="btn btn-info" name="addMenu" id="addNewInput"><i
                                                class="fa fa-plus-circle"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="menuDiet" class="form-control" id="menuDiet" placeholder="Menu Diet Type"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="menuImg" class="form-control" id="menuImg" placeholder="Menu Image"
                                        >
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

            <!-- Delete Menu -->
            <div class="form-btn">
                <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#menuDelete">Delete
                    menu</button>
            </div>
            <!-- Modal -->
            <div id="menuDelete" class="modal fade" role="dialog">
                <div class="modal-dialog col-md-2">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Menu</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="number" name="menuId" class="form-control" id="menuDelete"
                                        placeholder="MenuID" required>
                                </div>

                                <div class="form-group">
                                    <div class="form-btn text-center plus">
                                        <button type="submit" class="btn btn-info" name="deleteMenu">Delete</button>
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
                <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#seeOrders">See
                    Orders</button>
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

                        <table class="table table-striped table-hover" width="100%">
                <thead>
                    <tr>
                        <th id="" class="">
                            Name
                        </th>
                        <th id="" class="">
                            Price
                        </th>
                        <th id="" class="">
                            User ID
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php echo User::showOrders() ?>
                </tbody>
            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        var info = $("#infoRow").html();
        $("#addNewInput").click(function () {
            $("#infoRow").append(info);
        });
    });
</script>
<?php require_once 'includes/js.php'; ?>

</html>
