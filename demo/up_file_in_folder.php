<?php

session_start();
require 'controller/db_credentials.php';

$foldname = $_GET['Folder_name'];

if (isset($_SESSION['uemail'])) 
{
  $email = $_SESSION['uemail'];
}
/*
// Getting uploaded file
$file = $_FILES["file"];
$fname = $file["name"];

// Uploading in "uplaods" folder
move_uploaded_file($file["tmp_name"], $foldname . "/" . $fname);
*/
$file = $_FILES["file"]["name"];
// $fname = $file["name"];
$tmp_name = $_FILES["file"]["tmp_name"];
$path = "uploads/".$foldname.$file;
move_uploaded_file($tmp_name, $path);

try 
{
	$upqry = "INSERT INTO `folderlist` VALUES ('', '$email','$foldname','$file', CURRENT_TIMESTAMP)";
    $conn->query($upqry);
}  
catch (PDOException $e) 
{
	echo '<script>console.log("File not upload yet!")</script>';
}

echo "<script>window.location.assign('file_in_folder.php?Folder_name=$foldname')</script>";

?> 