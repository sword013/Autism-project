<?php
include("connection.php");
session_start();
$cname=$_SESSION['c_name'];
$user=$_SESSION['user_name'];

$fetch="select * from report where username='$user' and cname='$cname' and gname='Color'";
$fetch_result=$con->query($fetch);
$row=$fetch_result->fetch_assoc();




 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1> Report of child <?php echo"$row[cname]"; ?> : </h1>
	<table title="Game1" align="center" border="1" >
		<tr>
			<th>Game Name</th>
			<td><?php echo"$row[gname]"; ?></td>
		</tr>
		
		<tr>
			<th>Correct Answers</th>
			<td><?php echo"$row[correct]"; ?></td>
		</tr>
		
		<tr>
			<th>Total</th>
			<td><?php echo"$row[total]"; ?></td>
		</tr> 
	</table>
</body>
</html>
