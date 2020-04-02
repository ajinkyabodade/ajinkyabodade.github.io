
<?php
include("dbconnect.php");

$error = '';

$email =  mysqli_real_escape_string($conn,trim($_POST['email']));
$fname =  mysqli_real_escape_string($conn,$_POST['fname']);
$color =  mysqli_real_escape_string($conn,$_POST['color']);
$mobno =  mysqli_real_escape_string($conn,$_POST['mobno']);
$password =  mysqli_real_escape_string($conn,$_POST['password']);


$res=openssl_pkey_new();

// Get private key
openssl_pkey_export($res, $privatekey);

// Get public key
$publickey=openssl_pkey_get_details($res);
$publickey=$publickey["key"];


openssl_public_encrypt($email, $eemail, $publickey);
openssl_public_encrypt($fname, $efname, $publickey);
openssl_public_encrypt($color, $ecolor, $publickey);
openssl_public_encrypt($mobno, $emobno, $publickey);
openssl_public_encrypt($password, $epassword, $publickey);



$smpt=$conn->prepare("insert into user (eemail,efname,ecolor,emobno,epassword) value(?,?,?,?,?)");
$smpt->bind_param("sssss", $eemail,$efname,$ecolor,$emobno,$epassword );

$smpt->execute();
	




$smpt=$conn->prepare("insert into distributed (email,pkey) value(?,?)");
$smpt->bind_param("ss", $email,$privatekey);

$smpt->execute();
	
$smpt->close();
$conn->close();



?>
<script type="text/javascript">
alert("Registration Sucessfull....Please Login to continue");
location="login.html";
</script>



