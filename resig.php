<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Validate username
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter a username.";
    }
     elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"])))
    {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } 
    else
    {
        // Prepare a select statement
        $sql = "SELECT id FROM addmission WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                
                mysqli_stmt_store_result($stmt);   /* store result */
                
                if(mysqli_stmt_num_rows($stmt) == 1)
				{
                    $username_err = "This username is already taken.";
                } 
                else
                {
                    $username = trim($_POST["username"]);
                }
            } 
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"])))
    {
        $password_err = "Please enter a password.";     
    } 
	elseif(strlen(trim($_POST["password"])) < 6)
    {
        $password_err = "Password must have atleast 6 characters.";
    } 
	else
    {
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"])))
	{
        $confirm_password_err = "Please confirm password.";     
    } 
	else
	{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password))
		{
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        
        // Prepare an insert statement
        $sql = "INSERT INTO addmission (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
           $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            if(mysqli_stmt_execute($stmt))
            {
                // Redirect to login page
                header("location: login.php");
            } else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/resig.css">
       
        <title>Registration</title>
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
             
        
            
            
                <div  id="divtop">
                    
                        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                        <div class = "center">
								<center><img src="./images/signup1.jpg" width="150px" height="90px" ></center>
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								
									<div class="form-group" id = r_id>
										<label>Username</label>
										<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
										<span class="invalid-feedback"><?php echo $username_err; ?></span>
									</div>    
									<div class="form-group" id = r_pass>
										<label>Password</label>
										<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
										<span class="invalid-feedback"><?php echo $password_err; ?></span>
									</div>
									<div class="form-group" id = r_cpass>
										<label>Confirm Password</label>
										<input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
										<span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
									</div>
									<div class="form-group" id = r_btn>
										<input type="submit" class="btn btn-primary" value="Submit">
										<input type="reset" class="btn btn-secondary ml-2" value="Reset">
									</div>
									<div class = "form-group" id = r_not>
									<p align = "center">Already have an account? <a href="login.php">Login here</a>.</p>
									</div>
								</form>  
                     </div>
                    </div>
               </div>
            </div>  
            </div>
        </form>  
       </body>
</html>
