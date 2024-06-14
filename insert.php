<?php
session_start();
 
$link = mysqli_connect("localhost", "root", "", "online");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
   header("location: login.php");
   exit;
}


// Escape user inputs for security
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$middelname = mysqli_real_escape_string($link, $_REQUEST['middelname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$altercontact = mysqli_real_escape_string($link, $_REQUEST['altercontact']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$nationality = mysqli_real_escape_string($link, $_REQUEST['nationality']);
$course = mysqli_real_escape_string($link, $_REQUEST['course']);
$tdata = mysqli_real_escape_string($link, $_REQUEST['tdata']);
$hdata = mysqli_real_escape_string($link, $_REQUEST['hdata']);
$marks = mysqli_real_escape_string($link, $_REQUEST['marks']);
$tmarks = mysqli_real_escape_string($link, $_REQUEST['tmarks']);
 
// attempt insert query execution
$sql = "INSERT INTO adddata (lastname, firstname, middelname, email, gender, dob, contact, altercontact, address, city, country, nationality, course, tdata, hdata, marks, tmarks) VALUES ('$lastname', '$firstname', '$middelname', '$email', '$gender', '$dob', '$contact','$altercontact', '$address', '$city', '$country', '$nationality', '$course', '$tdata', '$hdata', '$marks','$tmarks')";

if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 header("location: index.php");
    // close connection
    mysqli_close($link);
?>