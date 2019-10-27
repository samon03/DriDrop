<?php
session_start();
require 'controller/db_credentials.php';

if (isset($_POST['SignIn'])) 
{
   $username = $_POST['usrname'];
   $usermail = $_POST['usremail']; 
   $userpass = $_POST['usrpass']; 
   $userconf = $_POST['confpass']; 

   if ($userpass == $userconf) 
   {
    	$password = md5($userpass);

    	$conn->query("INSERT INTO `user` VALUES ('$username', '$usermail', '$password');");

    	echo "<script>window.location.assign('index.php')</script>";
   } 
					
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>	
<!--inner block start here-->
<div class="signup-page-main" style="background-image: url('images/login.jpg');">
     <div class="signup-main" style="margin-top: -6em;"> 
     <form action="signup.php" method="POST">
			<div class="signup-block">
			<div class="forgot-grids">
         	    <h1 style="color: #FC8213;">Sign Up</h1>
         	   <hr><br>
         	</div>
				
					<input type="text" name="usrname" placeholder="Name" required="">
					<input type="text" name="usremail" placeholder="Email" required="">
					<input type="password" name="usrpass" class="lock" placeholder="Password">
					<input type="password" name="confpass" class="lock" placeholder="Confirm Password">
					<input type="submit" name="SignIn" value="Sign up">														
			
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Login here.</a>
				</div>
			</div>
		</form> 	
    </div>
</div>
<!--inner block end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
