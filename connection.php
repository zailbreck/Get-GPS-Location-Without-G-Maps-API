<?php
$host = 'localhost'; //Can Change to Hostname or IP Address
$user = 'root'; // Your User Database
$pass = ''; //Your Pass Database
$db = 'userLocation';

//If You Using Mysql 
$conn = mysql_connect($host,$user,$pass) or die('Connection Error!');
$db = mysql_select_db($db);

//if You Use MYSQLI
/*
$conn = mysqli_connect($host,$user,$pass) or die('Connection Error!');
$db = mysqli_select_db($db);
*/

//if You Use ORACLE 11g
/*
$conn = oci_connect($user,$pass,"localhost/xe") or die("connection failed !");
*/

?>