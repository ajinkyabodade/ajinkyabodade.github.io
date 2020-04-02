



<?php




$cookie_name = "ganeshdeshmukh";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() - 3600, "/");


ob_start();
session_start();
session_unset(); 
session_destroy(); 



echo '<script type="text/javascript">window.location="../index.php"; </script>';

?>