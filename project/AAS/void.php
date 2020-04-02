<?php

include("dbconnect.php");

$email = $_SESSION['email'];
$pass = $_POST["pass1"]; 
$privatekey=$_SESSION['pkey'];

 

$result = $conn->query("SELECT * FROM user where id=".$_SESSION['id']);
	if ($result->num_rows == 1) {
	 
	   $row = $result->fetch_assoc();

	$epassword = $row["epassword" ];


	
openssl_private_decrypt($epassword, $password, $privatekey);



	if($pass==$password)
	    
	    {
	        $_SESSION["checkid"]="1";
	        ?><script>
	        
                window.location.href="dashboard.php";
	        </script>
			<?php
	        
	    }
		else
		{
	        
			session_unset(); 

session_destroy(); 

	        ?><script>
	        alert("Password Is Wrong");
			 window.location.href="login.html";
	        </script>
			<?php
	        
	    }	
	    
	}
	

	
	?>
	
	
	
	