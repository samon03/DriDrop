<?php
session_start();
require 'controller/db_credentials.php';

if (isset($_SESSION['uemail'])) 
{
  $email = $_SESSION['uemail'];
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
      <h2>Saved Posts</h2>
   <?php
    $psel = $conn->query("SELECT * FROM `saved` WHERE Uemail = '$email'"); 
      while ($row = $psel->fetch()) 
      {
       $pId = $row['Pid'];
       $spost = $conn->query("SELECT * FROM `post` WHERE Pid = $pId");
       while ($row = $spost->fetch()) 
       {
          $pId = $row['Pid'];
          $pTitle = $row['Title'];
          $pMsg = $row['Msg'];
          $pTime = date("dS, F", strtotime($row['Ptime']));
          $pEmail = $row['Email'];
       

       ?>    
    	 <div class="col-md-8 compose-right">   	 	
    	 	<div class="well">
    	 		    <div class="col-md-8"> 
    	 		      <div class="profile_img">
                        <span class="prfil-img">
                        	<img src="images/p1.png" alt=""> 
                        </span> 
                <!-- user name -->
    	 		    	<div class="user-name">
                <?php
                  $qry = $conn->query("SELECT uname FROM `user` WHERE uemail = '$pEmail'");
                   while ($row = $qry->fetch()) 
                   {
                      $name = $row['uname'];
                   
              
                ?>   
    	 		    			<p><?php echo $name;?></p> 
                    <?php
                      }
              
                ?>     		
    	 		    		    <span><?php echo $pTime;?></span>
    	 		    	</div>  		
    	 		      </div> 	   
    	 		    </div>
    	 		    <div class="profile_img">	
    	 		    	<!-- <span style="color: #68AE00; font-weight: bold;">Remaining : 5 days</span> -->
    	 		    	<div class="clearfix"></div>	
    	 		    </div>	
                    <hr>
    	 		    <h3 style="color: #68AE00"><?php echo $pTitle;?></h3> 
    	 		    <br>
    	 		    <p><?php echo $pMsg;?></p>	
                    <hr>
			<table style="width: 100%; text-align: center;">
		    	<tbody>
		    		<tr>
              <td>
                 <a href="linktab.php?Pid=<?php echo $pId;?>"><i class="fa fa-link"></i></a> 
              </td>
              <!-- <td>
                 <a href=""><i class="fa fa-link"></i></a>        
              </td> -->
              <td>
                 <a href="saved_back.php?Pid=<?php echo $pId;?>"><i class="fa fa-save"></i></a>        
              </td>
		    		</tr>
		    	</tbody>
		    </table>	
		    </div>
        <div class="clearfix"> </div>
    	 </div> 	
        <?php
        }
      }
   ?>
    </div> 
      <div class="clearfix"> </div>     
   </div>
  
<!-- chat.php -->
</div>
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