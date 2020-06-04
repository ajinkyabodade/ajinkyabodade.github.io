
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

 $fields = $_POST['name']." ".$_POST['subject']." ".$_POST['phone']." ".$_POST['email']." ".$_POST['message']." ".$_POST['ref']."  ".$ipaddress;



if(isset($_POST["email"])){
	// Check if the "Sender's Email" input field is filled out
	$email=$_POST['email'];
	// Sanitize E-mail Address
	$email =filter_var($email, FILTER_SANITIZE_EMAIL);
	// Validate E-mail Address
	$email= filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!$email){
	// echo "Invalid Sender's Email";
	}
	else{
	$subject = "Website Form Response";
	$message = $fields;
	$headers = 'From:'. $_POST['email'] . "rn"; // Sender's Email
	// Message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);
	// Send Mail By PHP Mail Function
	mail("bodadeajinkya@gmail.com", $subject, $message, $headers);
	// echo "Your mail has been sent successfuly ! Thank you for your feedback";
	}
}

?>

<script type="text/javascript">alert("Mail Successfully Send!");location="index.html";</script>

