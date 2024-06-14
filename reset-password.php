<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: login.php");
    exit;
}
 

require_once "config.php";
 

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
   
    if(empty(trim($_POST["new_password"])))
	{
        $new_password_err = "Please enter the new password.";   		
    } elseif(strlen(trim($_POST["new_password"])) < 6)
	{
        $new_password_err = "Password must have atleast 6 characters.";
    } else
	{
        $new_password = trim($_POST["new_password"]);
    }
    
    if(empty(trim($_POST["confirm_password"])))
	{
        $confirm_password_err = "Please confirm the password.";
    } 
	else
	{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password))
		{
            $confirm_password_err = "Password did not match.";
        }
    }
        
    
    if(empty($new_password_err) && empty($confirm_password_err))
	{
       
        $sql = "UPDATE addmission SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
		{
            
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            
            if(mysqli_stmt_execute($stmt))
			{
                
                session_destroy();
                header("location: login.php");
                exit();
            } 
			else
			{
                echo "Oops! Something went wrong. Please try again later.";
            }

            
            mysqli_stmt_close($stmt);
        }
    }
    
    
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Reset-Password</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
        
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
    <div class ="center">
	<div id = re>
        <h2 align = "center">Reset Password</h2>
	</div><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group" id = re_new>
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group" id = re_cpass>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group" id = re_sub>
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>