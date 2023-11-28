<?php 
// config.php

$dbhost = 'localhost';
$dbuser = 'id21377909_rass';
$dbpass = 'Rasya3101^';
$dbname = 'id21377909_database';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
mysqli_select_db($conn, $dbname);

?>