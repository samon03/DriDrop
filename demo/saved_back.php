<?php
session_start();
require 'controller/db_credentials.php';

$pId = $_GET['Pid'];
if (isset($_SESSION['uemail'])) 
{
  $email = $_SESSION['uemail'];
}

try 
{
	$conn->query("INSERT INTO `saved` VALUES ($pId, '$email')");
	// echo '<script>console.log("Uploaded")</script>';
	echo "<script>window.location.assign('saved.php')</script>";
} 
catch (PDOException $e) 
{
	 echo '<script>console.log("Not uploaded yet")</script>';
}

?>