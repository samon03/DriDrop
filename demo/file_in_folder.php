<?php
session_start();
require 'controller/db_credentials.php';

$foldname = $_GET['Folder_name'];

?>

<!DOCTYPE HTML>
<html>
<head>

<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<script src="js/Chart.min.js"></script>
<!--//charts-->


<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
<style type="text/css">
  .card {
  box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2);
  width: 100%;
  border-radius: 5px;
}
</style>

</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php require 'header/navbar.php'; ?>
<!--heder end here-->
                 
<!--inner block start here-->
<div class="inner-block">
<!--mainpage chit-chating-->
<!--Dropdown start-->
<form class="com-mail"  method="POST" action="up_file_in_folder.php?Folder_name=<?php echo $foldname;?>" enctype="multipart/form-data">
<div class="card">
<div class="logo-name">
     <h2 style="color: #68AE00;"><?php echo $foldname;?></h2> 
</div>
  <div class="form-group">
    <table style="width: 40%;">
      <tbody>
        <tr>
          <td>
            <input type="file" name="file" class="btn btn-default btn-file"> 
          </td>
          <td>
            <input type="submit" value="Upload" name="Upload" id="Upload"> 
          </td>
        </tr>
      </tbody>
    </table>
  </div>  
  </div>        
</form>
<br>
	<div class="col-md-12">    
	        <div class="table-responsive">
              <table class="table table-hover">
                                  <thead>
                                  
                                    <tr>
                                      <th></th>
                                      <th>File</th>
                                      <th>Items</th>                                   
                                                                        
                                      <th>Time</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                            
                            <!-- folder show start -->  
                              <?php
                            
                              $foldqry = $conn->query("SELECT * FROM `folderlist` WHERE (Folder_name = '$foldname' AND Fold_Mail = '$email') AND File_folder != ''");
                              while ($row = $foldqry->fetch()) 
                              {
                              
                                 $filename = $row["File_folder"];
                            $foldtime = date("dS, M", strtotime($row['Time']));
                              
                              ?>
                             <tr>
                                  <td>
                                  	<i class='fa fa-file'></i>
                                  </td> 
                                  <td><?php echo $filename?></td>
                                  <td style="color: grey">1</td>                                 
                                                             
                                  <td style="color: grey">
                                    <?php echo $foldtime?>

                                      
                                  </td>
                                  <td>
                                    <a href="pdf_view.php?File_name=<?php echo $filename; ?>" style="margin-right: 0.7em;"><i class='fa fa-eye'></i></a>
                                  	<a href="link.php?File_name=<?php echo $filename; ?>" style="margin-right: 0.7em;" onclick="tab();">
                                      <i class='fa fa-link'></i>
                                    </a>
                                  	<a href="uploads/<?php echo $filename; ?>" download="<?php echo $filename; ?>" style="margin-right: 0.7em;">
                                     <i class='fa fa-download'></i>
                                   </a>
                                  	<a href=""><i class='fa fa-trash'></i></a>
						          	
                                  </td>
                              </tr>
                             <?php
                              }
                             ?>
                               <!-- file show end -->
                            
                          </tbody>
                      </table>
                  </div> 
    </div>
    <div class="clearfix"> </div>
    

</div>
<!--inner block end here-->
<!----->
</div>
</div>

<!--slider menu-->
    <?php require 'header/category.php'; ?>
<!--slide bar menu end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     

