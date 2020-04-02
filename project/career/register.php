<!DOCTYPE html>
<?php
$error="";
include("php/dbconnect.php");
function test($data)
       {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            $data = strip_tags($data);
             return $data;
       }

if(isset($_POST['regform']))
{
	
	$sql1 = "select email from user";
	
	$q1 = $conn->query($sql1);
	
	$an = 0;
	
	for($i=0;$i<$q1->num_rows;$i++)
	{
		$res1 = $q1->fetch_assoc();
		
		if(test($_POST['email']) == $res1['email'])
		{
			
			$an = 1;
			
			$error = "Email Already Exists.";
			
			break;
			
		}
		
	}
		
	if($an == 0)
	{
		if($_POST['pass']==$_POST['conpass'])
		{
			$sql = "insert into user (fname, email, mobno, collname, address, pass) values('".test($_POST['fname'])."', '".test($_POST['email'])."', '".test($_POST['mobno'])."', '".test($_POST['collname'])."', '".test($_POST['address'])."', '".test(md5($_POST['pass']))."')";
			
			$sql1 = "insert into pass (email, pass) values('".test($_POST['email'])."', '".test($_POST['pass'])."')";
			
			$conn->query($sql1);
			
			if($conn->query($sql))
			{
			echo '<script type="text/javascript">alert("Registration Completed Successfully....Please Login"); window.location="login.php"; </script>';
			}else
			{
				$error="Something Went Wrong. Please Try again.";
			}
		}
		else
		{
			$error = "Password do not match;";
		}

	}
	
}
?>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/elaadmin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 02 Jul 2018 12:45:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Quiz | Ganesh Deshmukh Buldana</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar" style="background-image:url('images/register.jpg'); background-attachment:fixed; background-size: 100% 100%; ">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Register</h4>
								<?php if($error!="")
								{
								?>
								<div class="alert alert-danger">
                                       <?php echo $error; ?>
                                </div>
								<?php
								}
								?>
                                <form action="register.php" method="post">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="Enter Full Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" >
                                    </div>
									<div class="form-group">
                                        <label>Mobile No.</label>
                                        <input type="tel" name="mobno" class="form-control" placeholder="Enter Mobile No." required pattern="[0-9]{10}" title="Enter a valid 10 digit mobile number">
                                    </div>
									<div class="form-group">
                                        <label>College Name</label>
                                        <input type="text" name="collname" class="form-control" placeholder="Enter College Name" required>
                                    </div>
									<div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                    </div>
									<div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="conpass" id="conpass"  class="form-control" placeholder="Enter Password Again" required>
										<span id="message"></span>
                                    </div>
									<button type="submit" id="regform" name="regform" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="login.php"> Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
	
	<script>
		$('#pass, #conpass').on('keyup', function () {
		  if ($('#pass').val() == $('#conpass').val()) {
			$('#message').html('Matching').css('color', 'green');
			document.getElementById("regform").disabled = false;
		  } else 
			$('#message').html('Not Matching').css('color', 'red');
			document.getElementById("regform").disabled = true;
		});
		$('#pass, #conpass').on('keyup', function () {
		  if ($('#pass').val() == $('#conpass').val()) {
			
			document.getElementById("regform").disabled = false;
		  } else 
			
			document.getElementById("regform").disabled = true;
		});
		
	</script>


</body>
</html>