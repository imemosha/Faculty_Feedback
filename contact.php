<?php 
$title = 'CONTACT';
include "header.php";
?>

<?php
if (isset($_POST['Send'])) {
    $err = [];
    //form validation for name
    if (isset($_POST['name']) && !empty($_POST['name']))  {
      $name =  $_POST['name'];
    } else {
      $err['name'] = 'Enter your name';
    }

    //form validation for email
    if (isset($_POST['email']) && !empty($_POST['email']))  {
      $rank =  $_POST['email'];
    } else {
      $err['email'] =  'Enter your email';
    }

    //form validation for phone
    if (isset($_POST['phone']) && !empty($_POST['phone']))  {
      $rank =  $_POST['phone'];
    } else {
      $err['phone'] =  'Enter your phone number ';
    }

    //form validation for text box
    if (isset($_POST['desc']) && !empty($_POST['desc'])) {
      $gender =  $_POST['desc'];
    } else {
      $err['desc'] =  "Write your description here";
    }
}?>

<div class="container">
	<div class="row">
	<div class="col-md-8">
		<h1 align="center" style="margin-top: 3vh"><?php echo $title; ?></h1>
		<div class="card register-form">
			<div class="card-header">
					<!-- <h2 align="center"><?php echo $title; ?></h2>  -->
				<!-- </div> --><!--card header ends-->

				<!-- <div class="card-body">  -->
					 <!-- form starts-->
			 	<form  method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>Personal Information</legend>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter Your Full Name">
							 <?php if (isset($err['name'])) { ?>
           <span class="text-danger"><?php echo $err['name']; ?></span> 
         <?php } ?>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="email">Email<</label>            
								<input type="email" name="email" id="email" class="form-control"  placeholder="abc@gmail.com">
								<?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
         <?php } ?>
							</div>
							<div class="form-group col-md-6"> 
								<label for="phone">Phone</label>            
								<input type="phone" name="phone" id="phone" class="form-control"  placeholder="XXXXXXXXXX">
								<?php if (isset($err['phone'])) { ?>
           <span class="text-danger"><?php echo $err['phone']; ?></span> 
         <?php } ?>
								</div>                
						</div>    
					</fieldset>
					<br/>
					<fieldset>
						<legend>Message</legend>
							<div class="form-group">
								<label for="Desc">Your Message</label>
								<textarea class="form-control" rows="15" name="Desc" id="Desc" aria-describedby="helpId" placeholder="Enter Short description of the news"></textarea>
							</div>
							<?php if (isset($err['Desc'])) { ?>
             <span class="text-danger"><?php echo $err['Desc']; ?></span>
           <?php } ?>
					</fieldset>
					<br/>

					<hr>
					<div class="form-group" style="padding-left: 4vw;padding-right: 4vw">
						<input type="submit" class="col-md-6 btn btn-dark smallwidth darktrans btn-outline-secondary p-3 text-dark" value="Send" name="Send" id="Send">
						<input class="col-md-6 btn btn-light smallwidth darktrans  btn-outline-secondary p-3 text-dark" type="reset" id="cancelBtn" name="cancelBtn" value="Cancel Form">
					</div>   
					 <small class="text-muted">
               <?php if(isset($err['msssage'])) echo $err['message']; ?>
             </small>      
				</form><!-- form end -->
			</div><!-- card header ends-->
		</div><!--card ends -->
	</div> 

	<!-- contact detail -->
	<div class="col-md-3"style="margin-left: 2vw;">
		<h4 align="left" style="margin-top: 8vh">CONTACT DETAILS</h4>
		<div class="card" >
		<div class="card-header">
		<img src="images/feedback7.jpg" width="100%" height="auto"> 
		</div>
		</div>
		<hr> 
		<div class="card" >
			<div class="card-header">
				<p>Bijaychowk<br>Gaushala<br></p>
				<p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: (123) 456-7890</p>
				<p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:name@example.com" style="color: black">info@bidhya.com</a></p>
				<p><i class="fa fa-clock-o"></i><abbr title="Hours">H</abbr>: Monday - Sunday: 9:00 AM to 9:00 PM</p>
				<ul class="list-unstyled list-inline list-social-icons">
					<li><a href="#" ><i style="color: black" class="fa fa-facebook-square fa-2x"></i></a></li>
					<li><a href="#"><i style="color: black"class="fa fa-linkedin-square fa-2x"></i></a></li>
					<li><a href="#"><i style="color: black"class="fa fa-twitter-square fa-2x"></i></a></li>
					<li><a href="#"><i style="color: black"class="fa fa-google-plus-square fa-2x"></i></a></li>
				</ul>
			</div>
		</div>
	</div><!-- /.contact detail -->
</div>
</div><!-- container ends -->