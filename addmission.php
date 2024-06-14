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
        <title>Addmission Form</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/addmission.css">
    
</head>
    <body  style="background-image:url('./images/inbg.jpg');" >
        <form id="index" action="insert.php" method="post">
            
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
				<div class="container_regfrm_container_parent">
					<h3>ADDMISSION FORM</h3>
				</div>
				
				<div class = "center" >
					<form action="insert.php" method="post" enctype="multipart/form-data">
						<div class = "">
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>Lastname</label>
									<input type="text" name="lastname" class="form-control" required>
								</div> 
							</div>
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>Firstname</label>
									<input type="text" name="firstname" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>Middelname</label>
									<input type="text" name="middelname" class="form-control" required>
								</div>
							</div>	
						</div>	
						<div class =  "">	
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>Email</label>
									<input type="text" name="email" class="form-control" required>
								</div>  
							</div>	
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_gen>
									<label>Gender </label><br>
									<input type="radio" name="gender" value = "male" required>Male 			
									<input type="radio" name="gender" value = "female" required> Female
								</div>
							</div>
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>Date Of Birth</label>
									<input type="date" name="dob" class="form-control" required>
								</div>
							</div>
						</div>
						<div class =  "">	
							<div class="col-md-6" id = "column">
								<div class="form-group" id = u_id>
									<label>Contact No</label>
									<input type="text" name="contact" class="form-control" required>
								</div> 
							</div>
							<div class="col-md-6" id = "column">
								<div class="form-group" id = u_id>
									<label>AlterNative Contact No</label>
									<input type="text" name="altercontact" class="form-control" required>
								</div>    
							</div>
						</div>
						<div class =  "">	
							<div class="col-md-12" id = "column">
								<div class="form-group" id = u_id>
								<label>Address</label>
								<input type="text" name="address" class="form-control" required>
								</div>
							</div>
						</div>	
						<div class =  "">
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>City</label>
									<input type="text" name="city" class="form-control" required>
								</div> 
							</div>
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>State</label>
									<input type="text" name="country" class="form-control" required>
								</div>    
							</div>
							<div class="col-sm-4" id = "column">
								<div class="form-group" id = u_id>
									<label>Nationality</label>
									<input type="text" name="nationality" class="form-control" required>
								</div>    
							</div>	
						</div>	
						<div class =  "">	
							<div class="col-md-12" id = "column">
								<div class="form-group" id = u_id>
									<label>Course</label>
									<select  name="course" class = "form-control" required>
									<option value="">---- Select Your Course ----</option>
									<option value="bcom">BCOM</option>
									<option value="bba">BBA</option>
									<option value="bca">BCA</option>
									<option value="mba">MBA</option>
									<option value="bed">B. Ed</option>
									<option value="msc">M.sc</option>
									</select> 
								</div> 
							</div>
						</div>		
						<div class =  "">	
							<div class="col-md-6" id = "column">
								<div class="form-group" id = u_id>
									<label>Last Qualifying S.S.C Exam Board</label>
									<select  name="tdata" class = "form-control" required>
									<option value="">---- Select Your S.S.C EXAM BOARD ----</option>
									<option value="GHSSEB">GHSSEB</option>
									<option value="Other Board Of Gujarat State">Other Board Of Gujarat State</option>
									<option value="Other Board Of Other State">Other Board Of Other State</option>
									</select> 
								</div> 
							</div>
							<div class="col-md-6" id = "column">
								<div class="form-group" id = u_id>
									<label>Last Qualifying H.S.C Exam Board</label>
									<select  name="hdata" class = "form-control" required>
									<option value="">---- Select Your H.S.C EXAM BOARD ----</option>
									<option value="GHSSEB">GHSSEB</option>
									<option value="Other Board Of Gujarat State">Other Board Of Gujarat State</option>
									<option value="Other Board Of Other State">Other Board Of Other State</option>
									</select> 
								</div> 
							</div>
						</div>		
						<div class =  "">
							<div class="col-md-6" id = "column">
								<div class="form-group" id = u_id>
								<label>10th Marks (* marks [600] )</label>
								<input type="text" name="marks" class="form-control" required>
								</div> 
							</div>
							<div class="col-md-6" id = "column">
								<div class="form-group" id = u_id>
								<label>12th Marks (* marks [750] )</label>
								<input type="text" name="tmarks" class="form-control" required>
								</div> 
							</div>
						</div><br>	
						<div class = "">
							<div class="form-group" id = u_sub>
							    <a href = "index.php"> <input type="submit" class="btn btn-primary" value="Submit"  style = "width : 200px"></a>
							</div>	
						</div>	
					</form>
				</div><br>
				
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
