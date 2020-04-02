
<?php


 


require 'phpmailer/vendor/autoload.php';
 

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
 
$mail->Username = "ganeshdeshmukh.in@gmail.com";             
 
$mail->Password = "Gpd@1234";                       
 
//If SMTP requires TLS encryption then set it
 
$mail->SMTPSecure = "tls";                       
 
//Set TCP port to connect to
 
$mail->Port = 587;                    
 
$mail->From = "ganeshdeshmukh.in@gmail.com";
 
$mail->FromName = "ganeshdeshmukh.in";
 
$mail->addAddress($_POST['email'], "Recepient Name");
 
$mail->isHTML(true);
 
$mail->Subject = "OTP to reset your Password on Career Zone";
 
$mail->Body = "Please enter this Otp to reset your Password on Career Zone ".$otp;
 
$mail->AltBody = "This is the plain text version of the email content";
 
$mail->send();
 

?>

