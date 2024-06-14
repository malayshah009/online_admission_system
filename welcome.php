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
        <title>Welcome</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/welcome.css">
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
				<div class = "wel">
					<h1 class="my-5" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
				</div><br><br>
				<div class="row">
					<div class="col-md-4 "><p>Centurion University of Technology and Management is a multi-sector, private state university from 
					Odisha, India. With its main campus at Paralakhemundi in the Gajapati district and another constituent campus located at Jatni, 
					on the fringes of Bhubaneswar, it was accorded the status of a university in the year 2010. The university has been accredited by
					NAAC with 'A' Grade, thereby becoming the youngest private university to have earned the distinction. In 2016, the Bhubaneswar 
					campus of the university was ranked 81 among the institutions offering engineering education in India by the Ministry of Human 
					Resource Development, Government of India under the NIRF.<br><br> The university offers under-graduate, post-graduate and doctoral 
					courses in the fields of engineering & technology, agricultural sciences, architecture planning and design, mining, teachers'
					education, media and communication, paramedics and allied Health Sciences, pharmacy and life sciences, management, applied 
					sciences and a number of vocational trades in its two major campuses. It also has regional campuses at Balangir, Rayagada and
					Chhatrapur. <p><br>
					<p><h4 class = >HISTORY:</h4>The main campus of the university at Paralakhemundi was known previously as Jagannath Institute for 
					Technology and Management (JITM), this was established in 1997. The institute was affiliated to Berhampur University, Berhampur 
					till 2003 and Biju Patnaik University of Technology, Rourkela until 2010. The institute was taken over by a group of academicians 
					led by Dr. Mukti Kanta Mishra and Prof. D.N. Rao in the year 2005. In 2008, a second campus, Centurion Institute of Technology, 
					was opened at Bhubaneswar. Subsequently, JITM was transformed into Centurion University of Technology and Management in August 
					2010, through an act of Odisha Legislative Assembly.</p>
					</div>
					<div class="col-md-8 "><img src="images/u2.jpg" width="100%"></div>
				</div>
				<br>
				<div class = "backk" >
				<div class="row">
					<div class="col-md-6" id = "bra">
					<img src="images/welc1.jpg" width="100%" height = '200px' ></img>
					</div>
					<div class="col-md-6" id = "bra">
					<img src="images/welc2.jpg" width="100%" height = '200px' ></img>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-6" id = "bra">
					<img src="images/welc3.jpg" width="100%" height = '200px' ></img>
					</div>
					<div class="col-md-6" id = "bra">
					<img src="images/welc4.jpg" width="100%" height = '200px' ></img>
					</div>
				</div><br><br>
				</div>
</body>
</html>
            