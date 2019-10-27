<?php
session_start();
require 'controller/db_credentials.php';

if (isset($_SESSION['uemail'])) 
{
  $email = $_SESSION['uemail'];
}
$msgread = $conn->query("UPDATE `sharewith` SET Status = 1 WHERE Receiver = '$email' && Status = 0");
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
    	  <h2>Inbox</h2>
    	 <div class="col-md-12 mailbox-content  tab-content tab-content-in">
    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <table class="table tab-border">
	                    <tbody>
	                    	<?php
                               $showMsg = $conn->query("SELECT * FROM `sharewith` WHERE Receiver = '$email' ORDER BY Date DESC");
                               while ($row = $showMsg->fetch()) 
                               {
                               	  $id = $row['Id'];
                               	  $pid = $row['Pid'];
                               	  $link = $row['link'];
                               	  $time = date("dS, M", strtotime($row['Date']));

                               	  $postName =  $conn->query("SELECT Title FROM `post` WHERE Pid = $pid"); 
                               	  while ($row = $postName->fetch()) 
                                  {
                               	     $title = $row['Title'];
                               	    
                               	    ?>

	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <i class="fa fa-file"></i>
	                            </td>
	                            <td>
	                                <?php echo $link;?>
	                            </td>
	                            <td>
	                               <?php echo $title;?>
	                            </td>
	                            <td>
	                                <?php echo $time;?>
	                            </td>
	                            <td>
	                               <a href="uploads/<?php echo $link; ?>" download="<?php echo $link; ?>" style="margin-right: 0.7em;">
                                     <i class='fa fa-download'></i>
                                   </a>
	                            </td>
	                            <td>
	                                <a href="delete_inbox_msg.php?Id=<?php echo $id; ?>"><i class='fa fa-trash'></i></a>
	                            </td>
	                        </tr>
	                           	    <?php
                               	  }
                               }
	                    	?>
	                     </tbody>
	                </table>
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
	<div class="clearfix"> </div>
</div>
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


                      
						
