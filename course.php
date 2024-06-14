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
        <title>Course</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/about.css">
    <style>
     		
    </style>
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
				<br><br> 
				<div class="container">
					  <center><h2> COURSES </h2><br></center>
					  <p></p>            
					  <table class="table table-condensed">
						<thead>
						  <tr>
							<th>COURSE</th>
							<th>ELIGIBILITY</th>
							<th>SEATS AVAIBLITY</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>MBA</td>
							<td>Graduation</td>
							<td>320</td>
						  </tr>
						  <tr>
							<td>BBA</td>
							<td>10+2</td>
							<td>300</td>
						  </tr>
						  <tr>
							<td>BCA</td>
							<td>10+2</td>
							<td>300</td>
						  </tr>
						  <tr>
							<td>BCOM</td>
							<td>10+2</td>
							<td>300</td>
						  </tr>
						  <tr>
							<td>B.Ed</td>
							<td>Graduation</td>
							<td>180</td>
						  </tr>
						  <tr>
							<td>M.Sc</td>
							<td>Graduation</td>
							<td>120</td>
						  </tr>
						</tbody>
					  </table>
				</div>	  
				<div class="container">
					  <center><h2> FEES</h2><br></center>
					  <p></p>            
					  <table class="table table-condensed">
						<thead>
						  <tr>
							<th>COURSE</th>
							<th>FEES</th>
							<th>ELIGIBILITY</th>
							
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>MBA</td>
							<td>₹32,500 (1st Year Fees)</td>
							<td>Graduation</td>
							
						  </tr>
						  <tr>
							<td>BCOM</td>
							<td>₹22,500 (1st Year Fees)</td>
							<td>10+2</td>
							
						  </tr>
						  <tr>
							<td>BBA</td>
							<td>₹27,310 (1st Year Fees)</td>
							<td>10+2</td>
							
						  </tr>
						  <tr>
							<td>BCA</td>
							<td>₹31,110 (1st Year Fees)</td>
							<td>10+2</td>
							
						  </tr>
						  <tr>
							<td>B.Ed</td>
							<td>₹30,000 (1st Year Fees)</td>
							<td>Graduation</td>
							
						  </tr>
						  <tr>
							<td>M.Sc</td>
							<td>₹8,830 (1st Year Fees)</td>
							<td>Graduation</td>
							
						  </tr>
						</tbody>
					  </table>
				</div>
				<br><br>
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
			</div>		
</body>
</html>
