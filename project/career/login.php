<!DOCTYPE html>
<?php
include("php/dbconnect.php");
$error = '';

if(isset($_COOKIE['ganeshdeshmukh'])) {
	$sql = "select * from user where id='".$_COOKIE['ganeshdeshmukh']."' ";

$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['email']=$res['email'];
$_SESSION['quiz_id']=$res['id'];
$_SESSION['fname']=$res['fname'];
     $_SESSION['quiz_id'] = $_COOKIE['ganeshdeshmukh'];
	 
}
}

if(!isset($_SESSION['quiz_id']))
{
if(isset($_POST['login']))
{

$email =  mysqli_real_escape_string($conn,trim($_POST['email']));
$password =  mysqli_real_escape_string($conn,$_POST['pass']);



if($email=='' || $password=='')
{
$error='All fields are required';
}
else{




$sql = "select * from user where email='".$email."' and pass = '".md5($password)."'";

$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['email']=$res['email'];
$_SESSION['quiz_id']=$res['id'];
$_SESSION['fname']=$res['fname'];
$cookie_name = "ganeshdeshmukh";
$cookie_value = $_SESSION['quiz_id'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

echo '<script type="text/javascript">window.location="index.php"; </script>';


}else
{
$error = 'Invalid Username or Password';
}
}
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
                                <h4>Login</h4>
                                <form method="post" action="login.php">
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
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="pass" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        
                                        <label class="pull-right">
        										<a href="forgotpassword.php">Forgotten Password?</a>
        									</label>

                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="register.php"> Register Here</a></p>
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


</body>



</html>
<?php
}
else
{
	echo '<script type="text/javascript">window.location="index.php"; </script>';
}