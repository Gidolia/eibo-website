<?php include "database_connect.php";?><!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Contact Us || EIBO Software</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="title_logo.png" type="image/x-icon" />

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->
<?php include "analystic.php";
include "google_tag_manager.php";?>
</head>
<body>
	
	<div id="wrapper">
	<?php include "include/header.php";?>
		<section class="section transheader bgcolor">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Contact Us</h2>
						<p class="lead">We offer the best offer for your business</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-details">
							<h3>Welcome to the Support Center</h3>
							<p>If you have information about any security or abuse issue on any of EIBO services, let us know immediately.</p>

							<p>Please use the options below to find and report the problem.</p>

							<hr>

							<h4>Privacy and safety tips</h4>
							<p><a href="#">EIBO Know Good</a> - tips and suggestions to be safer on the web.</p>
						</div>
					</div>

					<div class="col-md-5">
						<form role="form" class="contactform" method="post">
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						    </div>
						    <div class="form-group">
						        <textarea class="form-control" id="message" placeholder="Message" rows="7" name="message"></textarea>
						    </div>
						    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
						</form>
					</div><!-- end col -->

<?php
if(isset($_POST[submit]))
{
    $edf="INSERT INTO `contact_us_eibo` (`cu_id`, `name`, `mobile`, `subject`, `message`, `email`, `date`, `time`, `ip_addreass`) VALUES (NULL, '$_POST[name]', '$_POST[phone]', '$_POST[subject]', '$_POST[message]', '$_POST[email]', '$date', '$time', '$ipad');";
    if($con->query($edf)===TRUE)
    {
        echo "<script>alert('Success! Your Detail Submited Successfully Our Team will contact you Soon'); location.href='contact.php';</script>";
    }
    else{
        echo "<script>alert('Failed! Plz Try Again'); location.href='contact.php';</script>";
    }
}
?>


					<div class="col-md-3 mb30">
						<div class="contact-details">
							<ul>
								<li><i class="fa fa-phone"></i> <span>+91 7869470415</span></li>
								<li><i class="fa fa-whatsapp"></i> <span>+91 7869470415</span></li>
								
								<li><i class="fa fa-envelope"></i> <span><a href="mailto:#">info@eibo.in</a></span></li>
								<li><i class="fa fa-map-marker"></i> <span>306- G.T.B Tower, Govindpuri, City Center, Gwalior (M.P) 474011</span></li>
							
							</ul>
						</div><!-- end contact details -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

        <div id="map"></div>

		

		<?php include "include/footer.php";?>
	</div><!-- end wrapper -->

	<!-- jQuery Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
    <script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.5904996052172!2d78.19816201503018!3d26.209996183435255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x133ad9fb83a0395a!2sEIBO!5e0!3m2!1sen!2sin!4v1627565974728!5m2!1sen!2sin"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>