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
	height: 370px;
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

.loginbox input[type="text"], input[type="number"]{
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
	position: absolute;
	height: 25px;
	width: 80px;
	background: #ffffff;
	font-size: 18px;
	color: #000000;
	border-radius: 20px;
	margin-left: 100px;
}

.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}

.or{
	margin-left: 100px;
}

</style>
<head>
	<title>Forget Password</title>
</head>
<body>
	<div class="loginbox">
 	<img src="avatar.png" class="avatar">
 	<h1>Forget Password</h1>
 	<form>
 		<i class="fa fa-envelope"></i>
 		<input type="text" name="email" placeholder="Enter your Email-id">
 		<br/>
 		<p class="or">OR</p> 
 		<i class="fa fa-phone"></i>
 		<input type="number" name="Phone" placeholder="Enter your Phone number">
 		<br/><br/>
 		<i class="fa fa-codiepie"></i>
 		<input type="number" name="" placeholder="Verify your code">
 		<br/><br/>
 		<a href="resetpw.php">
 		<input type="submit" name="" value="Verify">
 		</a>
 		<br/><br/>
 	</form>
 </div>

</body>
</html>