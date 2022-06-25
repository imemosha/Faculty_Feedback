<div class="navbar-fixed-bottom navbar-nav navbar-inverse text-center bg-dark" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF;padding:1px;"><i class="fa fa-smile"> </i><i class="fa fa-smile"> </i><i class="fa fa-smile"> </i></span>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"></script>')</script>
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- jQuery -->
    <script src="css/jquery.min.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="css/sb-admin-2.js"></script>

    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="fontawesome/js/fontawesome.js"></script>
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
<script>
/*$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});*/
$('.nav-tabs a[href="#Student"]').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('.nav-tabs a[href="#Admin"]').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('.nav-tabs a[href="#Faculty"]').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  </script>
<script type="text/javascript">
    $('a[href$="#Modal"]').on( "click", function() {
   $('#Modal').modal('show');
});
</script>
<script>
    $('a[href$="#Modal"]').on('click', function() {
      $(".nav-tabs a").click(function(){
        $('#Modal').modal('show');
    $(this).tab('show');
  });
});
</script>

 <!--  /*if($('.nav-tabs a[href="#student"]').click){
  $(this).tab('show');
  $('.nav-tabs a[href="#admin"]').tab('hide');
  $('.nav-tabs a[href="#faculty"]').tab('hide');
}
  if($('.nav-tabs a[href="#admin"]').click){
  $(this).tab('show');
  $('.nav-tabs a[href="#student"]').tab('hide');
  $('.nav-tabs a[href="#faculty"]').tab('hide');
}
  if($('.nav-tabs a[href="#faculty"]').click){
  $(this).tab('show');
  $('.nav-tabs a[href="#admin"]').tab('hide');
  $('.nav-tabs a[href="#student"]').tab('hide');
}*/
//})
/*  $('.nav-tabs a[href="#student"]').click(function(){
  $('.nav-tabs a[href="#student"]').tab('show');
  $('.nav-tabs a[href="#admin"]').tab('hide');
  $('.nav-tabs a[href="#faculty"]').tab('hide');
})
  $('.nav-tabs a[href="#admin"]').click(function(){
  $('.nav-tabs a[href="#student"]').tab('hide');
  $('.nav-tabs a[href="#admin"]').tab('show');
  $('.nav-tabs a[href="#faculty"]').tab('hide');
})
  $('.nav-tabs a[href="#faculty"]').click(function(){
  $('.nav-tabs a[href="#student"]').tab('hide');
  $('.nav-tabs a[href="#admin"]').tab('hide');
  $('.nav-tabs a[href="#faculty"]').tab('show');
})*/
  // Select tab by name
/*$('.nav-tabs a[href="#student"]').tab('show')
$('.nav-tabs a[href="#admin"]').tab('show')
$('.nav-tabs a[href="#faculty"]').tab('show')
*/
// Select first tab
/*$('.nav-tabs a:first').tab('show')*/
/*
// Select last tab
$('.nav-tabs a:last').tab('show')

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')*/
/*
$('a[href$="#student"]').on( "click", function() {
   $('#student').tab('show');
   $('#admin').tab('hide');
   $('#faculty').tab('show');});


$('a[href$="#admin"]').on( "click", function() {
   $('#admin').tab('show');
   $('#student').tab('hide');
   $('#faculty').tab('hide');});

$('a[href$="#faculty"]').on( "click", function() {
   $('#faculty').tab('show');
    $('#student').tab('hide');
   $('#admin').tab('hide');});*/
/*   $(function(){
    $('a[href$="#admin"]').on("click", "li.active > a", function(){
        var $parent = $(this).parent();

        // Ensure link isn't just a dropdown menu link     
        if (!$parent.hasClass("dropdown")){
            // Deactivate tab buttons
            $("#testtab li").removeClass("active");

            // Hides tab contents
            Student = $(this).attr("#Student");
            $(Student).removeClass("active").addClass("fade");
        }
    });
});*/ -->

  <!-- $(document).ready(function(){
  $('.nav-tabs a[href="#Faculty"]').click(function(){
  $('.nav-tabs a[href="#Faculty"]').tab('show');
  $("#Faculty").removeClass("active");
});
  $('.nav-tabs a[href="#Faculty"]').click(function(){
  $('.nav-tabs a[href="#Student"]').tab('hide');
});
  $('.nav-tabs a[href="#Faculty"]').click(function(){
  $('.nav-tabs a[href="#Admin"]').tab('hide');
});
   $('.nav-tabs a[href="#Student"]').click(function(){
  $('.nav-tabs a[href="#Student"]').tab('show');
  $("#Student").removeClass("active");
});
  $('.nav-tabs a[href="#Student"]').click(function(){
  $('.nav-tabs a[href="#Faculty"]').tab('hide');
});
  $('.nav-tabs a[href="#Student"]').click(function(){
  $('.nav-tabs a[href="#Admin"]').tab('hide');
});
   $('.nav-tabs a[href="#Admin"]').click(function(){
  $('.nav-tabs a[href="#Admin"]').tab('show');
  $("#Admin").removeClass("active");
});
  $('.nav-tabs a[href="#Admin"]').click(function(){
  $('.nav-tabs a[href="#Student"]').tab('hide');
});
  $('.nav-tabs a[href="#Admin"]').click(function(){
  $('.nav-tabs a[href="#Faculty"]').tab('hide');
});
}); -->

</body>
</html>
