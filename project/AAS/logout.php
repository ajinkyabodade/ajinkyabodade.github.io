
<?php

include("dbconnect.php");
?>



<html>
<head>
</head><body>

<?php
session_unset(); 
session_destroy(); 
?>
<script> alert("Logout Succesfull........"); 

window.location="login.html"; </script>





</body>
</html>
  
  