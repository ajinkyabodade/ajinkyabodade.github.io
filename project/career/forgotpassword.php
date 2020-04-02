<!DOCTYPE html>
<?php
include("php/dbconnect.php");
$error = '';
$success = '';

function test($data)
       {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            $data = strip_tags($data);
             return $data;
       }
if(!isset($_SESSION['quiz_id']))
{

if(isset($_POST['forgotpassword1']))
{
	
		$sql = "select id from user where email='".$_POST['email']."'";
		
		$q = $conn->query($sql);
		
		$res = $q->fetch_assoc();
		
		if($q->num_rows==1)
		{
			$sql1 = "select * from otp where user_id='".$res['id']."'";
			
			$q1 = $conn->query($sql1);
			
			$otp = rand(100000,999999);
			
			include('mail.php');
			
			if($q1->num_rows==1)
			{
				$sql101 = "update otp set pass='".$otp."' where user_id='".$res['id']."'";
				
				$conn->query($sql101);
			}
			else
			{
				$sql101 = "insert into otp (user_id, pass) values('".$res['id']."','".$otp."') ";
				
				$conn->query($sql101);
			}
			
			$success = "Please Check Your Email For OTP.";
		}
		else
		{
			$error = "Your Email Id is not Registered.";
		}

}
if(isset($_POST['forgotpassword2']))
{
	
		$sql = "select id from user where email='".$_POST['email']."'";
		
		$q = $conn->query($sql);
		
		$res = $q->fetch_assoc();
		
		if($q->num_rows==1)
		{
			$sql1 = "select * from otp where user_id='".$res['id']."'";
			
			$q1 = $conn->query($sql1);
			
			$res1 = $q1->fetch_assoc();
			
			if($res1['pass']==$_POST['otp'])
			{
				$success = "Set New Password.";
			}
			else
			{
				$error = "You have entered wrong OTP";
				echo '<script type="text/javascript">alert("You have entered wrong OTP"); window.location="forgotpassword.php"; </script>';
			}
			
		}
		else
		{
			$error = "Your Email Id is not Registered.";
		}

}
if(isset($_POST['forpass']))
{
	$sql1 = "update user set pass='".md5(test($_POST['pass']))."' where email = '".$_POST['email']."'";
	
	$conn -> query($sql1);
	
	$sql2 = "insert into pass (email, pass) values('".test($_POST['email'])."', '".test($_POST['pass'])."')";
	
	$conn->query($sql2);
	
	echo '<script type="text/javascript">alert("Password Has Been Reset. Please LogIn To Continue."); window.location="login.php"; </script>';
}
?>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/elaadmin/page-login.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 02 Jul 2018 12:45:08 GMT -->
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
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Forgot Password</h4>
								<?php if(isset($_POST['forgotpassword1']))
								{
									?>
									<form method="post" action="forgotpassword.php">
										<?php if ($error!='') {
										?> 
										<div class="alert alert-danger" role="alert">
											<?php echo $error; ?>
										</div>
										<?php
										}
										?>
										<?php if($success!='')
										{
										?>
										<div class="alert alert-success" style="color:black;">
											   <?php echo $success; ?>
										</div>
										<?php
										}
										?>
										<div class="form-group">
											<label>Email address</label>
											<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>" readonly>
										</div>
										<?php
										if($success!='')
										{
											?>
											<div class="form-group">
											<label>OTP </label>
											<input type="tel" name="otp" class="form-control" placeholder="Enter OTP" pattern="[0-9].{5}">
											<span class="small">OTP Has Been Sent To The Email Address You Have Entered.</span>
											</div>
											
											<button type="submit" name="forgotpassword2" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
										<?php
										}
										?>
										<?php
										if($error!='')
										{
										?>
											<a href="forgotpassword.php" class="btn btn-primary btn-flat m-b-30 m-t-30">Back</a>
										<?php
										}
										?>
										<div class="register-link m-t-15 text-center">
											<p>Don't have account ? <a href="register.php"> Register Here</a></p>
										</div>
									</form>
								<?php
								}
								else if(isset($_POST['forgotpassword2']))
								{
									if($success!='')
									{
										?>
										<div class="alert alert-success" style="color:black;">
											   <?php echo $success; ?>
										</div>
										<form method="post" action="forgotpassword.php">
										<div class="form-group">
											<label>Email address</label>
											<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>" readonly>
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
									<button type="submit" id="forpass" name="forpass" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
										<?php	
									}
								}
								else
								{
								?>
                                <form method="post" action="forgotpassword.php">
									<?php if ($error!='') {
									?> 
									<div class="alert alert-danger" role="alert">
										<?php echo $error; ?>
									</div>
									<?php
									}
									?>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <button type="submit" name="forgotpassword1" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="register.php"> Register Here</a></p>
                                    </div>
                                </form>
								<?php
								}
								?>
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
			document.getElementById("forpass").disabled = false;
		  } else 
			$('#message').html('Not Matching').css('color', 'red');
			document.getElementById("forpass").disabled = true;
		});
		$('#pass, #conpass').on('keyup', function () {
		  if ($('#pass').val() == $('#conpass').val()) {
			
			document.getElementById("forpass").disabled = false;
		  } else 
			
			document.getElementById("forpass").disabled = true;
		});
		
	</script>

</body>



</html>
<?php
}
else
{
	echo '<script type="text/javascript">window.location="index.php"; </script>';
}