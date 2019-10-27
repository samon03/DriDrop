<?php
require 'controller/db_credentials.php';

try 
{
  $id = $_GET['Id'];
  $conn->query("DELETE FROM `sharewith` WHERE Id = '$id'");
  echo "<script>window.location.assign('inbox.php')</script>";
} 
catch (PDOException $e) 
{
  echo error_log(message);
}


?> 