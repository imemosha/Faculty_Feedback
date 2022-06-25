<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"  shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" href="../../favicon.ico">
    <title><?php echo $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom Fonts -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- Modal -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    
    
<style>
@import url('https://fonts.googleapis.com/css2?family=Gotu&family=Raleway:wght@300&display=swap');
</style>
<!-- <div class="jumbotron bg-dark fixed-top" style="font-family:'Gotu', sans-serif;margin-top:0"> -->
           
</head>
<body>
    <!-- Container -->
    <div class="container-fluid">
        <div class="row bg-dark ">
            <br>
            <div class="col-sm-12">
               <img src="images/black n white1.png" style="float:left;opacity:0.7"height="85vh" width="Auto"alt="logo"> 
               <br>
                <a  class="brand" href="index.php" style="padding-left:1vw;color:#FFFFFF;font-size:2vw;">Better Learning</a>
                <br>
                <a style="float:right;padding-left:1.2vw;color:white;font-size:1.2vw">- Faculty Feedback Analysis Tool </a>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar-nav navbar-static-top navbar-expand-sm sticky-top navbar-dark bg-dark nav-fill w-100" style="margin:0px;opacity:0.8;">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- menu --> 

        <ul class="navbar-nav mr-auto nav-fill w-100">
            <li class="nav-item navbarborder">
                <a class="nav-link" href="http://localhost/faculty/index.php"><i class="fa fa-home fa-fw"></i>H o m e</a>
            </li>
            <li class="nav-item navbarborder">
                <a class="nav-link" href="http://localhost/faculty/about.php"><i class="fa fa-home fa-fw"></i>A b o u t</a>
            </li>
            <li class="nav-item navbarborder">
                <a class="nav-link" href="http://localhost/faculty/registration.php"><i class="fa fa-sign-out fa-fw"></i>R e g i s t r a t i o n</a>
            </li>           
            <li class="nav-item navbarborder">
                <a class="nav-link" href="#Modal"><i class="fa fa-sign-in fa-fw"></i>L o g i n</a>
            </li> 
            <li  class="nav-item navbarborder"> 
                <a class="nav-link" href="http://localhost/faculty/contact.php"><i class="fa fa-phone fa-fw"></i>C o n t a c t</a>
            </li>
       </ul>
       <!--  <ul class="navbar-nav mr-auto">

            <!-- /.dropdown -->

           <!--  <li class="nav-item dropdown navbarborder">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" role="button" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>A c c o u n t
                </a>
                <div class="dropdown-menu dropdown-user bg-dark">
                    <a class="dropdown-item text-light" href="http://localhost/studentfeedbackMe/admin/update_password.php"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-light" href="http://localhost/studentfeedbackMe/admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </div>
 -->
                    <!-- /.dropdown-user -->

            <!--  </li> -->

                <!-- /.dropdown -->

        <!-- </ul>   -->         

                
    </div>
            <!-- /.navbar-collapse -->
    </nav>
   <!-- /.Navigation -->
 <!-- The Modal -->
 <!-- Modal -->
<!-- <div id="Modal" class="modal fade" role="dialog">
  <div class="modal-dialog"> -->

<!-- Modal content-->
<!-- <div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Modal Header</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
  </div>
  <div class="modal-body">
    <p>Some text in the modal.</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn-outline-secondary btn bg-dark btn-block btn-rounded" data-dismiss="modal">Close</button>
  </div>
</div>

  </div>
</div> -->
<!-- Modal -->
<div class="modal fade =" id="Modal" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <!--Content-->
    <div class="modal-content card">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/black n white1.png" style="float:left;bottom-margin:0px;"height="auto" width="135vw"alt="logo">
                </div>
                <div class="col-md-4">
                    <br><br><br>
                    <h3 class="modal-title w-100 text-dark font-weight-bold " id="myModalLabel"><strong>SIGN</strong> <a
                    class="font-weight-bold" style="color:#79e3ed;"><strong> UP</strong></a></h3>
                </div>
                <div class="col-md-4">
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
         <div class="navbar navbar-light bg-faded" style="margin: 0px;">
           <ul class="nav nav-tabs" style="opacity:0.6;color:black;">
            <li>
              <a class="text-dark" data-toggle="tab" href="#Student"><h5>Student</h5></a>
            </li>
            <li>
              <a  class="text-dark"data-toggle="tab" href="#Admin"><h5>Admin</h5></a>
            </li>
            <li>
              <a  class="text-dark"data-toggle="tab" href="#Faculty"><h5>Faculty</h5></a>
            </li>
          </ul>
        </div>
        <!--Body-->
  
        <div class="modal-body modalform text-dark">
          <!--Body-->
          <div class="tab-content overflow-hidden" style="height:auto;max-height:190px;">
          <div class="tab-pane active" id="Student">.
          <form method="post" >
            <fieldset>
              <div class="form-group">
                <label for="username">Student Email:</label>
                <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
              </div>
              <div class="form-group">
                <label for="my-textarea">Password:</label>
                  <input class="form-control" placeholder="Password" name="pass" type="password" required>
              </div>
              <div class="form-group">
                <label>
                <input type="checkbox" value="" name="remember">
                Remember me
                </label>
              </div>                        
              <div class="form-group">
                <input name="login" type="button" onClick="location.href='user/dashboard.php'"value="login" class="btn btn-lg btn-dark btn-block">
              </div>
            </fieldset>
          </form>
        </div>
      <div class="tab-pane fade" id="Admin">
          <!--Body-->
          <form method="post" >
            <fieldset>
              <div class="form-group">
                <label for="username">Admin Email:</label>
                <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
              </div>
              <div class="form-group">
                <label for="my-textarea">Password:</label>
                  <input class="form-control" placeholder="Password" name="pass" type="password" required>
              </div>
              <div class="form-group">
                <label>
                <input type="checkbox" value="" name="remember">
                Remember me
                </label>
              </div>                        
              <div class="form-group">
                <input name="login" type="button" onClick="location.href='admin/dashboard.php'"value="login" class="btn btn-lg btn-dark btn-block">
              </div>
            </fieldset>
          </form>
        </div>
        <div class="tab-pane fade" id="Faculty">
          <!--Body-->
          <form method="post" >
            <fieldset>
              <div class="form-group">
                <label for="username">Faculty Email:</label>
                <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
              </div>
              <div class="form-group">
                <label for="my-textarea">Password:</label>
                  <input class="form-control" placeholder="Password" name="pass" type="password" required>
              </div>
              <div class="form-group">
                <label>
                <input type="checkbox" value="" name="remember">
                Remember me
                </label>
              </div>                        
              <div class="form-group">
                <input name="login" type="button" onClick="location.href='faculty/dashboard.php'"value="login" class="btn btn-lg btn-dark btn-block">
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      </div>
       
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
<!-- slider start -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" styla="margin-top:50vh;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/feedback11.jpg" alt="0" width="100%" height="auto">
       <div class="carousel-caption">
          <h3>Feedback</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/feedback99.jpg" alt="1" width="100%" height="auto">
        <div class="carousel-caption">
            <h3>Feedback</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>
      <div class="item">
        <img src="images/feedback5.png" alt="2" width="100%" height="auto">
        <div class="carousel-caption">
          <h3>Feedback</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/feedback6.jpg" alt="3" width="100%" height="auto">
        <div class="carousel-caption">
            <h3>Feedback</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php require_once "footer.php"; ?>