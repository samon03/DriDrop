<?php
  session_start();
  session_unset();
  session_destroy();

 // $_Session('message') = 'You have successfully log off';
  header('Location: '.'../index.php');

?>