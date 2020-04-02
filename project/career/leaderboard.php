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
    <title>Quiz | Ganesh Deshmukh</title>
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
                    <h3 class="text-primary">Leaderboard</h3> 
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
								<div class="w3-card-4 w3-white animated zoomIn">
									<header class="w3-container w3-light-grey" style="min-height:50px;">
										<nav style="margin-top:10px;">
											<div class="nav nav-tabs nav-fill" id="nav-tab1" role="tablist">
												<ul class="nav nav-tabs profile-tab" role="tablist">
													<li class="nav-item"> <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Leaderboard Of Month <?php echo date('F'); ?></a> </li>
													<li class="nav-item"> <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">All Time Leaderboard</a> </li>
													<li class="nav-item"> <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Winners</a> </li>
												</ul>
											</div>
										</nav>
									</header>
								
									<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
											<div class="w3-container" style="margin-top:-10px; padding-bottom:15px; text-transform:capitalize;">
												<div class="table-responsive">
													<table id="bootstrap-data-table1" class="table table-striped">
														<thead style="border-top:none;">
															<tr >
																<th>#</th>
																<th>Name</th>
																<th>Points</th>
															</tr>
														</thead>
														<tbody>
														<?php	
														
															$sql7 = "select * from points order by mpoints DESC";
															
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
									
										<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
											<div class="w3-container" style="margin-top:-10px; padding-bottom:15px; text-transform:capitalize;">
												<div class="table-responsive">
													<table id="bootstrap-data-table2" class="table table-striped">
														<thead style="border-top:none;">
															<tr >
																<th>#</th>
																<th>Name</th>
																<th>Points</th>
															</tr>
														</thead>
														<tbody>
														<?php	
														
															$sql7 = "select * from points order by allpoints DESC";
															
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
									
										<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
											<div class="w3-container" style="margin-top:-10px; padding-bottom:15px; text-transform:capitalize;">
												<div class="table-responsive">
													<table id="bootstrap-data-table3" class="table table-striped">
														<thead style="border-top:none;">
															<tr >
																<th>#</th>
																<th>Name</th>
																<th>Month-Year</th>
																<th>Points</th>
															</tr>
														</thead>
														<tbody>
														<?php	
														
															$sql7 = "select * from winner where month != '".date('m-Y')."' order by points DESC";
															
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
																<td><?php echo date('F Y',strtotime($res7['month'])); ?></td>
																<td><?php echo $res7['points']; ?></td>
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
							<div class="col-lg-12" >
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
	
	
	<script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#nav-home-tab").click(function(){
				 $("#nav-home").addClass("show");
				 $("#nav-home").addClass("active");
				 $("#nav-profile").removeClass("show");
				 $("#nav-profile").removeClass("active");
				 $("#nav-contact").removeClass("show");
				 $("#nav-contact").removeClass("active");
			});
			$("#nav-profile-tab").click(function(){
				 $("#nav-home").removeClass("show");
				 $("#nav-home").removeClass("active");
				 $("#nav-profile").addClass("show");
				 $("#nav-profile").addClass("active");
				 $("#nav-contact").removeClass("show");
				 $("#nav-contact").removeClass("active");
			});
			$("#nav-contact-tab").click(function(){
				 $("#nav-home").removeClass("show");
				 $("#nav-home").removeClass("active");
				 $("#nav-profile").removeClass("show");
				 $("#nav-profile").removeClass("active");
				 $("#nav-contact").addClass("show");
				 $("#nav-contact").addClass("active");
			});
		});
		
		$(document).ready(function() {
			$('#bootstrap-data-table1').DataTable();
		});
		
		$(document).ready(function() {
			$('#bootstrap-data-table2').DataTable();
			$('#bootstrap-data-table3').DataTable();
		});
	</script>
</body>
</html>