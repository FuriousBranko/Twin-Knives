<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="../../../../../cdn.jsdelivr.net/npm/gijgo%401.9.10/js/gijgo.min.js" type="text/javascript"></script>
<script src="js/carousel.js"></script>
<script src="js/scroll.js"></script>
<script src="js/main.js"></script>
<script>

    $(document).ready(function(){
        var url = $(location).attr('href');

        if(url == "http://localhost/twin-knives/public/") {
            $("#index").addClass('active');
        } else if (url == "http://localhost/twin-knives/public/menu") {
            $("#menu").addClass('active');
        } else if(url == "http://localhost/twin-knives/public/contact-us") {
            $("#contactUs").addClass('active');
        } else if(url == "http://localhost/twin-knives/public/reservation") {
            $("#reservation").addClass('active');
        } else if(url == "http://localhost/twin-knives/public/login") {
            $("#login").addClass('active');
        }
  });

</script>
