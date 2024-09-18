<?php 
	include("connection.php");
session_start();
$user=$_SESSION['c_name'];
					
					$correct_r="select * from report where cname='$user'";
					$correct_f=$con->query($correct_r);
		
					while($rows=$correct_f->fetch_assoc()){
						$correct=$rows[correct];
						$total=$rows[total];
					}
		
					$correct++;
					$total++;

					$update="update report set correct=$correct,total=$total where cname='$user'";

					$update_r=$con->query($update);

"location.href='game0.php'";
					
?>
