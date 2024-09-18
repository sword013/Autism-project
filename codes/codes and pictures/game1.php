<?php 
	include("connection.php");
	session_start();
	$user=$_SESSION['user_name'];
	$cname=$_SESSION['c_name'];
	$flag=1;

	$fetch="select * from report";
	$fetch_result=$con->query($fetch);


	while($row=$fetch_result->fetch_assoc()){
		if($row[cname]==$cname && $row[gname]=='Color')
		{ 	//child's entry already exists in the table
			$flag=0;
		}
		

	}

	if($flag==1){
	//child's entry is not already in the table, so insert it
	$insert="insert into report values('".$user."','".$cname."','Color',0,0)";
	$insert_result=$con->query($insert);
	}
//breakpoint1 


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="game1.css">
	<link href="https://fonts.googleapis.com/css?family=Short+Stack" rel="stylesheet"> 
	
	<title>AUTISTICO</title>
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
		<?php echo"<h2 style='background-color:black;text-align:center; color:white;'>Hello $cname<h2>"; ?>
	</div>

	<h2>Choose the color <span id="colorDisplay"></span></h2>

	<div id="container1">
		<span id="message"></span>
	</div>

	<div id="container">
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
	</div>

	<center>
	<div id="container">
	<button class="styled" onclick="location.href='game1.php'">Play Again!</button>
	<button class="styled" onclick="location.href='options.html'">Go Back!</button>
	</div>
	</center>

	<script type="text/javascript" src="game1.js">

var colors=["red","green","blue","yellow","purple","orange"];

var squares=document.querySelectorAll(".square");
var pickedColor=pickColor();

var colorDisplay=document.getElementById("colorDisplay");

var messageDisplay=document.querySelector("#message");

colorDisplay.textContent=pickedColor;
colorDisplay.style.color=pickedColor;

for(var i=0;i<squares.length; i++){
	//add initial colors to squares
	squares[i].style.background=colors[i];

	//add click listeners to squares
	squares[i].addEventListener("click",function(){
		//grab color of clicked square
		var clickedColor=this.style.background;

		//compare color to pickedColor
		if (clickedColor === pickedColor){
			messageDisplay.textContent="Correct!";
			changeColors(clickedColor);
		}
		else{
			this.style.background="#a6a6a6";
			messageDisplay.textContent="Try Again";
		}
	});
}

function changeColors(color){
	//loop through all squares
	for(var i=0;i<squares.length;i++){
		squares[i].style.background=color;
	}
	//change each color
}

function pickColor(){
	var random=Math.floor(Math.random()*6);
	return colors[random];

}

	</script>

</body>
</html>
