
<?php
 error_reporting(0);


$ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'] != '127.0.0.1')
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if ($_SERVER['HTTP_X_FORWARDED_FOR'] != '127.0.0.1')
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if ($_SERVER['HTTP_X_FORWARDED'] != '127.0.0.1')
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if ($_SERVER['HTTP_FORWARDED_FOR'] != '127.0.0.1')
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if ($_SERVER['HTTP_FORWARDED'] != '127.0.0.1')
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';



$post = [
    'secret' => '6LdGWLwUAAAAADSeO8_Vb4vC9LxYVuaHmQIWxtyn',
    'response' => $_POST['g-recaptcha-response'],
    'remoteip'   => $ipaddress,
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
$server_output=json_encode($server_output);
curl_close ($ch);

if(!(strpos($server_output, 'true')>0)) return;

require 'phpmailer/vendor/autoload.php';
 $fields = $_POST['name']." ".$_POST['subject']." ".$_POST['phone']." ".$_POST['email']." ".$_POST['message']." ".$_POST['ref'];
 
 if(trim($fields)==NULL){ ?> <script type="text/javascript">alert("Please fill the required fields");location="index.html";</script> <?php return;}
  
 if(trim($fields)=="") {?> <script type="text/javascript">alert("Please fill the required fields.");location="index.html";</script> <?php return;}
 
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
 
$mail->FromName = "Website Contact Form";
 
$mail->addAddress("bodadeajinkya@gmail.com", "Recepient Name");

 
$mail->isHTML(true);
 
$mail->Subject = "Website Contact Form";
 
$mail->Body = $fields;
 
$mail->AltBody = "This is the plain text version of the email content";
 
if(!$mail->send())
 
{
 

  print_r($mail);exit();
}
 
else
 
{
 

 
}
?>
<!-- <script type="text/javascript">
alert("Mail Successfully Send!");
location="index.html";
</script> -->