<!-- <div class="navbar-fixed-bottom navbar-nav navbar-inverse text-center bg-dark" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF;padding:1px;"><i class="fa fa-smile"> </i><i class="fa fa-smile"> </i><i class="fa fa-smile"> </i></span>
	</div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

    <!-- jQuery -->
    <script src="../css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../fontawesome/js/fontawesome.js"></script>
    <!-- Modal -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <!-- <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script> -->
   <!--  <script>
$(document).ready(function(){
  // Activate Carousel with a specified interval
  $(".carousel").carousel({interval: 5000});
        
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $(".carousel").carousel(0);
  });
  $(".item2").click(function(){
    $(".carousel").carousel(1);
  });
  $(".item3").click(function(){
    $(".carousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script> -->
<script>
// Activate Carousel
$("#myCarousel").carousel({interval: 3000});

// Enable Carousel Indicators
$(".item").click(function(){
  $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#myCarousel").carousel("prev");
});
</script>
<script type="text/javascript">
    $('a[href$="#Modal"]').on( "click", function() {
   $('#Modal').modal('show');
});
</script>
<script type="text/javascript">
  $('.dropdown-toggle').dropdown();
</script>
</body>
</html>
