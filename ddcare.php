<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
 background-image: url(bgpic.jpg);
 background-size: cover;
 background-position: center;
}

/* Style the header */
header {
  background-color: #ffffff;
  padding: 0.5px;
  background-image: url(bgpic.jpg);
 background-size: cover;
 background-position: center;
  text-align: center;
  font-size: 35px;
  color: #0099cc;
}

.loginbox {
	width: 350px;
	height: 340px;
	background: rgba(0,0,0,0.8);
	box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 50px 30px;
}

.avatar {
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}

.h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

.loginbox input[type="text"], input[type="password"]{
	border: none;
	color: #fff;
	width: 210px;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
}

.loginbox input[type="submit"]{
	border: none;
	outline: none;
	height: 25px;
	width: 80px;
	background: #ffffff;
	font-size: 18px;
	color: #000000;
	border-radius: 20px;
}

.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}

.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}

.loginbox a:hover
{
	color: #ffc107;
}

.fa{
	margin-right: 5px;
}

.eye{
	position: absolute;
}

#hide1{
	display: none;
}

div {
	background-image: url('pic.jpg');
	text-align: center;
	}
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}

</style>
<head>
	<title>DD Care</title>
</head>
<body>
	<header>
		<h1 style="font-family:verdana;"><img src="dd_care.jpg" width="100" height="70" >DD Care</h1>
	</header>
	<!-- <div>
		<form>
			<input  placeholder="Userid,Email or Phone" width="50px" height="20px" required>
			<br/><br/>
			<input  placeholder="Password" width="50px" height="20px" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			<br/><br/>
			<button type="button">Login</button>
			<br/><br/>
			<a href="signup.php">No account?
			<br/> Sign up with new account</a>
		</form>
	</div>
 -->

 <div class="loginbox">
 	<img src="avatar.png" class="avatar">
 	<h1>Login Here</h1>
 	<form>
 		<i class="fa fa-user-circle"></i>
 		<input type="text" name="userid" placeholder="Username,Email or Phone" required="Enter userid">
 		<br/><br/>
 		<i class="fa fa-unlock-alt"></i>
 		<input type="password" name="password" placeholder="Password" id="myInput" required="Enter password">
 		<span class="eye" onclick="myFunction()">
 		<i id="hide1" class="fa fa-eye"></i>
 		<i id="hide2" class="fa fa-eye-slash"></i>
 		</span>
 		<br/><br/>
 		<input type="submit" name="" value="Log In">
 		<br/><br/>
 		<a href="lostpw.php">Forget password?</a>
 		<br/>
 		<a href="signup.php">Don't have an account? Sign Up</a>
 		<br/><br/>

 		<!--button style="font-size:20px"><a href="https://chrome.google.com/webstore/category/extensions" target="_blank"> Android <i class="fa fa-android"></i></button>
		<button style="font-size:20px"><a href="https://www.apple.com/ios/app-store/" target="_blank">IOS <i class="fa fa-apple"></i></button-->

 	</form>
 </div>
	
	<script>
		function myFunction(){
			var x = document.getElementById("myInput");
			var y = document.getElementById("hide1");
			var z = document.getElementById("hide2");

			if (x.type === 'password') {
				x.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}
			else{
				x.type = "password";
				y.style.display = "none";
				z.style.display = "block";
			}
		}
	</script>
	

	<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


</body>
</html>