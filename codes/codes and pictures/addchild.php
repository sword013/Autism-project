<?php
include("connection.php");
session_start();
$user=$_SESSION['user_name'];
?>


<!-- CHild Details -->
<form action="" method="post">
<h3>Fill in the child's details :</h3>


<div class="row">
	<label for="cname" action="" method="post">Child's Name :</label>
	<input type="text" id="cname" name="cname" placeholder="Type the full name here" size="60"> 
	<br> <br>
</div>
 
<div class="row">
	<label>Gender :</label>
	&nbsp;
	Male:
		<input type="radio" id="cgender" value="m" name="cgender" required>

	Female:
		<input type="radio" id="cgender"  value ="f" name="cgender" required> 

	<br> <br>
</div>

 <div class="row">
 	<label for="dob">Child's Date of Birth :</label>
 	<input type="date" id="dob" name="dob" style="width: 450px" required>
 	<br><br>
 </div>

<br><br>

   <input type="submit" value="Submit" id="sub" name="addchild">
</form>

<?php
		
if(isset($_POST['addchild'])){
	
	$cname=$_POST['cname'];
	$dob=$_POST['dob']; 
	$gender=$_POST['cgender'];
	$progress=0;

	echo"$cname $dob $cgender $progess";
	$child_insert="insert into child(username,cname,dob,gender,progress) values('".$user."','".$cname."','".$dob."','".$gender."',".$progress.")";

	$child_insert_result=$con->query($child_insert);
	if($child_insert_result){
	echo "child successfully inserted";
	header("Location:try.php"); //goto login page
	}
}


?>

<html>
<head>
	<style>
		body{
		background-image: url('prat.jpg');
		background-repeat:no-repeat;
		background-size: cover;
		background-image: center;
		}

		form {
		color:white;
		display: table;
		padding: 40px;
		background-color: #F2385A;
		border: solid 2px black;
		margin-left:auto;
		margin-right:auto;
		height:200px; 
		width:700px;
		}
	</style>
</head>
<body>
</body>
</html>
