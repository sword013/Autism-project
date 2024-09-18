function validateTextbox() {

	//firstname
 	var username = document.getElementById("username");
 
	 if (username.value.length < 5) {
		 alert("Please enter at least 5 characters for firstname");
		 username.focus();
		 username.style.border = "solid 3px red";
		 return false;
	}
	else{
		 username.focus();
		 username.style.border = "solid 2px gray";
	}

 


	//password
 	var pass=document.getElementById("password");

 	if(pass.value.length<8){
 		alert("Please enter the password atleast 8 characters long");
 		pass.focus();
 		pass.style.border="solid 3px red";
 		return false;
	}

	var cpass=document.getElementById("cpwd");

	if(cpass!=pass){
		alert("Both passwords do not match.Please try again ");
		pass.focus();
		pass.style.border="solid 3px red";
		cpass.focus();
		cpass.style.border="solid 3px red"; 
		return false;
	}
 
 }

 function myFunction(){
 	var x=document.getElementById("password");
 	if(x.type==="password"){
 		x.type="text";
 	}
 	else{
 		x.type="password";
 	}

 	//child

	var fullname = document.getElementById("cname");
 
	 if (fullname.value.length < 5) {
		 alert("Please enter at least 5 characters for fullname");
		 fullname.focus();
		 fullname.style.border = "solid 3px red";
		 return false;
	}
	else{
		 fullname.focus();
		 fullname.style.border = "solid 2px gray";
	}

 }

