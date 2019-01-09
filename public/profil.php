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
    <p>Full name:</p>
    <p>Adress:</p>
    <p>Email:</p>
    <p>Phone Number:</p>
    <a href="#">Change Password</a><br>
    <a href="#">Change Info</a>
    <!-- samo za password -->
    <form action="#" method="post">
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="Old Password"
                required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="New Password"
                required>
        </div>
        <div class="form-group">
            <input type="password" name="rePassword" class="form-control" id="rePassword" placeholder="Confirm Password"
                required>
            <div class="form-btn text-center">
                <button type="submit" class="btn btn-info" name="register">Save</button>
            </div>
    </form>
    <!-- samo za info -->
    <form action="#" method="post">
        <div class="form-group">
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone" required>
        </div>
        <!-- Ako oces da stavimo da mora da se unese password da moze da potvrdi?
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        Pa onda preko IF da isbaci save -->
        <div class="form-group">
            <div class="form-btn text-center">
                <button type="submit" class="btn btn-info" name="register">Save</button>
            </div>
    </form>
</body>
<?php require_once 'includes/js.php'; ?>

</html>