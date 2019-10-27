<?php
session_start();
require 'controller/db_credentials.php';

if (isset($_SESSION['uemail'])) 
{
  $email = $_SESSION['uemail'];
}
 
// Getting uploaded file
$file = $_FILES["file"];
$fname = $file["name"];

// Uploading in "uplaods" folder
move_uploaded_file($file["tmp_name"], "uploads/" . $fname);

try 
{
	$upqry = "INSERT INTO `filelist` VALUES ('','$email','$fname', CURRENT_TIMESTAMP)";
    $conn->query($upqry);
} 
catch (PDOException $e) 
{
	echo '<script>console.log("File not upload yet!")</script>';
}

echo "<script>window.location.assign('main.php')</script>";

// Redirecting back
// header("Location: index.php");

?> 