<?php 

include("connection.php");

if(isset($_POST['sub'])){

		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpwd=$_POST['cpwd'];
		$pgender=$_POST['pgender'];
		$phone=$_POST['phone'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$progress=0;

	/*$len=strlen($phone);
	if($len==10){
		$great=1;

	}
	else{
	$great=0;
	echo "Please enter a valid number of 10 digits";
	}

	//validation of confirm password
	if($password==$cpwd){ 
	$match=1; //passwords match
	 }
	else{ 
	$match=0; 
	echo "The two passwords do not match"; //donot match
	}

		$all="select * from parent";
		$all_result=$con->query($all);

	//validation of unique username */

		/*while($row=$all_result->fetch_assoc()){
			if($row[username]==$username){
			//username already taken
				$flag=0;
				echo "Sorry,username already taken";
			}

			else{ 
			$flag=1;
			//valid username
			}

		}*/


		


			//insert parent's info
			$parent_insert="insert into parent values('".$username."','".$email."','".$password."','".$pgender."',".$phone.",'".$fname."','".$lname."')";

			$parent_insert_result = $con->query($parent_insert);
			if($parent_insert_result)
			{
				//parent insertion successful
				$parent=1;
				
			}
			else {
				//parent not inserted
				$parent=0; 
			}

			if($parent==1){
			header("Location:login.php");
			}
			
			
		



}


?>

 
<html>
 
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="signup.js"></script>	
<link type="text/css" rel="stylesheet" href="signup.css">
<link href="https://fonts.googleapis.com/css?family=Short+Stack" rel="stylesheet">
</head>
 
<body>
 <div id="nav">
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="signup.php">Signup</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>

	<h2 id="bor"><center>Fill out the form below</center></h2>
 


<form id="theForm" action="" method="post" onSubmit="return validateTextbox();" >
 
 	<h3>Parent's Information:</h3>

<div class="row">
	<label for="fname">First name  :</label>
	<input type="text" id="fname" name="fname" placeholder="Type the first name here" size="60" required> 
	<br> <br>
</div>

<div class="row">
	<label for="lname">Last name  :</label>
	<input type="text" id="fname" name="lname" placeholder="Type the last name here" size="60" required> 
	<br> <br>
</div>

<div class="row">
	<label for="username">Username :</label>
	<input type="text" id="fname" name="username" placeholder="Type a UNIQUE username here" size="60" required> 
	<br> <br>
</div>

 
<div class="row">
	<label for="email">Email :</label>
	<input type="email" id="email" name="email" size="60" placeholder="Email address" required> 
	<br><br>
</div>

 <div class="row">
	<label for="password">Password :</label>
	<input type="password" id="password" name="password" size="60" placeholder="Give a password" required> <br>
	<input type="checkbox" onclick="myFunction()">
	Show Password

	
	<br><br>
</div>

<div class="row">
	<label for="cpwd">Confirm Password:</label>
	<input type="password" id="cpwd" name="cpwd" placeholder="Type the same password again" size="60" required> 
	<br> <br>
</div>

<div class="row">
	<label>Gender :</label>
	&nbsp;
	Male:
		<input type="radio" value='m' id="pgender" name="pgender" required>

	Female:
		<input type="radio" value='f' id="pgender" name="pgender" required> 

	<br> <br>
</div>
 
<div class="row">
	<label for="phone">Phone :</label>
	<input type="tel" id="phone" name="phone" size="60" placeholder="Phone number" required> 
	<br> <br>
<hr id="ok">
</div>

 



<div class="row">
	<label for="tc">Terms and Conditions :</label>
	<br>
	<input type="checkbox" required> I accept all the terms and conditions
</div>




<br><br>

   <input type="submit" value="Submit" name="sub" id="sub">
</form>
<br><br>

</body>
 
</html>
