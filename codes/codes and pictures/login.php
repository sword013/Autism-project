<?php
session_start();
include('connection.php');
?>


<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css?family=Short+Stack" rel="stylesheet"> 


	<title>AUTISTICO</title>
</head>
<body>
	<div id="nav">
		<ul>

			<li><a href="home.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="signup.php">Signup</a></li>
		</ul>
	</div>

	<div class="container">
		<table>
			<tr>
				<td>
					<form action="" method="post">
					Login : <br><br>
					<p id="username">Username:<input type="text" name="username"></p>
					<p>Password:<input type="password" name="password"></p>
					<p><input type="submit" value="Log In" name="login"></p>
					</form>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>

<?php
if(isset($_POST['login'])){

	$username=$_POST['username'];
	$password=$_POST['password'];


	

	$all="select * from parent ";
	$all_result=$con->query($all);

	if($all_result){
		echo "";
	}
	else{
		echo "Error in fetching data from database";
	}



	$flag=0;

	while($row=$all_result->fetch_assoc())
	{
		if($row[username]==$username && $row[password]==$password){
			$flag=1; //valid user
		}
		else{
		  //invalid user
		}
	}







	//if valid user then go to loggedin.html
	if($flag==0){
		if(isset($_POST['login']))
		echo "<p id='error'>Incorrect username or password<p>";
	}
	else{
		$_SESSION['user_name']=$username;
		header("Location:loggedin.php");
	}


}
?>
