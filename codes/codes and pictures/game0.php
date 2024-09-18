<?php 

	include("connection.php");
	session_start();
	$user=$_SESSION['user_name'];
	$cname=$_SESSION['c_name'];

	if($user==true)
	{
		//some user has logged in
	}
	else
	{ 
		//no user has logged in and one cannot directly access this page
		header("Location:login.php");
	}

	$flag=1;

	$fetch="select * from report";
	$fetch_result=$con->query($fetch);
	

	while($row=$fetch_result->fetch_assoc()){
		if($row[cname]==$cname && $row[gname]=='Emotions')
		{ 	//child's entry already exists in the table
			$flag=0;
		}
		

	}

	if($flag==1){
	//child's entry is not already in the table, so insert it
	$insert="insert into report values('".$user."','".$cname."','Emotions',0,0)";
	$insert_result=$con->query($insert);
	
		
	}
//breakpoint1 

/*
//query1 :increment both total and correct(when an if gets executed)
if(){
	$update="update report set total=total+1,correct=correct+1 where cname='$cname' and gname='Emotions'";
	$update_result=$con->query($update); 

}

	
//query2 : increment only total(when any else gets executed)
if(){

	$update="update report set total=total+1 where cname='$cname' and gname='Emotions'";
	$update_result=$con->query($update);
}*/
			
?>

<html>
<head>
	<title>AUTISTICO</title>
	<link rel="stylesheet" type="text/css" href="game0.css">

	<script type="text/javascript">

		
		var img=["happy.jpg","sad.jpg","angry.jpg","disgust.jpg","bored.jpg"];
		var y;

		var total=0;
		var correct=0;

		
		function pictureChange()
		{
			var pickImage=pickImage();
			function pickImage(){
			    var random=Math.floor(Math.random()*5);
			    return img[random];
			
			}

			document.getElementById('current').src=pickImage;
		}


		function checkImage(y){
			var x=document.getElementById('current').src;
			
			switch(y){
				case 1: 
					if(x==="http://localhost/tejas/happy.jpg"){
						alert("Correct");
					<?php
						$fetch="select * from report";
						$fetch_result=$con->query($fetch);
						while($row=$fetch_result->fetch_assoc()){
							if($row[username]==$user && $row[cname]==$cname) {							
							$correct=$row[correct];
							$total=$row[total];
						}

					$update="update report set total=total+1,correct=correct+1 where cname='$cname' and gname='Emotions'";
	$update_result=$con->query($update); 

						
						}
					?>
					
					}
					else{

						
						alert("Sorry! Try Again!");
<?php
						$fetch="select * from report";
						$fetch_result=$con->query($fetch);
						while($row=$fetch_result->fetch_assoc()){
							if($row[username]==$user && $row[cname]==$cname) {							
							$total=$row[total];}
						}

						$update="update report set total=total+1 where cname='$cname' and gname='Emotions'";
						$update_result=$con->query($update); 
						?>
						
					}

					break;

				case 2: 
					if(x==="http://localhost/tejas/angry.jpg"){
						alert("Correct");
						
					}
					else{
						alert("Sorry! Try Again!");
						
					}

					break;

				case 3: 
					if(x==="http://localhost/tejas/sad.jpg"){
						alert("Correct");
						
					}
					else{
						alert("Sorry! Try Again!");
						
					}

				break;

				case 4: 
					if(x==="http://localhost/tejas/disgust.jpg"){
						alert("Correct");
						
					}
					else{
						alert("Sorry! Try Again!");
						
					}

					break;

				case 5: 
					if(x==="http://localhost/tejas/bored.jpg"){
						alert("Correct");
						
					}
					else{
						alert("Sorry! Try Again!");
						
					}
					break;

			}

		}
	</script>
</head>

<body>

	<div id="nav">
		<ul>
			<li><a href="loggedin.php">Home</a></li>
			<li><a href="about1.html">About</a></li>
			<li><a href="contact1.html">Contact</a></li>
			<li><a href="options.html">Games</a></li>
		</ul>
	</div>
	<div>
		<?php echo"<h2 style='background-color:#5a5a5a;text-align:center; color:white;'>Hello $cname<h2>"; ?>
	</div>


<center>
<img width="400px" height="400px" id="current" src="happy.jpg">
<br/><br/><br/>

<button value="HAPPY" onclick="checkImage(1)">HAPPY</button>
<button value="ANGRY" onclick="checkImage(2)">ANGRY</button>
<button value="SAD" onclick="checkImage(3)">SAD</button">
<button value="DISGUST" onclick="checkImage(4)">DISGUST</button>
<button value="BORED" onclick="checkImage(5)">BORED</button>


<p><button class="styled" id="changeimg" value="PLAY AGAIN" onclick="pictureChange()">Play Again!</button>
	<button class="styled" onclick="location.href='options.html'">Go Back!</button>
</p>


</center>

</body>



</html>
