<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
    // Provera dal je ulogovan, ako nije onda ga redirectuje na index
    if(Session::exist('user')) {
      $id = Session::get('user');
      $user = User::data($id ,['firstName','lastName','phoneNumber','email','address']);
      $user['fullName'] = $user['firstName'] . " " . $user['lastName'];
      if(isset($_POST['change'])) {
        $data = [
          'oldPassword' => $_POST['oldPassword'],
          'newPassword' => $_POST['newPassword'],
          'rePassword' => $_POST['rePassword'],
          'id' => $id
        ];
        User::resetPassword($data);
      }

      if(isset($_POST['edit'])) {
        User::edit($id, $_POST);
      }
    } else {
      Redirect::to("index");
    }

?>

<body>
<?php require_once 'includes/navigation.php'; ?>
	<section id="top-banner" style="background-image:url('images/slider.jpg'); width: 100%; background-repeat: no-repeat; background-size: cover; background-position: left;">
		<div class="top-banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-7 mx-auto top-banner-caption">
						<h1>Profile</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
    <p>Full name: <?php echo $user['fullName']; ?></p>
    <p>Adress: <?php echo $user['address']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Phone Number: <?php echo $user['phoneNumber']; ?></p>
<div class="form-btn plus">
    <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#myModal">Change password</button>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog col-md-2">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="password" name="oldPassword" class="form-control" id="password" placeholder="Old Password"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="newPassword" class="form-control" id="password" placeholder="New Password"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="rePassword" class="form-control" id="rePassword" placeholder="Confirm Password"
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

<div class="form-btn plus">
    <button type="button" class="btn btn-info form-btn" data-toggle="modal" data-target="#myModal1">Change info</button>
</div>
<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog col-md-2">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change info</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" value="<?php echo $user['firstName']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name" value="<?php echo $user['lastName']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?php echo $user['address']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone" value="<?php echo $user['phoneNumber']; ?>">
                    </div>
                    <!-- <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div> -->
                    <div class="form-group">
                        <div class="form-btn text-center">
                            <button type="submit" class="btn btn-info" name="edit">Save</button>
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
<?php require_once 'includes/footer.php' ?>
</body>
<?php require_once 'includes/js.php'; ?>

</html>
