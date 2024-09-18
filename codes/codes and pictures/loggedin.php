<?php
include('connection.php');
session_start();
$user=$_SESSION['user_name'];
if($user==true)
{
	//some user has logged in
}
else
{ 
	//no user has logged in and one cannot directly access this page
	header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>CSS Website Layout</title>
<link rel="stylesheet" type="text/css" href="why.css">



</head>
<body>
 <div class="leftside">
    <a href="loggedin.php">HOME</a>
    <a href="about.jpg" target="frame1">ABOUT</a>
    <a href="what is autism(1).jpg" target="frame1">CONTACT</a>
    <a href="options.html">GAMES</a>
    <a href="report.php" target="frame1">REPORT</a>
    <a href="addchild.php" target="frame1">ADD CHILD</a>
    <a href="logout.php"> LOGOUT</a>
    <a target="_blank">
    <img src="side.jpg" alt="side" width="100%" height="200px">
    </a>
  </div>

  <div class="main">

    <iframe name="frame1" height="580px" width="100%" src="try.php"></iframe>
  </div>


</html>
