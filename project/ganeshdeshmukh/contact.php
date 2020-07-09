
<?php

$fields = "<br> Name: ".$_POST['fname']."<br> Email: ".$_POST['email']."<br> Mobile: ".$_POST['mobile']."<br> Message: ".$_POST['message'];




require 'phpmailer/vendor/autoload.php';
 
$mess=$_GET['mess'];
 $mail= new PHPMailer\PHPMailer\PHPMailer();
//Enable SMTP debugging.
 
//$mail->SMTPDebug = 3;                           
 
//Set PHPMailer to use SMTP.
 
$mail->isSMTP();        
 
//Set SMTP host name                      
 
$mail->Host = "smtp.zoho.in";
 
//Set this to true if SMTP host requires authentication to send email
 
$mail->SMTPAuth = true;                      
 
//Provide username and password
 
$mail->Username = "info@anandbhagat.com";             
 
$mail->Password = "9Y4e93Wp2saK";                       
 
//If SMTP requires TLS encryption then set it
 
$mail->SMTPSecure = "ssl";                       
 
//Set TCP port to connect to
 
$mail->Port = 465;                    
 
$mail->From = "info@anandbhagat.com";
 
$mail->FromName = "ganeshdeshmukh.in";
 
$mail->addAddress("bodadeajinkya@gmail.com", "Recepient Name");
$mail->addAddress("anbhagat1997@gmail.com", "Recepient Name");
// $mail->addAddress("ganesh_structure@yahoo.co.in", "Recepient Name");
 
$mail->isHTML(true);
 
$mail->Subject = "New Form Submission from Ganeshdeshmukh.in";
 
$mail->Body = $fields;
 
$mail->AltBody = "This is the plain text version of the email content";
 
if($mail->send())
 
{
?> <script type="text/javascript">
alert("Message Send Succesfully");
location="index.html";
</script>

<?php
 
}
 
else
 
{
 ?>

  <script type="text/javascript">
alert("Message Not send ");
location="index.html";
</script>
<?php
}
?>











