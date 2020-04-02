<?php
 $inNumber = $_REQUEST["inNumber"];
 $sender = $_REQUEST["sender"];
 $keyword = $_REQUEST["keyword"];
 $content = $_REQUEST["content"];
 $email = $_REQUEST["email"];
 $credits = $_REQUEST["credits"];
 $emergency='1';

$sender1 = substr($sender, 2);
 $content1=str_replace('LC4LX', '', $content);

include('dbconnect.php');
$sql = "select * from user where mobno=$sender1";

$q = $conn->query($sql);
for($i=0; $i < $q->num_rows; $i++)
{
$res = $q->fetch_assoc();
$state=$res['state'];
$city=$res['city'];
$area=$res['area'];
$adharno=$res['adharno'];


$sql9 = "INSERT INTO eevent( `edesc`, `estate`, `ecity`, `dadd`, `adharno`, `mobno`) VALUES ('$content1', '$state', '$city', '$area', '$adharno', '$sender1')";

$conn->query($sql9);


}
?>
