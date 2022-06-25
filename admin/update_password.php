<?php 
$title = 'Update password';
include "header.php";
?>

<?php
if (isset($_POST['Password'])) {
    $err = [];
    //form validation for Password
    if (isset($_POST['old password']) && !empty($_POST['old password']))  {
      $name =  $_POST['old password'];
    } else {
      $err['old password'] = 'Enter your old password';
    }

  
    if (isset($_POST['new password']) && !empty($_POST['new password']))  {
      $rank =  $_POST['new password'];
    } else {
      $err['new password'] =  'Enter your new password';
    }

    if (isset($_POST['re new password']) && !empty($_POST['re new password']))  {
      $rank =  $_POST['re new password'];
    } else {
      $err['re new password'] =  'Enter your re new password';
    }
}
?>

  <!-- Container -->
	<div class="container" >
	<div class="row">
	<div class="col-md-10">
		 <h2 ><?php echo $title; ?></h2>
		 <hr>
		<div class="card register-form">
      <div class="card-body" style="background-color: #f1f1f1">
          <!-- form starts-->
          <form method="post" enctype="multipart/form-data">
            <fieldset>
              <legend> </legend>
              <div class="form-group">
                  <label for="old password">Old Password</label>
                  <input type="password" class="form-control" name="old password" id="old password" aria-describedby="helpId" placeholder="********">
                  <?php if (isset($err['old password'])) { ?>
             <span class="text-danger"><?php echo $err['old password']; ?></span>
           <?php } ?>
              </div>
              <div class="form-group">
                  <label for="new password">New Password</label>
                  <input type="password" class="form-control" name="new password" id="new password" aria-describedby="helpId" placeholder="********">
                  <?php if (isset($err['new password'])) { ?>
             <span class="text-danger"><?php echo $err['new password']; ?></span>
           <?php } ?>
              </div>
              <div class="form-group">
                  <label for="re new password">Re-enter New Password</label>
                  <input type="password" class="form-control" name="re new password" id="re new password" aria-describedby="helpId" placeholder="*******">
                  <?php if (isset($err['re new password'])) { ?>
             <span class="text-danger"><?php echo $err['re new password']; ?></span>
           <?php } ?>
              </div>
          </fieldset>
          <div class="form-group" style="padding-left: 4vw;padding-right: 4vw">
              <input type="submit" class="col-md-6 smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-dark" value="Password" name="Password" id="Password">
              <input class="col-md-6 btn btn-light smallwidth darktrans  btn-outline-secondary p-3 text-dark" type="reset" id="clearBtn" name="clearBtn" value="Clear Form">
            </div>
            <small class="text-muted">
               <?php if(isset($err['msssage'])) echo $err['message']; ?>
             </small>
        </form>
        <!-- form ends -->
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- /.Container -->
</div>