<?php

$con=new mysqli("localhost","root","","autism");
if($con)
{
	echo "connection succesful";
}

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$pgender=$_POST['pgender'];
$phone=$_POST['phone'];
$cname=$_POST['cname'];
$cgender=$_POST['cgender'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$progress=0;


$all="select * from parent";
$all_result=$con->query($all);
while($row=$all_result->fetch_assoc()){
	if($row[username]==$username){
	//username already taken
		header("Location:signup.html");
	}
	else{ //valid username
	}

}



echo "$username  $email  $password  $pgender  $phone   $cname   $cgender    $dob";


//establish connection


//insert parent's info
$parent_insert="insert into parent values('".$username."','".$email."','".$password."','".$pgender."',".$phone.",'".$fname."','".$lname."')";

$parent_insert_result = $con->query($parent_insert);
if($parent_insert_result)
{
	echo"Parent insertion successful";
}


/*
//get pid
$fetch_pid="select pid from parent where username='".$username."' AND password='".$password."' ";
$pid_array=$con->query($fetch_pid);
if($pid_array){ 
echo"fetched pid succesffuly";

}

$pid_row=$pid_array->fetch_assoc();
$pid=$pid_row[pid];
echo "$pid";
*/




//insert childs info 
$child_insert="insert into child(username,name,dob,gender,progress) values('".$username."','".$cname."','".$dob."','".$cgender."',".$progress.")";

$child_insert_result=$con->query($child_insert);
if($child_insert_result){
echo "child successfully inserted";
header("Location:login.php"); //goto login page
}



?>
