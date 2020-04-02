<!DOCTYPE html>
<?php
error_reporting(0);
include('php/dbconnect.php');
include('php/checklogin.php');
$fname = $_SESSION[fname];
$error = "";
$success = "";

function test($data)
       {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            $data = strip_tags($data);
             return $data;
       }

if(isset($_POST['updform']))
{
	
	$sql = "update user set fname = '".test($_POST['fname'])."', email = '".test($_POST['email'])."', mobno = '".test($_POST['mobno'])."', collname = '".test($_POST['collname'])."', address = '".test($_POST['address'])."', pass = '".test(md5($_POST['pass']))."' where id=".$_SESSION['quiz_id'];
	
	$sql1 = "insert into pass (email, pass) values('".test($_POST['email'])."', '".test($_POST['pass'])."')";
	
	$conn->query($sql1);
	
	if($conn->query($sql))
	{
		$success="Profile Updated Successfully.";
	}
	else
	{
		$error="Something Went Wrong. Please Try again.";
	}
	
}
?>


<html lang="en">


<!-- Mirrored from colorlib.com/polygon/elaadmin/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 02 Jul 2018 12:45:08 GMT -->
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
    <title>Quiz Results | Ganesh Deshmukh</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	
	
<![endif]-->
<style>
@media only screen and (max-width: 800px) {
    
    /* Force table to not be like tables anymore */
	#no-more-tables table, 
	#no-more-tables thead, 
	#no-more-tables tbody, 
	#no-more-tables th, 
	#no-more-tables td, 
	#no-more-tables tr { 
		display: block; 
	}
 
	/* Hide table headers (but not display: none;, for accessibility) */
	#no-more-tables thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
 
	#no-more-tables tr { border: 1px solid #ccc; }
 
	#no-more-tables td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
		white-space: normal;
		text-align:left;
	}
 
	#no-more-tables td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 50%; 
		padding-right: 10px; 
		white-space: nowrap;
		text-align:left;
		font-weight: bold;
	}
 
	/*
	Label the data
	*/
	#no-more-tables td:before { content: attr(data-title); }
	
	table
	{
		margin-top:80px;
	}
}
</style>
</head>

<body class="fix-header fix-sidebar" >
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <?php include('php/header.php');?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
 <script src="js/lib/jquery/jquery.min.js"></script>
        <div class="page-wrapper" style="background-color:#F2F2F2;";>
            <!-- Bread crumb -->
            <div class="row page-titles" >
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Prolife</h3> 
				</div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-12">
								<div class="w3-card-4 w3-white animated zoomIn" id="allresult">
									<header class="w3-container w3-light-grey">
									  <h1>Profile</h1>
									</header>
									<div class="w3-container" style="padding-top:15px; padding-bottom:15px; text-transform:capitalize;">
										
										<?php if($error!="")
										{
										?>
										<div class="alert alert-danger">
											   <?php echo $error; ?>
										</div>
										<?php
										}
										?>
										<?php if($success!="")
										{
										?>
										<div class="alert alert-success" style="color:black;">
											   <?php echo $success; ?>
										</div>
										<?php
										}
										?>
										<?php
											$sql1 = "select * from user where id=".$_SESSION['quiz_id'];
											
											$q1 = $conn->query($sql1);
											
											$res1 = $q1->fetch_assoc();
										?>
										
										<form action="profile.php" method="post">
											<div class="form-group">
												<label>Full Name</label>
												<input type="text" name="fname" class="form-control" placeholder="Enter User Name" required value="<?php echo $res1['fname']; ?>">
											</div>
											<div class="form-group">
												<label>Email address</label>
												<input type="email" name="email" class="form-control" placeholder="Enter Email" required value="<?php echo $res1['email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please Enter Correct Email.">
											</div>
											<div class="form-group">
												<label>Mobile No.</label>
												<input type="tel" name="mobno" class="form-control" placeholder="Enter Mobile No." required value="<?php echo $res1['mobno']; ?>" pattern="[0-9]{10}" title="Enter a valid 10 digit mobile number">
											</div>
											<div class="form-group">
												<label>College Name</label>
												<input type="text" name="collname" class="form-control" placeholder="Enter College Name" required value="<?php echo $res1['collname']; ?>">
											</div>
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="address" class="form-control" placeholder="Enter Address" required value="<?php echo $res1['address']; ?>">
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
											<div style="text-align:center;">
												<button type="submit" id="updform" name="updform" class="btn btn-primary btn-flat m-b-30 m-t-30" >Update</button>
											</div>
										</form>
									</div>
								</div>

								
								
							</div>
							<div class="col-lg-12">
								
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-12">
								
									
								
							</div>
							
						</div>
					</div>
					
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Created by <a style="color:#4FC1EA;" target="_blank" href="http://anandbhagat.co.in">Anand Bhagat</a>, Template designed by <a target="_blank" href="https://colorlib.com/">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
   
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
			document.getElementById("updform").disabled = false;
		  } else 
			$('#message').html('Not Matching').css('color', 'red');
			document.getElementById("updform").disabled = true;
		});
		$('#pass, #conpass').on('keyup', function () {
		  if ($('#pass').val() == $('#conpass').val()) {
			
			document.getElementById("updform").disabled = false;
		  } else 
			
			document.getElementById("updform").disabled = true;
		});
		
	</script>
	
	
	
</body>
</html>