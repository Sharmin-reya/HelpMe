<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header('location: login.php');
    exit;
}
 
// Include config file
require_once 'config/config.php';
 
// Define variables and initialize with empty values
$new_password = $confirm_password = '';
$new_password_err = $confirm_password_err = '';
 
// Processing form data when form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
    // Validate new password
    if(empty(trim($_POST['new_password']))){
        $new_password_err = 'Please enter the new password.';     
    } elseif(strlen(trim($_POST['new_password'])) < 6){
        $new_password_err = 'Password must have atleast 6 characters.';
    } else{
        $new_password = trim($_POST['new_password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST['confirm_password']))){
        $confirm_password_err = 'Please confirm the password.';
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = 'Password did not match.';
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = 'UPDATE usersignup SET password = ? WHERE id = ?';
        
        if($stmt = $mysql_db->prepare($sql)){
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_password, $param_id);
            
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
    <style type="text/css">
        .wrapper{ 
            width: 500px; 
            padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
    </style>
</head>
<body>
        
</body>

</html>

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
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Emergency</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                        <a class="dropdown-item" href="Fire_service.html">Fire Service</a>
                        <a class="dropdown-item" href="Hos_Emgunit.html">Hospitals(Emergency Unit)</a>
                        <a class="dropdown-item" href="Ambulance.html">Ambulance</a>
                        <a class="dropdown-item" href="Law.html">Law Enforcement Org</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organizations</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                        <a class="dropdown-item" href="Soc_Welfare.html">Social Welfare</a>
                        <a class="dropdown-item" href="Govt_org.html">Govt Organization</a>
                        <a class="dropdown-item" href="Immigration.html">Immigration</a>
                        <a class="dropdown-item" href="E_com.html">E-Commerce</a>
                        <a class="dropdown-item" href="Others.html">Others</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transport</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                        <a class="dropdown-item" href="Train.html">Train</a>
                        <a class="dropdown-item" href="Bus_LR.html">Bus(long route)</a>
                        <a class="dropdown-item" href="Bus_InDhaka.html">Bus(inside Dhaka)</a>
                        <a class="dropdown-item" href="Plane.html">Plane</a>
                        <a class="dropdown-item" href="Trans_others.html">Others</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transaction</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                        <a class="dropdown-item" href="Govt_Bank.html">Govt Bank</a>
                        <a class="dropdown-item" href="Pri_bank.html">Private Bank</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Institution</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">                        
                        <a class="dropdown-item" href="Edu_Ins.html">Educational Institution</a>
                        <a class="dropdown-item" href="Training_SkillCenter.html">Professional & Personal Training Skill Center</a>
                        <a class="dropdown-item" href="Sports_training.html">Sports Training Center</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="index.html#contact">Contact Us</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="index.html#search">Search</a>
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
            <h3>Reset Password</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                    <label>New Password</label>
                    <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                    <span class="help-block"><?php echo $new_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-primary" value="Submit">
                    <a class="btn btn-block btn-link bg-light" href="welcome.php">Cancel</a>
                </div>
            </form>
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
<!-- endinject -->