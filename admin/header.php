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
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
     <link href="../css/dashboard.css" rel="stylesheet">
    <!-- Custom Fonts -->
   <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.css">      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <!-- Modal -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    
    
<style>
@import url('https://fonts.googleapis.com/css2?family=Gotu&family=Raleway:wght@300&display=swap');
</style>
<!-- <div class="jumbotron bg-dark fixed-top" style="font-family:'Gotu', sans-serif;margin-top:0"> -->
           
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-static-position navbar-default navbar-expand-sm  navbar-dark bg-faded" style="background-color:black;padding:0px;margin:0px;">
       <!-- Side Navigation -->
    <div class="sidebar text-light" align="center" >
      <!-- Header -->
      <a  class="sidebar-brand"href="http://localhost/faculty/admin/dashboard.php" align="center">
        <img src="../images/black n white2.png" style="font-size:5em;margin-top:0px;opacity:0.7"height="90vh" width="auto" alt="logo"> 
        B E T T E R <br>L E A R N I N G
      </a>  
      <!--/.Header-->
      <a class="active" href="dashboard.php" align="center">Hello User <span class="sr-only">(current)</span></a>  <a href="#"><img style="border-radius:50px" src="../images/person.jpg" width="130" height="130" class="img-thumbnail img-fluid rounded-circle"alt="not found"/></a>
       <!-- Collect the nav links, forms, and other content for toggling -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-default" role="navigation">
          <!-- Navigation collapse -->  
        <div class="sidebar-nav navbar-collapse" id="navbarSupportedContent" style="margin:0px;padding:0px;" >
        <!-- Side menu -->
          <ul align="left">
            <li>
              <a href="#faculty" data-toggle="collapse" class="arrowcol collapsed " data-target="#faculty"><i class="fa fa-user fa-fw"></i>Faculty</a>
               <div class="dropdown-divider"></div>
              <div class="collapse submenuli" id="faculty" aria-expanded="false">
                  <ul class="nav">
                    <li>
                      <a href="add_faculty.php"><i class="fa fa-plus fa-fw"></i> Add Faculty</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                      <a href="manage_faculty.php"><i class="fa fa-eye"></i> Manage faculty</a>
                    </li>
                  </ul>
              </div>
            </li>
            <li>
              <a href="#student" data-toggle="collapse" class="arrowcol collapsed " data-target="#student"><i class="fa fa-user fa-fw"></i>Student</a>
              <div class="dropdown-divider"></div>
              <div class="collapse submenuli" id="student" aria-expanded="false">
                  <ul class="nav">
                    <li>
                      <a href="manage_student.php"><i class="fa fa-eye"></i> Manage student</a>
                    </li>                         
                  </ul>
              </div>
            </li>
             <li>
              <a href="#feedback" data-toggle="collapse" class="arrowcol collapsed " data-target="#feedback"><i class="fa fa-user fa-book"></i>Feedback</a>
              <div class="dropdown-divider"></div>
              <div class="collapse submenuli" id="feedback" aria-expanded="false">
                  <ul class="nav">
                    <li>
                      <a href="feedback.php"><i class="fa fa-eye"></i> Feedback</a>
                    </li>
                    <li>
                      <a href="feedback_average.php"><i class="fa fa-eye"></i> Feedback Average</a>
                    </li>                           
                  </ul>
              </div>
            </li>
            <li>
              <a href="contact.php"><span class="fa fa-eye"></span> Contact</a>
            </li>
          </ul>
          <!-- /.Side menu -->
        </div>
        <!-- /.Navigation collapse -->
      </div>
    </div>
       <!-- /.Side Navigation -->

        <!-- Top menu --> 
    <ul class="ml-auto navbar-nav">  
        <!-- dropdown -->
      <li class="nav-item dropdown dropleft">
        <a class="nav-link dropdown-toggle py-0" data-toggle="dropdown" id="navbarDropdown" role="button" href="#" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user fa-fw"></i> 
        </a>
         <!-- dropdown-user -->
        <div class="dropdown-menu dropdown-user bg-dark">
          <a class="dropdown-item text-light" href="http://localhost/faculty/admin/update_password.php"><i class="fa fa-gear fa-fw"></i>Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-light" href="http://localhost/studentfeedbackMe/admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </div>
        <!-- /.dropdown-user -->
      </li>
        <!-- /.dropdown -->
    </ul>  
        <!-- /.Top menu -->       
  </nav>
   <!-- /.Navigation -->
<!-- slider start -->
<div class="content" style="position:relative;top:2.5vh;">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../images/feedback11.jpg" alt="0" width="100%" height="auto">
       <div class="carousel-caption">
          <h3>Feedback</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>

      <div class="item">
        <img src="../images/feedback99.jpg" alt="1" width="100%" height="auto">
        <div class="carousel-caption">
            <h3>Feedback</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>
      <div class="item">
        <img src="../images/feedback5.png" alt="2" width="100%" height="auto">
        <div class="carousel-caption">
          <h3>Feedback</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>

      <div class="item">
        <img src="../images/feedback6.jpg" alt="3" width="100%" height="auto">
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

