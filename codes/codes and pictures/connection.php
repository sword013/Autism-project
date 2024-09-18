<?php
	$con=new mysqli("localhost","root","","autism");

	if($con){
		echo "";
	}

	else{
	 	die("Connection failed because".mysqli_connect_error());
	}
?>
