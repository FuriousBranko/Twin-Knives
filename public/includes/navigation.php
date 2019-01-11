<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id="mainNav">
        <div class="container"> <a href="index"><img src="images/TwinKnives.png" alt="logo"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto sf-js-enabled sf-arrows">
                    <li class="nav-item"> <a id="index" class="nav-link" href="index">Home</a> </li>
                    <li class="nav-item"> <a id="menu" class="nav-link" href="menu">Menu</a> </li>
                    <li class="nav-item"> <a id="reservation" class="nav-link" href="reservation">Reservation</a> </li>
                    <li class="nav-item"> <a id="contactUs" class="nav-link" href="contact-us">Contact Us</a> </li>
                    <?php if(!Session::exist('user')): ?>
                        <li class="nav-item"> <a id="login" class="nav-link" href="login">Log In</a> </li>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                            <a class="nav-link" href="profile" id="navbarDropdownProfileLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Profile <i class="fa fa-chevron-down"></i></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownProfileLink">
                                <a class="dropdown-item" href="profil">Profil</a>
                                <a class="dropdown-item" href="order">Orders</a>
                                <a class="dropdown-item" href="logout">Logout</a>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
