<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
    
<style>
@import url('https://fonts.googleapis.com/css2?family=Gotu&family=Raleway:wght@300&display=swap');
</style>
<!-- <div class="jumbotron bg-dark fixed-top" style="font-family:'Gotu', sans-serif;margin-top:0"> -->
           
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark fixed-top"style="font-family:'Gotu', sans-serif">
            <div class="col-sm-12">
               <img src="images/black n white1.png" height="55vh" alt="Bootstrappin">  
                <a  class="brand" href="index.php" style="color:#FFFFFF;font-size: 2vw;">Bidhya - A Student Feedback System</a>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar-nav navbar-expand-lg navbar-dark bg-dark nav-fill w-100" style="opacity:0.8;margin-top:0px;font-family:'Gotu', sans-serif">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- menu --> 

        <ul class="navbar-nav mr-auto nav-fill w-100">
            <li class="nav-item navbarborder">
                <a class="nav-link" href="http://localhost/studentfeedbackMe/index.php"><i class="fa fa-home fa-fw"></i>H o m e</a>
            </li>
            <li class="nav-item navbarborder">
                <a class="nav-link" href="http://localhost/studentfeedbackMe/about.php"><i class="fa fa-home fa-fw"></i>A b o u t</a>
            </li>
            <li class="nav-item navbarborder">
                <a class="nav-link" href="http://localhost/studentfeedbackMe/registration.php"><i class="fa fa-sign-out fa-fw"></i>R e g i s t r a t i o n</a>
            </li>           
            <li class="nav-item dropdown navbarborder">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-in fa-fw"></i>L o g i n</a>
                <div class="dropdown-menu w-100 bg-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="http://localhost/studentfeedbackMe/login.php">Student</a>
                    <a class="dropdown-item" style="color:#FFFFFF" href="http://localhost/studentfeedbackMe/faculty_login.php">Faculty</a>
                    <div class="dropdown-divider" style="color:yellow"></div>
                     <a class="dropdown-item" style="color:#FFFFFF" href="http://localhost/studentfeedbackMe/admin.php">Admin</a>
                </div>
            </li> 
            <li  class="nav-item navbarborder"> 
                <a class="nav-link" href="http://localhost/studentfeedbackMe/contact.php"><i class="fa fa-phone fa-fw"></i>C o n t a c t</a>
            </li>
       </ul>
        <ul class="navbar-nav mr-auto">

            <!-- /.dropdown -->

            <li class="nav-item dropdown navbarborder">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" role="button" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>A c c o u n t
                </a>
                <div class="dropdown-menu dropdown-user bg-dark">
                    <a class="dropdown-item" style="color:#FFFFFF" href="http://localhost/studentfeedbackMe/admin/update_password.php"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color:#FFFFFF" href="http://localhost/studentfeedbackMe/admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </div>

                    <!-- /.dropdown-user -->

             </li>

                <!-- /.dropdown -->

        </ul>               

                
    </div>
            <!-- /.navbar-collapse -->
         
    </nav>
   <!-- /.Navigation -->

<?php require_once "footer.php"; ?>