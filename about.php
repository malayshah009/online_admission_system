<?php
session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
   header("location: login.php");
   exit;
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>About Us </title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
    <body  style="background-image:url('./images/inbg.jpg');" >
        <form id="index" action="" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        <img src="images/cutm.jpg" width="100%" style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>    
				<ul>
					<li style = ><a href="logout.php">logout</a></li>
					<li style = ><a href="reset-password.php">Reset Password</a></li>
					<li style = ""><a href="about.php">About Us</a></li>
					<li style = ""><a href="addmission.php">Addmission Form </a></li>
					<li style = ""><a href="course.php">Coures </a></li>
					<li style = ""><a href="welcome.php">Home</a></li>	
				</ul>
				<br>
				
				<div class="row">
					<div class="col-md-6 ">
						<img src="images/miss3.jpg" width="100%">
						
					</div>
					<div class="col-md-6">
						<h2> * VISION </h2>
						<h4> A globally accredited human resource center of excellence catalyzing “sustainable livelihoods” 
						in the “less developed markets across the globe”.</h4><br>
						<h2> * MISSION </h2>
						<h4>Provision of quality, globally accredited academic programmes in technology and management.<br><br>
										Provision of globally accredited employability training for less endowed segments of the population.<br><br>
										Promotion of entrepreneurial culture and enterprise in the target areas.<br><br>
										Facilitating improved market access to goods and financial services to the target population.<br><br>
										Promotion of lighthouse project interventions in the target area.</h4>
					</div>
					<br>
					<br>
					<br>
					<br>
					
				</div>
				<br>
				<br>
					<div class = "loc">
						<center><h1> LOCATIONS </h1> </center><br><br>
						<div class = "col-sm-3">
							<center><img src="images/locat2.png" height = "70px"></center>
							<center><h3>Gujarat</h3></center>
						</div>
						<div class = "col-sm-3">
							<center><img src="images/locat2.png" height = "70px"></center>
							<center><h3>Bhubaneswar</h3></center>
						</div>
						<div class = "col-sm-3">
							<center><img src="images/locat2.png" height = "70px"></center>
							<center><h3>Delhi</h3></center>
						</div>
						<div class = "col-sm-3">
							<center><img src="images/locat2.png" height = "70px"></center>
							<center><h3>Chennai</h3></center>
						</div>
					</div>
					<br><br><br>
					<footer>
						<div class="container">
							<div class = "col-md-3">
								<div class="follow_us">			
									<label>Follow Us</label><br>
										<a href="https://www.facebook.com/">Facebook</a><br><br>
										<a href="https://twitter.com/">Twitter</a><br><br>
										<a href="https://www.instagram.com/">Instagram</a>
								</div>
							</div>
							<div class = "col-md-3">
								<div class="contact" id="contactus">
									<label>Contact Us</label>
										<p>114 Bolman Court,</p><p>Bhubaneswar 394270</p>
										<p>Tel : 0261 316 8230</p>
										<p> Email: contact@centurion.com</p>
								</div>
							</div>
						</div>	
							<div class="copyright">
								<span>Copyright &copy; 2022-23 Online Addmission System. All rights reserved.</span>
							</div>
					</footer>
					<br><br>
					
</body>
</html>