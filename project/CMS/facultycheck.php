
<?php
 session_start();
?>

<html>
<head>
</head><body>

<?php
$conn=new mysqli("u150007837_collegemanage","localhost","yash@2805","u150007837_collegemanage");
$emailid = $_POST["emailid"];
$pass = $_POST["pass"];
$result = $conn->query("SELECT * FROM flogin where userid= '$emailid' and password= '$pass'");
	if ($result->num_rows > 0) {
	   $_SESSION["user"] = $emailid; 
				header("Location: facultyportal.php"); 
include("facultyportal.php");
		 	}		
else
{
?> <script> alert("Invalid Login");</script>
<?php include("facultylogin.html"); }?>

</pre>

</body>
</html>
  