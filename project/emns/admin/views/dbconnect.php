<?php
//error_reporting(0);
ob_start();
session_start();
$siteName = "Cipet.in";

//DEFINE("BASE_URL","http://cipetbhopal.com/");
//DEFINE("BASE_URL","http://localhost/oes/");

DEFINE ('DB_USER','u150007837_emns');
DEFINE ('DB_PSWD','yash@2805'); 
DEFINE ('DB_HOST','localhost'); 
DEFINE ('DB_NAME','u150007837_emns'); 

date_default_timezone_set('Asia/Calcutta'); 
$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if($conn->connect_error)
die("Failed to connect database ".$conn->connect_error );
?>