<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

header {
  background-color: #ffffff;
  padding: 0.5px;
  text-align: center;
  font-size: 35px;
  color: black;
}
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 40%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}


/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #0e76a8;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

.col {
  float: center;
  width: 50%;
  margin: auto;
  padding:  50px;
  margin-top: 6px;
}
.hide-md-lg {
  display: none;
}
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
<head>
	<title>DD Care/Signup</title>
</head>
<body>
	<header>
		<img src="signup.jpg" width="300" height="100" >
		<p align="center"><h3>Sign Up</h3></p>

		

		<input placeholder="First Name" name="fname">
	<br/>

	<input placeholder="Last Name" name="lname">
	<br/>

	<input placeholder="Email id" name="email">
	<br/>

	<input placeholder="Phone Number" name="Number">
	<br/>

	<input type="submit" value="Signup" width="100">
	<br/>

	
	<div class="col">
        <a href="https://www.facebook.com" class="fb btn" target="_blank">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
       <a href="https://twitter.com/login?lang=en-gb" class="twitter btn" target="_blank">
          <i class="fa fa-twitter fa-fw"></i> Login with twitter
        </a>
        <a href="https://accounts.google.com/ServiceLogin/identifier?elo=1&flowName=GlifWebSignIn&flowEntry=AddSession" class="google btn"><i class="fa fa-google fa-fw" target="_blank">
          </i> Login with Google+
        </a>
      </div>
	</header>
	

</body>
</html>