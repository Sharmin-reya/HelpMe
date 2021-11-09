<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Helpme.com</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- build:css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
      
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
    <link rel="stylesheet" href="assets/css/theme.css">



    <style>
    .wrapper{ 
      width: 500px; 
      padding: 20px; 
    }
    .wrapper h2 {text-align: center}
    .wrapper form .form-group span {color: red;}
  </style>
      
  </head>

  <body>      
      
    <nav class="navbar navbar-expand-md navbar-custom fixed-top">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarsDefault">
                <ul class="navbar-custom navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Emergency</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                            <a class="dropdown-item" href="Fire_service.php">Fire Service</a>
                            <a class="dropdown-item" href="Hos_Emgunit.php">Hospitals(Emergency Unit)</a>
                            <a class="dropdown-item" href="Ambulance.php">Ambulance</a>
                            <a class="dropdown-item" href="Law.php">Law Enforcement Org</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organizations</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                            <a class="dropdown-item" href="Soc_Welfare.php">Social Welfare</a>
                            <a class="dropdown-item" href="Govt_org.php">Govt Organization</a>
                            <a class="dropdown-item" href="Immigration.php">Immigration</a>
                            <a class="dropdown-item" href="E_com.php">E-Commerce</a>
                            <a class="dropdown-item" href="Others.php">Others</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transport</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                                <a class="dropdown-item" href="Train.php">Train</a>
                                <a class="dropdown-item" href="Bus_LR.php">Bus(long route)</a>
                                <a class="dropdown-item" href="Bus_InDhaka.php">Bus(inside Dhaka)</a>
                                <a class="dropdown-item" href="Plane.php">Plane</a>
                                <a class="dropdown-item" href="Trans_others.php">Others</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transaction</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                                    <a class="dropdown-item" href="Govt_Bank.php">Govt Bank</a>
                                    <a class="dropdown-item" href="Pri_bank.php">Private Bank</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Institution</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                                        <a class="dropdown-item" href="Edu_Ins.php">Educational Institution</a>
                                        <a class="dropdown-item" href="Training_SkillCenter.php">Professional & Personal Training Skill Center</a>
                                        <a class="dropdown-item" href="Sports_training.php">Sports Training Center</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php#contact">Contact Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Log In</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php#search">Search</a>
                                    </li>


                                </ul>              

                            </div>
                        </div>
                    </nav>
<!-- endinject -->

      
<!-- Intro -->
<div class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="row justify-content-center">    
    
    
  <section class="container wrapper">
			<div class="page-header">
				<h4 class="display-5">Welcome home</h4><h2><?php echo $_SESSION['username']; ?></h2>
			</div>

			<a href="password_reset.php" class="btn btn-block btn-outline-warning">Reset Password</a>
			<a href="logout.php" class="btn btn-block btn-outline-danger">Sign Out</a>
		</section>
  </div>
			</div>
		</div>
	</div>
</div>
</div>
      


      
<!-- inject:partials/footer.html -->
<footer>
<div class="container text-center">
    <p class="credits">
        Copyright &copy; helpme.com2021<br/>
    </p>
</div>
</footer>

<!-- build:js -->
<script src="assets/js/main.js"></script>
<!-- endbuild -->

<script src="assets/js/theme.js"></script>

</body>

</html>