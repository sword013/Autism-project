<?php
include("connection.php");
session_start();
$user=$_SESSION['user_name'];
echo "<h1 style='color: red; text-align: center;'>Hello $user</h1><h2 style='text-align:center; color:blue;'>Select Child :</h2>";

$fetch="select * from child where username='".$user."'";
$fetch_result=$con->query("$fetch");
/*if($fetch_result){
echo "fetched children successfully";
}*/

$n=$fetch_result->num_rows;




while($row=$fetch_result->fetch_assoc())
{
	$cname=$row[cname];
	echo "<center><form method='post'><input type='submit' value='$row[cname]' name='$row[cname]'></form></center>";
	/*echo "<button value='$row[name]'>$row[name]</button>";*/

		
}


$fetchs="select * from child where username='".$user."'";
$fetchs_result=$con->query("$fetchs");
/*if($fetchs_result){
echo "fetched children successfully";
}*/


while($rows=$fetchs_result->fetch_assoc()){
		//echo "$rows[cname]";

		if(isset($_POST["$rows[cname]"])){
			$cname=$rows[cname];
		}
}


echo "<br><h2 style='text-align:center; color:blue;'>Selected child :</h2> <center style='color:maroon;font-size:50px;'>$cname</center>";
$_SESSION['c_name']=$cname;

echo"
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet'>
	<style>
	body{
	background-image: url('prat.jpg');
	background-repeat:no-repeat;
	background-size: cover;
	background-image: center;
	}
	
	h1{
	font-family: 'Gochi Hand', cursive;
	font-size:60px;
	}

	h2{
	font-family: 'Gochi Hand', cursive;
	font-size:40px;
	}
	
	center{
	font-family: 'Gochi Hand', cursive;
	}
	
	input[type=submit]{
		background-color: #3498DB;
  		box-shadow: 0px 15px 0px 0px darken(#3498DB, 5%);
		text-decoration: none;
		  color: white;
		  width: 200px;
		  height: 100px;
		  background: #F2385A;
		  position: relative;
		  margin: 10px;

		  font-size: 30px;
		  border-radius: 10px;
		  box-shadow: 0px 15px 0px 0px darken(#F2385A, 5%), 0px 0px 20px 0px #bbb;
  		  box-shadow: 0px 7px 0px 0px darken(#F2385A, 5%);


		
	}
	
	</style>
</head>
</html>
";























/*
echo "<select>";
for($i=0;$i<$n;$i++)
{
echo "<option>$row[name]</option>";

}
echo "</select>";
*/

?>


