<?php

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "dropdb";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
