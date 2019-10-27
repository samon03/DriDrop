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
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->


<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->

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
<table style="width: 100%">
  <tbody>
    <tr>
      <td>
        <!--Dropdown start-->
<li class="dropdown head-dpdn">
          <button type="button" class="btn btn-success" style="margin-bottom: 5%"  data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-plus-circle"></i> Add
          </button>

                    <ul class="dropdown-menu">
                      <li><a href="add_folder.php">
                        <i class="fa fa-folder"></i>
                         <div class="notification_desc">
                        <p>Add Folder</p>
                       </div>
                        <div class="clearfix"></div>  
                       </a></li>

                       <li class="odd"><a href="add_file.php">
                         <i class="fa fa-file"></i>
                         <div class="notification_desc">
                          <p>Upload File</p>
                        </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       </ul>
                  </li>
<!--Dropdown End-->
      </td>
      <td >
        <!--search-box-->

                <!-- <div class="search-box">
                  <form>
                    <input type="text" placeholder="Search..." required=""> 
                    <input type="submit" value="">   

                  </form>
                </div> -->
  <!--//end-search-box-->
      </td>
    </tr>
  </tbody>
</table>

<hr>
	<div class="col-md-12">    
	        <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th></th>
                                      <th>Folder/File</th>
                                      <th>Items</th>                                   
                                                                        
                                      <th>Time</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                            
                            <!-- folder show start -->  
                              <?php
                        
                              $foldqry = $conn->query("SELECT DISTINCT Folder_name FROM `folderlist` WHERE Fold_Mail = '$email'");
                              while ($row = $foldqry->fetch()) 
                              {
                                 $foldname = $row['Folder_name'];
                                 // $foldtime = date("dS, M", strtotime($row['Time']));
                              
                              ?>
                              <tr>
                                  <td><a href="file_in_folder.php?Folder_name=<?php echo $foldname;?>"><i class='fa fa-folder'></i></a></td>
                                  <td><a href="file_in_folder.php?Folder_name=<?php echo $foldname;?>"><?php echo $foldname;?></a></td>
                                  <?php 
                                    $fcount = $conn->query("SELECT COUNT(File_folder) FROM `folderlist` WHERE (Folder_name = '$foldname' AND File_folder != '')");

                                    while ($row = $fcount->fetch()) 
                                    {
                                      $totalfile = $row["COUNT(File_folder)"];
                                      
                                      ?>
                                      <td style="color: grey"><a href="file_in_folder.php?Folder_name=<?php echo $foldname;?>"><?php echo $totalfile;?></a></td>                               
                                      <?php
                                    }
                                 
                                  ?>


                                  <?php
                                     $lastTime = $conn->query("SELECT * FROM `folderlist` WHERE Folder_name = '$foldname' ORDER BY `Time` DESC LIMIT 0 , 1");

                                     while ($row = $lastTime->fetch())
                                     {
                                       $uptime = date("dS, M", strtotime($row['Time']));
                                       $folderID = $row['FoIder_ld'];
                                       
                                     }

                                  ?>
                                  <td style="color: grey"><?php echo $uptime;?></td>
                                  <td>
                                    <a href=""style="margin-right: 2em;"></a>
                                    <!-- Link -->
                                  	<!-- <a href="#" style="margin-right: 0.7em;"><i class='fa fa-link'></i></a>
 -->
                                    <!-- Link Ends -->
                                    <!-- Upload -->
                                  	<a href="file_in_folder.php?Folder_name=<?php echo $foldname;?>" style="margin-right: 0.7em;"><i class='fa fa-upload'></i></a>
                                   <!-- Upload Ends -->
                                   <!-- Delete -->
                                      <a href="delete_folder.php?FoIder_ld=<?php echo $folderID;?>">
                                        <i class='fa fa-trash'></i>
                                      </a>
                                   <!-- Delete Ends -->
                                  </td>
                                  
                              </tr>

                              <?php
                              }

                              ?>
                             <!-- folder show end --> 
                             <!-- file show start --> 
                             <?php
                            
                              $foldqry = $conn->query("SELECT * FROM `filelist` WHERE File_Mail = '$email'");
                              while ($row = $foldqry->fetch()) 
                              {
                                 $filename = $row['File_name'];
                                 $filetime = date("dS, M", strtotime($row['File_Time']));
                                 $fid = $row['Fid'];
                              
                              ?>  
                              <tr>
                                  <td>
                                  	<i class='fa fa-file'></i>
                                  </td> 
                                  <td><?php echo $filename;?></td>
                                  <td style="color: grey">1</td>                                 
                                                             
                                  <td style="color: grey">
                                    <?php echo $filetime;?>

                                      
                                  </td>
                                  <td>
                                   <a href="pdf_view.php?File_name=<?php echo $filename; ?>" style="margin-right: 0.7em;"><i class='fa fa-eye'></i></a>
                                  	<!-- link -->
                                  	<a href="link.php?File_name=<?php echo $filename; ?>" style="margin-right: 0.7em;" onclick="tab();">
                                      <i class='fa fa-link'></i>
                                    </a>
                                    <a href="uploads/<?php echo $filename; ?>" download="<?php echo $filename; ?>" style="margin-right: 0.7em;">
                                     <i class='fa fa-download'></i>
                                   </a>
                                  <a href="delete_file.php?Fid=<?php echo $fid; ?>"><i class='fa fa-trash'></i></a>
                                </td>
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
<!-- <script>
  function tab()
  {
     document.getElementById('linktab').style.display='block';     
  }
</script> -->

<!-- <script src="js/copy_clipboard.js"></script>
 --><!--slider menu-->
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

