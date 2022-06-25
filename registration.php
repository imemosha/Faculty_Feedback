<?php 
  $title = 'Registration';
  include "header.php";
?>

<?php
if (isset($_POST['Register'])) {
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

    //form validation for photo
    if(isset($_FILES['image']['error']) && $_FILES['image']['error']==0){
    $types=['image/jpeg','image/png','image/gif'];
    if(in_array($_FILES['photo']['type'], $types)){
      if($_FILES['image']['size']<=100*1024){
        $image_name=$_FILES['image']['name'];
        if(file_exists('images/' .$_FILES['image']['name'])){
          $image_name=uniqid() . '_' . $_FILES['image']['name'];
        }
        //upload file
        if(move_uploaded_file($_FILES['image']['tmp_name'], 'images/' .$image_name)){
          echo "File upload success";
        }
        else{
          $err['image']="File couldnot uploaded";
        }
      }
      else{
        $err['image']="File size execeed";
      }
    }
    else{
      $err['image']="Invalid file type";
    }
  }
  else{
    $err['image']="Please choose file to upload";
  }

  //form validation for gender
  if (isset($_POST['gender']) && !empty($_POST['gender'])) {
      $gender =  $_POST['gender'];
    } else {
      $err['gender'] =  "Select your gender";
    }

  //form validation for address
    if (isset($_POST['address']) && !empty($_POST['address'])) {
      $gender =  $_POST['address'];
    } else {
      $err['address'] =  "Enter your address";
    }

  //form validation for programme
    if (isset($_POST['programme']) && !empty($_POST['programme'])) {
      $gender =  $_POST['programme'];
    } else {
      $err['programme'] = "Choose your programme";
    }

  //form validation for semester
    if (isset($_POST['semester']) && !empty($_POST['semester'])) {
      $gender =  $_POST['semester'];
    } else {
      $err['semester'] = "Select your semester";
    }

  //form validation for username
    if (isset($_POST['username']) && !empty($_POST['username'])) {
      $gender =  $_POST['username'];
    } else {
      $err['username'] = "Enter your username";
    }

  //form validation for password
    if (isset($_POST['password']) && !empty($_POST['password'])) {
      $gender =  $_POST['password'];
    } else {
      $err['password'] = "Enter your password";
    }  
  }
?>
<div class="container">
  <h1 align="center" style="margin-top: 3vh"><?php echo $title; ?></h1>
      <hr>
  <div class="card register-form">
      <div class="card-header">
          <!-- form starts-->
          <form method="post" enctype="multipart/form-data">
            <fieldset>
              <legend>Personal Information</legend>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter your name">
                  <?php if (isset($err['name'])) { ?>
           <span class="text-danger"><?php echo $err['name']; ?></span> 
         <?php } ?>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>            
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

              <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Enter your address">
              </div>
              <?php if (isset($err['address'])) { ?>
           <span class="text-danger"><?php echo $err['address']; ?></span> 
         <?php } ?> 

              <div class="form-group"> 
                  <label for="photo">Upload Photo:</label>
                  <div class="input-group mb-3">
                    <div class="custom-file"> 
                      <input type="file" class="custom-file-input bg-dark" id="photo" name="photo" placeholder="Choose Photo">
                      <label class="custom-file-label" for="photo" aria-describedby="photo"></label>
                    </div>
                  </div>
                  <?php if (isset($err['image'])) { ?>
           <span class="text-danger"><?php echo $err['image']; ?></span> 
         <?php } ?>
              </div>

              <div class="form-group">
                <label>Gender </label><br/>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="male" id="male" value="1">
                  <label class="form-check-label" for="male">Male</label>                  
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="female" id="female" value="0" checked>
                  <label class="form-check-label" for="female">Female</label>                  
                </div>
              </div>
              <?php if (isset($err['gender'])) { ?>
           <span class="text-danger"><?php echo $err['gender']; ?></span> 
         <?php } ?>
            </fieldset>

            <br/>
            <fieldset>
              <legend>Education</legend>
              	<div class="form-row">
              		<div class="form-group col-md-6">                
                		<label  for="programme">Programme</label>              
                		<select class="form-control" id="programme">
                  		<option selected>Select Programme...</option>
                  		<option value="1">BSc.CSIT</option>
                 		<option value="2">MCA</option>
                 		<option value="3">BCA</option>
                 		<option value="4">MSc.CSIT</option>
                </select>
                <?php if (isset($err['programme'])) { ?>
           <span class="text-danger"><?php echo $err['programme']; ?></span> 
         <?php } ?>
              	</div>
              	<div class="form-group col-md-6">                
                		<label  for="semester">Semester</label>              
                		<select class="form-control" id="programme">
                  		<option selected>Select Semester...</option>
                  		<option value="1">I</option>
                 		<option value="2">II</option>
                 		<option value="3">III</option>
                 		<option value="4">IV</option>
                 		<option value="5">V</option>
                 		<option value="6">VI</option>
                 		<option value="7">VII</option>
                 		<option value="8">VIII</option>
                </select>
                <?php if (isset($err['semester'])) { ?>
           <span class="text-danger"><?php echo $err['semester']; ?></span> 
         <?php } ?>
              	</div>
              </div>
          </fieldset>
          <br/>
            <fieldset>
              <legend>Login Information</legend>
              <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="username">Username</label>
                   <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Enter your username">
                   <?php if (isset($err['username'])) { ?>
           <span class="text-danger"><?php echo $err['username']; ?></span> 
         <?php } ?>
                </div>

                <div class="form-group col-md-6">
                   <label for="my-textarea">Password</label>            
                   <input type="password" name="password" id="input" class="form-control"  placeholder="**********">
                    <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?></span> 
         <?php } ?>
                </div>
              </div>
            </fieldset>
            <br/>
            <hr>
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw">
              <input type="submit" class="col-md-6 smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" value="Register" name="Register" id="Register">
              <input class="col-md-6 btn btn-light smallwidth darktrans  btn-outline-secondary p-3 text-dark" type="reset" id="clearBtn" name="clearBtn" value="Clear Form">
            </div>
            <small class="text-muted">
               <?php if(isset($err['msssage'])) echo $err['message']; ?>
             </small>
        </form>
    </div>

   </div><!--card ends -->
</div>    
