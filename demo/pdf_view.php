<?php
session_start();
require 'controller/db_credentials.php';

if (isset($_SESSION['uemail'])) 
{
	$email = $_SESSION['uemail'];	
}
$getFile = $_GET['File_name'];

  $file = 'G:/xampp/htdocs/demo/uploads/'. $getFile; // path of pdf
  $filename = $getFile; 
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($file);
  ?>
