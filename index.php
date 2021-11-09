<?php 

    require_once("connection.php");


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
                                        <a class="nav-link" href="#contact">Contact Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Log In</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#search">Search</a>
                                    </li>


                                </ul>              

                            </div>
                        </div>
                    </nav>
<!-- endinject -->

      
<!-- Intro -->
<section id="search">
<div class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-8">
				<h1 class="brand-heading">HELPME.COM</h1>
				<p class="intro-text">
					Getting Info In A CLICK
				</p>
				
                <style>

                    
                    * {
                      font-family: Arial;
                    }

                    * {
                      box-sizing: border-box;
                    }

                    form.example input[type=text] {
                      padding: 10px;
                      font-size: 17px;
                      border: 1px solid grey;
                      float: left;
                      width: 80%;
                      background: #f1f1f1;
                    }

                    form.example button {
                      
                      float: left;
                      width: 20%;
                      padding: 10px;
                      background: #000000;
                      color: white;
                      font-size: 17px;
                      border: 1px solid grey;
                      border-left: none;
                      cursor: pointer;
                    }

                    form.example button:hover {
                      background: #0b7dda;
                    }

                    form.example::after {
                      content: "";
                      clear: both;
                      display: table;
                    }
                </style>
                <form class="example" method="post" action="/action_page.php" style="margin:auto;max-width:500px">
                  <input type="text" placeholder="Search.." name="search" >
                  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
			</div>
		</div>
	</div>
</div>
</div>

</section>

      
<!-- About -->
<section id="pageid">
<div class="container content-section text-center">
    <div class="row justify-content-center">        
        <div class="col-md-8">
            <h2 class="d-block">LIL' ABOUT THIS</h2>
            <p>
                This website is built to help you finding emergency contacts and other info- necessary office address, locations etc in one place, saving your precious time and helping you to relax a bit!
            </p>
            
        </div>
    </div>
</div>
</section>
      
<!-- Portfolio -->
<section id="portfolio">
<div class="gallery">
    <ul class="row">
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/1.jpg" alt="">
        </a>
        </li>
        
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/8.jpg" alt="">
        </a>
        </li>
        
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/5.png" alt="">
        </a>
        </li>
        
        
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/7.jpg" alt="">
        </a>
        </li>
        
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/11.jpg" alt="">
        </a>
        </li>
        
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/10.jpeg" alt="">
        </a>
        </li>
        
        
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/4.jpeg" alt="">
        </a>
        </li>
        
        <li class="col-md-3">
        <a href="portfolio-item.html">
        <img src="assets/css/9.png" alt="">
        </a>
        </li>       

    </ul>
</div>
</section>
      
<!-- Contact -->
<section id="contact">
<div class="container content-section text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>MESSAGE</h2>
            <p>
                 If you like our volunteering website "Helpme.com", we'd love to hear from you, whether it be feedback, thanks, new ideas or even just to say hello, we welcome it all!
            </p>
            <section id="pageid">
                <div class="container content-section">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div id="contactform">
                                <!-- Replace the e-mail address -->
                                <form action="https://formspree.io/wowthemesnet@gmail.com"
                                      method="POST">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                    <input type="email" name="_replyto" placeholder="Your E-mail Address" required>
                                    <textarea name="message" rows="7" placeholder="Type your Message" required></textarea>
                                    <!-- Replace Aries with the name of your website -->
                                    <input type="hidden" name="_subject" value="New message via Aries!" />
                                    <input type="text" name="_gotcha" style="display:none" />
                                    <!-- Replace http://www.themepush.com/freethemes/aries/ with your website url -->
                                    <input type="hidden" name="_next" value="https://wowthemesnet.github.io/template-aries-bootstrap-html/thankyou.html" />
                                    <input class="btn" type="submit" value="Send">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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