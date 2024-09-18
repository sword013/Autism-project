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

