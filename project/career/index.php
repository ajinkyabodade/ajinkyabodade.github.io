<!DOCTYPE html>
<?php
include('php/dbconnect.php');
include('php/checklogin.php');

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
<title>Career Zone  |  Career Zone is one stop solution for all your career guidance  |  Quantitative Aptitude notes of 30+ topics  |  Latest Jobs in Software/IT and Government Sector  |  Take Quiz on various categories and compete with your friends  |   Links to Career Pages of MNC’s</title>
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
        <div class="page-wrapper" style="background-color:#F2F2F2;";>
            <!-- Bread crumb -->
            <div class="row page-titles" >
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> 
				</div>
               
            </div>
			
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
				<div class="row">
                    <div class="col-md-4">
                        <a href="startquiz.php"><div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-edit f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">Start Quiz</h2>
                                </div>
                            </div>
                        </div></a>
                    </div>
					<div class="col-md-4">
                        <a href="notesengineeringgate.php"><div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-envelope f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">Notes</h2>
                                    
                                </div>
                            </div>
                        </div></a>
                    </div>
                   <div class="col-md-4">
                         <a href="job.php"><div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-address-card f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">Jobs</h2>
                                </div>
                            </div>
                        </div></a>
                    </div>
                    
                   
                </div>

                <div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-12">
								<div class="w3-card-4 w3-white animated zoomIn">
									<header class="w3-container w3-light-grey">
									  <h1>Toppers Of The Month</h1>
									</header>
									<div class="w3-container" style="padding-top:15px; padding-bottom:15px; text-transform:capitalize;">
										<div class="table-responsive">
											<table class="table table-striped">
												<thead style="border-top:none;">
													<tr >
														<th>#</th>
														<th>Name</th>
														<th>Points</th>
													</tr>
												</thead>
												<tbody>
												<?php	
												
													$sql7 = "select * from points order by mpoints DESC limit 0,5";
													
													$q7 = $conn->query($sql7);
													
													for($k=0;$k<$q7->num_rows;$k++)
														
													{

														$res7 = $q7->fetch_assoc();
														
														$sql9 = "select * from user where id=".$res7['user_id'];
														
														$q9 = $conn->query($sql9);
														
														$res9 = $q9->fetch_assoc();
														
												?>	
													<tr>
														<th scope="row"><?php echo $k+1; ?></th>
														<td><?php echo $res9['fname']; ?></td>
														<td><?php echo $res7['mpoints']; ?></td>
													</tr>
													
												<?php
												
													}
													
												?>	
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12" style="margin-top:30px; ">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- aa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1773795397980564"
     data-ad-slot="9986977295"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
							</div>
							<div class="col-lg-12" style="margin-top:30px">
								<div class="w3-card-4 w3-white animated zoomIn">
									<header class="w3-container w3-light-grey">
									  <h1>All Time Toppers</h1>
									</header>
									<div class="w3-container" style="padding-top:15px; padding-bottom:15px; text-transform:capitalize;">
										<div class="table-responsive">
											<table class="table table-striped">
												<thead style="border-top:none;">
													<tr >
														<th>#</th>
														<th>Name</th>
														<th>Points</th>
													</tr>
												</thead>
												<tbody>
												<?php	
												
													$sql7 = "select * from points order by allpoints DESC limit 0,5";
													
													$q7 = $conn->query($sql7);
													
													for($k=0;$k<$q7->num_rows;$k++)
														
													{

														$res7 = $q7->fetch_assoc();
														
														$sql9 = "select * from user where id=".$res7['user_id'];
														
														$q9 = $conn->query($sql9);
														
														$res9 = $q9->fetch_assoc();
														
												?>	
													<tr>
														<th scope="row"><?php echo $k+1; ?></th>
														<td><?php echo $res9['fname']; ?></td>
														<td><?php echo $res7['allpoints']; ?></td>
													</tr>
													
												<?php
												
													}
													
												?>
												
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12" style="margin-top:30px;">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- aa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1773795397980564"
     data-ad-slot="9986977295"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
							</div>
							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-12">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- aa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1773795397980564"
     data-ad-slot="9986977295"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
								
							</div><div class="col-lg-12">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- aa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1773795397980564"
     data-ad-slot="9986977295"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
								
							</div>
							
						</div>
					</div>
					
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Created by <a style="color:#4FC1EA;" target="_blank" href="http://anandbhagat.co.in">Anand Bhagat</a> - 7875219661 & <a style="color:#4FC1EA;" target="_blank" href="https://www.linkedin.com/in/ajinkya-bodade/">Ajinkya Bodade</a> - 7066425769, Template designed by <a target="_blank" href="https://colorlib.com/">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
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