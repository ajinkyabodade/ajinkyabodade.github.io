
<?php
 error_reporting(0);
require_once "vendor/autoload.php";
 
$mess=$_GET['mess'];
 $mail= new PHPMailer\PHPMailer\PHPMailer();
//Enable SMTP debugging.
 
//$mail->SMTPDebug = 3;                           
 
//Set PHPMailer to use SMTP.
 
$mail->isSMTP();        
 
//Set SMTP host name                      
 
$mail->Host = "smtp.gmail.com";
 
//Set this to true if SMTP host requires authentication to send email
 
$mail->SMTPAuth = true;                      
 
//Provide username and password
 
$mail->Username = "pnbodade@gmail.com";             
 
$mail->Password = "28041965";                       
 
//If SMTP requires TLS encryption then set it
 
$mail->SMTPSecure = "tls";                       
 
//Set TCP port to connect to
 
$mail->Port = 587;                    
 
$mail->From = "pnbodade@gmail.com";
 
$mail->FromName = "Emergency Management Notification System";
 
$mail->addAddress("bodadeajinkya@gmail.com", "Recepient Name");

$mail->addAddress("anbhagat1997@gmail.com", "Recepient Name");

$mail->addAddress("jankit403@gmail.com", "Recepient Name");

$mail->addAddress("rajput08aj@gmail.com", "Recepient Name");
 
$mail->isHTML(true);
 
$mail->Subject = "Notification from EMNS";
 
$mail->Body = "<b>This is a Demo Notification from Emergency Management Notification System:</b> ".$mess."<br>Below is the url for the location: <br>https://goo.gl/maps/MDxRnERg5cq";
 
$mail->AltBody = "This is the plain text version of the email content";
 
if(!$mail->send())
 
{
 

 
}
 
else
 
{
 

 
}
?>
<script type="text/javascript">
alert("Notifications Succesfully Generated.....");
location="admin/views/index.php";
</script>