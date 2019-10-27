<?php
session_start();
require 'controller/db_credentials.php';

if (isset($_SESSION['uemail'])) 
{
	$email = $_SESSION['uemail'];	
}
if (isset($_POST['Post'])) 
	{
		$ptitle = $_POST["title"];
		$pmsg = $_POST["details"];
		try 
		{
			$pin = "INSERT INTO `post` VALUES ('', '$email', '$ptitle', '$pmsg', CURRENT_TIMESTAMP)";
			$conn->query($pin);
			echo '<script>console.log("Successfully Uploaded")</script>';
			echo "<script>window.location.assign('post.php')</script>";
		} 
		catch (PDOException $e) 
		{
            echo '<script>console.log("Not uploaded yet")</script>';
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
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
			<?php require 'header/navbar.php'; ?>	
	   </div>
<!--heder end here-->
<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
    	  <h2>Compose Post </h2> 	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Compose New Post 
						</div>
						<div class="inbox-details-body" style="height: 350px;">
							<form class="com-mail" action="create_post.php" method="POST">
								<input type="text" name="title" placeholder="title">
								<textarea placeholder="Details.." name="details" style="height: 150px;"></textarea>
								<input type="submit" value="Post" name="Post" style="float: right;"> 
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>

<!--inner block end here-->
</div>

<!--slider menu-->
<?php require 'header/category.php'; ?>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
