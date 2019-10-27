<?php
session_start();
require 'controller/db_credentials.php';
$pId = $_GET['Pid'];
if (isset($_SESSION['uemail'])) 
{
	$email = $_SESSION['uemail'];	
}
$gen = $conn->query("SELECT * FROM `post` WHERE Pid = $pId");
while ($row = $gen->fetch()) 
{
	$rmail = $row['Email']; 
	if(isset($_POST['Send']))
	{
		$link = $_POST['plink'];
		$conn->query("INSERT INTO `sharewith` VALUES ('', '$email', '$link', '$rmail', '$pId', CURRENT_TIMESTAMP, 0)");
		echo "<script>window.location.assign('main.php')</script>";
	}
}


?>