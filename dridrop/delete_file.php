<?php
require 'controller/db_credentials.php';

try 
{
  $fid = $_GET['Fid'];
  $conn->query("DELETE FROM `filelist` WHERE Fid = '$fid'");
  echo "<script>window.location.assign('main.php')</script>";
} 
catch (PDOException $e) 
{
  echo error_log(message);
}


?> 