<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="../../../../../cdn.jsdelivr.net/npm/gijgo%401.9.10/js/gijgo.min.js" type="text/javascript"></script>
<script src="js/carousel.js"></script>
<script src="js/scroll.js"></script>
<script src="js/main.js"></script>
<script>

    $(document).ready(function(){
        var url = $(location).attr('href'),
            parts = url.split("/");

        if(jQuery.inArray("index", parts) != -1) {
            $("#index").addClass('active');
        }
        if(jQuery.inArray("menu", parts) != -1) {
            $("#menu").addClass('active');
        }
        if(jQuery.inArray("contact-us", parts) != -1) {
            $("#contactUs").addClass('active');
        }
        if(jQuery.inArray("reservation", parts) != -1) {
            $("#reservation").addClass('active');
        }
        if(jQuery.inArray("login", parts) != -1) {
            $("#login").addClass('active');
        }

  });

</script>
