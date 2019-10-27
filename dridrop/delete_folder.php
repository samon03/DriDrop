<?php
require 'controller/db_credentials.php';

try 
{
  $folderid = $_GET['FoIder_ld'];
  $conn->query("DELETE FROM `folderlist` WHERE FoIder_ld = '$folderid'");
  echo "<script>window.location.assign('main.php')</script>";
} 
catch (PDOException $e) 
{
  echo error_log(message);
}


?> 