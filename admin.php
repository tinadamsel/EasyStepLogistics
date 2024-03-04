<?php
error_reporting(0);
$success = $_REQUEST['success'];
?>

<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->  
    <title>Track Your Order - Easy Step Logistics </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css"> 

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" style="background-color: ghostwhite">

	
	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@easysteplogistics.com</a></div>
					</div>
                    
                    <div class="left-top">
						<div class="mail-b"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +1 361 7220 213</a></div>
					</div>  
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p> Terms & Conditions</p>
					
                    </div>
					<div class="right-top">
						<ul>
							<li><a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://wa.me/13617220213"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
    
	<!-- Start header -->
    <header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo3.png" alt="image" style="width: 170px; height: 50px;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="index.php"> <strong> Home </strong></a></li>
                        <li><a class="nav-link" href="about.php"><strong> About Us </strong></a> </li>
                        <li><a class="nav-link" href="services.php"> <strong> Services </strong></a></li>
                        <li><a class="nav-link" href="contact.php"> <strong> Contact </strong></a></li>
                        <li><a class="nav-link" href="faqs.php"> <strong> Faqs </strong></a></li>
                        <li><a class="nav-link" href="generateid.php"> <strong> Generate ID </strong></a></li>
                        <li><a  class="nav-link" href="track.php"> <strong> Track Your Order </strong></a></li>

                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
    
    <div> 
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-317e6f83-4165-4307-8817-6a3c4e3243f1"></div>
	</div>
	
	<div id="join us" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2> <b> CHANGE LOCATION </b></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2> Tracking ID</h2>
                        </div> 
                        
                        <form action="includes/location.php" method="post">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="trackid">Tracking ID </label>
                                        <input id="trackid" name="trackid" type="text" placeholder="Enter Tracking ID e.g.12345" class="form-control input-md">
                                    </div>
                                </div> 
                                      
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="location">Location </label>
                                        <input id="location" name="location" type="text" placeholder="Enter location" class="form-control input-md">
                                    </div>
                                </div> 
                                
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="generate" class="new-btn-d br-2"> TRACK RESULT </button>
                                    </div>
                                </div>
                               <span style="color: darkblue; text-align: center; font-family: times new roman; padding: 15px; font-size:20px;">
                                <?php
                                if($success==2) {
                                echo'Your message was updated successfully.';    
                                }   
                                ?> 
                                </span>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Why Choose Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">We put in our best </h4>
                                <div class="feature-content">
                                    <p>We pride ourselves on our exceptional service. Each consignment is planned, managed and tracked, to ensure your delivery is handled with care, accuracy and speed. Wherever and whenever you need us, we’ve always got you covered.</p>
                                </div>
                            </div> 
                        </div>
                    </div>
				</div>
			</div> 
		</div>
	</div> 
	
 
    
    
    <!--- footer--> 
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3> <img src="images/logo_ab.png" width="150" height="50"> </h3>
                        </div>
                        <p>  We pride ourselves on our exceptional service. Each consignment is planned, managed and tracked, to ensure your delivery is handled with care, accuracy and speed. Wherever and whenever you need us, we’ve always got you covered.</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
				            <li><a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https:"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li> 
						
							</ul>						
                        </div>						
                    </div>
                </div> 

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Working Hours</h3>
                        </div>
                        <ul class="footer-links">
                            <li>Monday - Friday: 7:00 - 17:00</li>
							<li>Saturday - 7:100 - 12:00</li>
                            <li>Holidays - 8:100 - 10:00</li> 
				        </ul>
                    </div> 
                </div> 
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="info@easysteplogistics.com">info@easysteplogistics.com</a></li>
                            <li><a href="www.easysteplogistics.com">www.easysteplogistics.com</a></li>
                            <li>6859 Hollywood Blvd, California, U.S.A</li>
                            <li>+1 361 7220 213</li>
                        </ul>
                    </div>
                </div>
				
            </div>
        </div>
    </footer>
<!--end footer--> 
    
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">            
                    <p class="footer-company-name" style="color: white;"> <b> All Rights Reserved. &copy; 2021 Easy Step Logistics  <br> Designed by Benhills Digital Tech </b></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>