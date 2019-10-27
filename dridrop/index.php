<?php
session_start();
require 'controller/db_credentials.php';

if (isset($_POST['LogIn'])) 
{
	$uid = $_POST['email'];
	$upass = md5($_POST['password']);

	$qry = $conn->query("SELECT uemail FROM `user` WHERE uemail = '$uid' AND upassword = '$upass' LIMIT 1");

    $results = $qry->fetchAll();
    $count = count($results);
    
    if ($count == 1) 
    {
    	$_SESSION['uemail'] = $uid;
    	#echo $uid;
    	echo "<script>window.location.assign('main.php')</script>";
    }
	
}


?>


<!DOCTYPE HTML>
<html>
<head>
<title>DriDrop: save, share and ask</title>
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
<!--static chart-->
</head>
<body>	
<div class="login-page" style="background-image: url('images/login.jpg');">
    <div class="login-main" style="margin-top: -2em;">  	
         <div class="login-block">
         	<div class="forgot-grids">
         	    <h1 style="color: #FC8213;">Login</h1>
         	   <hr><br>
         	</div>
				<form action="index.php" method="POST">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<input type="submit" name="LogIn" value="Login">	
					<h3>Not a member?<a href="signup.php"> Sign up now</a></h3>				
				</form>
			</div>
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


                      
						
