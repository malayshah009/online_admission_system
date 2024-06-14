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
        <title>ADDMISSION FORM SUCESSFULLY SUBMITTED</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
        <link rel="stylesheet" type="text/css" href="css/addmission.css">
		 <script>
        $(document).ready(function()
		{
            $('[data-toggle="tooltip"]').tooltip();   
        });
		</script>
		<style>
		.fa
		{
			font-size : 25px;
		}
		thead
		{
			background-color: #A3BBCA;
		}
		tbody
		{
			background-color: #CDB7B7;
		}
		.container_regfrm_container_parent h3 
			{
				text-align: center;
				border: 1px solid rgba(44, 78, 134, 0.5);
				background-color: #c5d9e2;
				font-size: 3.5vh;
				color: rgb(44, 78, 134);
				font-weight: 500;
				padding: 15px;
				width: 100%;
				margin: 2% auto;
				box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.6);
			}   
		</style>
    
</head>
<body  style="background-image:url('./images/inbg.jpg');" >
        <form id="index" action="" method="post">
            <div class="wrapper">
                <div class="col-md-12">
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        <img src="images/cutm.jpg" width="100%" style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>  
				<ul>
					<li style = ><a href="logout.php">logout</a></li>
				</ul>
				<br>
				<div class="container_regfrm_container_parent">
					<h3>ADDMISSION FORM SUCESSFULLY SUBMITTED</h3>
				</div>
				<div>
				 <?php
                    // Include config file
                    include "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM adddata";
                    if($result = mysqli_query($link, $sql))
                    {
                        if(mysqli_num_rows($result) > 0)
                        {
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Lastname</th>";
                                        echo "<th>Firstname</th>";
                                        echo "<th>Middelname</th>";
                                        echo "<th>Email</th>";
										echo "<th>Gender</th>";
										echo "<th>Dob</th>";
										echo "<th>Contact</th>";
										echo "<th>Altercontact</th>";
										echo "<th>Address</th>";
										echo "<th>City</th>";
										echo "<th>Country</th>";
										echo "<th>Nationality</th>";
										echo "<th>Course</th>";
										echo "<th>SSC Board</th>";
										echo "<th>HSC Board</th>";
										echo "<th>10th Marks</th>";
										echo "<th>12th Marks</th>";
										echo "<th colspan = '2'>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['lastname'] . "</td>";
                                        echo "<td>" . $row['firstname'] . "</td>";
                                        echo "<td>" . $row['middelname'] . "</td>";
										echo "<td>" . $row['email'] . "</td>";
										echo "<td>" . $row['gender'] . "</td>";
										echo "<td>" . $row['dob'] . "</td>";
										echo "<td>" . $row['contact'] . "</td>";
										echo "<td>" . $row['altercontact'] . "</td>";
										echo "<td>" . $row['address'] . "</td>";
										echo "<td>" . $row['city'] . "</td>";
										echo "<td>" . $row['country'] . "</td>";
										echo "<td>" . $row['nationality'] . "</td>";
										echo "<td>" . $row['course'] . "</td>";
										echo "<td>" . $row['tdata'] . "</td>";
										echo "<td>" . $row['hdata'] . "</td>";
										echo "<td>" . $row['marks'] . "</td>";
										echo "<td>" . $row['tmarks'] . "</td>";
                                        echo "<td colspan>";
                                           // echo '<a href="update.php?id=<?'. $row['id'] .'" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } 
						else
						{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } 
					else
                    {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
					</div>
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
</body>
</html>