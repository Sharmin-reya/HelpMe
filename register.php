<?php
	// Include config file
	require_once 'config/config.php';


	// Define variables and initialize with empty values
	$username = $password = $location = $confirm_password = "";

	$username_err = $password_err= $location_err = $confirm_password_err = "";

	// Process submitted form data
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		// Check if username is empty
		if (empty(trim($_POST['username']))) {
			$username_err = "Please enter a username.";

			// Check if username already exist
		} else {

			// Prepare a select statement
			$sql = 'SELECT id FROM usersignup WHERE username = ?';

			if ($stmt = $mysql_db->prepare($sql)) {
				// Set parmater
				$param_username = trim($_POST['username']);

				// Bind param variable to prepares statement
				$stmt->bind_param('s', $param_username);

				// Attempt to execute statement
				if ($stmt->execute()) {
					
					// Store executed result
					$stmt->store_result();

					if ($stmt->num_rows == 1) {
						$username_err = 'This username is already taken.';
					} else {
						$username = trim($_POST['username']);
					}
				} else {
					echo "Oops! ${$username}, something went wrong. Please try again later.";
				}

				// Close statement
				$stmt->close();
			} else {

				// Close db connction
				$mysql_db->close();
			}
		}

        if(empty(trim($_POST["location"]))){
            $location_err = "Please enter your location.";     
        } else{
            $location = trim($_POST["location"]);
        }
		
	    if(empty(trim($_POST["password"]))){
	        $password_err = "Please enter a password.";     
	    } elseif(strlen(trim($_POST["password"])) < 6){
	        $password_err = "Password must have atleast 6 characters.";
	    } else{
	        $password = trim($_POST["password"]);
	    }

	    // Validate confirm password
	    if(empty(trim($_POST["confirm_password"]))){
	        $confirm_password_err = "Please confirm password.";     
	    } else{
	        $confirm_password = trim($_POST["confirm_password"]);
	        if(empty($password_err) && ($password != $confirm_password)){
	            $confirm_password_err = "Password did not match.";
	        }
	    }

	    // Check input error before inserting into database

	    if (empty($username_err) && empty($location_err) && empty($password_err) && empty($confirm_err)) {

	    	// Prepare insert statement
			$sql = 'INSERT INTO usersignup (username, location, password) VALUES (?,?,?)';

			if ($stmt = $mysql_db->prepare($sql)) {

				// Set parmater
				$param_username = $username;
                $param_location = $location;
				$param_password = password_hash($password, PASSWORD_DEFAULT); // Created a password

				// Bind param variable to prepares statement
				$stmt->bind_param('sss', $param_username, $param_location, $param_password);

				// Attempt to execute
				if ($stmt->execute()) {
					// Redirect to login page
					header('location: ./login.php');
					// echo "Will  redirect to login page";
				} else {
					echo "Something went wrong. Try signing in again.";
				}

				// Close statement
				$stmt->close();	
			}

			// Close connection
			$mysql_db->close();
	    }
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

<div class="intro">
<div class="intro-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="brand-heading">Sign Up</h1>
                <p class="intro-text">
                    
                </p>
                <a href="#pageid" class="btn btn-circle page-scroll">
                <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<section id="pageid">
<div class="container content-section text-center">
    <div class="row justify-content-center">        
        <div class="col-md-8">
            <section class="container wrapper">
            <h2 class="display-3 pt-4">Sign Up</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group <?php (!empty($username_err))?'has_error':'';?>">
                    <label for="username">Username</label>

                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>">

                    <span class="help-block"><?php echo $username_err;?></span>
                </div>

                <div class="form-group <?php (!empty($location_err))?'has_error':'';?>">
                    <label for="location">Location(Division)</label>
                    <input type="text" list="locations" name="location" id="location" class="form-control" value="<?php echo $location ?>">
                        <datalist id="locations">
                            <option value="Barisal">
                            <option value="Chittagong">
                            <option value="Dhaka">
                            <option value="Khulna">
                            <option value="Mymensingh">
                            <option value="Rajshahi">
                            <option value="Rangpur">
                            <option value="Sylhet">
                        </datalist>
                    <span class="help-block"><?php echo $location_err;?></span>
                </div>

                <div class="form-group <?php (!empty($password_err))?'has_error':'';?>">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $password ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>

                <div class="form-group <?php (!empty($confirm_password_err))?'has_error':'';?>">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err;?></span>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-outline-success" value="Submit">
                </div>
                <p>Already have an account? <a href="login.php"><b>Log In here</b></a>.</p>
            </form>
        </section>
            
        </div>
    </div>
</div>
</section>


      
      

  
  
      
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
<!-- endinject -->