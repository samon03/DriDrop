<?php
session_start();
require 'controller/db_credentials.php';
if (isset($_SESSION['uemail'])) 
{
	$email = $_SESSION['uemail'];
}
//$email = 'emon@gmail.com'; //akne tai mail manually disi kaj krse amny session a pay na 

if (isset($_POST["submit"])) 
{
	$fname = $_POST["foldname"];
/*	$path = "G:/xampp/htdocs/demo/folders/";
	if (mkdir($path ."/" . $fname, 0777)) 
	{
		*/
		try
		{
            $fqry = "INSERT INTO `folderlist` VALUES ('','$email', '$fname', '', CURRENT_TIMESTAMP)";
             $conn->query($fqry);
        
		    echo '<script>console.log("Folder created!")</script>' ;
		}
		catch (PDOException $e) 
		{
            echo '<script>console.log("Folder not created yet!")</script>';
		}
		echo "<script>window.location.assign('main.php')</script>";
		
/*	}
	else
	{
		
		echo '<script>console.log("Folder not created yet!")</script>';
		
	}
*/
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox-details :: w3layouts</title>
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
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php require 'header/navbar.php';?>
	</div>
<!--heder end here-->

<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
    	    <form action="add_folder.php" method="POST">
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Add New Folder 
						</div>
						<div class="inbox-details-body">
							<form class="com-mail">
								<input type="text"  placeholder="Enter a folder name ..." name="foldname" id="foldname">
								
								<input type="submit" value="Add" name="submit" id="submit"> 
							</form>
						</div>
					</div>
				</div>
    	   </form>
          <div class="clearfix"> </div>     
   </div>
</div>

<!--inner block end here-->
</div>

<!--slider menu-->
    <?php require 'header/category.php';?>
	<div class="clearfix"> </div>
</div>

		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
