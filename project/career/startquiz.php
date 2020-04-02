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
<style>
	.btn
	{
		border-radius:0;
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
        <div class="page-wrapper" style="background-color:#F2F2F2;";>
            <!-- Bread crumb -->
            <div class="row page-titles" >
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary" id="aquiz">Quiz</h3> 
				</div>
               <div class="col-md-7 text-right" id="aquiz1">
					<?php if(isset($_POST['examtype']))
					{?>
						<button type="button" class="btn btn-danger ribbon">Time Remaining: <span id="countdown"></span></button>
					<?php } ?>				
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
					<div class="col-lg-9">
						<?php
							if(isset($_POST['examtype']))
							{
								$sql1 = "select * from quizstart ";
								
								$abcxyz = 0	;
								
								$q1 = $conn->query($sql1);
								
								for($j=0;$j<$q1->num_rows;$j++)
								{
								
									$res1 = $q1->fetch_assoc();
									
									if($_SESSION['quiz_id']==$res1['user_id'] && date("Y-m-d") == date("Y-m-d", strtotime($res1['date'])))
									
									{
								
										//echo "dont refresh the page";

										$abcxyz = 1;
										
										break;
									}
						
								}
								
								if($abcxyz == 0)
								
								{	
								
									$sql2 = "insert into quizstart (user_id,date) values('".$_SESSION['quiz_id']."','".date('d-m-Y')."')";
								
									$conn->query($sql2);
									
									$_SESSION["duration"]=10;
									
									$_SESSION["start_time"]=date("Y-m-d H:i:s");

									$end_time=$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["start_time"])));

									$_SESSION["end_time"]=$end_time;
								
								}
								?>
								
								<form id="subquiz" action="startquiz.php" method="post">
								
									<?php
									
									$sql3 = "select * from question where examtype='".$_POST['examtype']."' and date='".date('Y-m-d')."'";
									
									$q3 = $conn->query($sql3);
									
									for($i=0;$i<$q3->num_rows;$i++)
									
									{
									
										$res3 = $q3->fetch_assoc();
									?>
										
									
										<div class="w3-card-4 w3-white animated zoomIn" style="margin-bottom:30px;">
											<header class="w3-container w3-light-grey">
												<div class="row">
													<div class="col-1">
														 <h3><?php echo $i+1 ."]"; ?></h3>
													</div>
													<div class="col">
														 <h3><?php echo $res3['quesname']; ?></h3>
													</div>
												</div>
											</header>
									<?php

									$j=0;
									
									?>
											<div class="w3-container" style="padding-top:15px; padding-bottom:15px;">
												<div class="row">
													<div class="col-1">
														 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option1']; ?>" id="option_<?php echo $res3['ques_id']."_".$j;?>">
													</div>
													<div class="col">
														 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option1']; ?></label>
													</div>
												</div>
									<?php 
	
									$j++;

									?>			
												<div class="row">
													<div class="col-1">
														 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option2']; ?>" id="option_<?php echo $res3['ques_id']."_".$j;?>">
													</div>
													<div class="col">
														 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option2']; ?></label>
													</div>
												</div>
									<?php 
	
									$j++;

									?>
												<div class="row">
													<div class="col-1">
														 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option3']; ?>" id="option_<?php echo $res3['ques_id']."_".$j;?>">
													</div>
													<div class="col">
														 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option3']; ?></label>
													</div>
												</div>
									<?php 
	
									$j++;

									?>
												<div class="row">
													<div class="col-1">
														 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option4']; ?>" id="option_<?php echo $res3['ques_id']."_".$j;?>">
													</div>
													<div class="col">
														 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option4']; ?></label>
													</div>
												</div>
											</div>
										</div>
										
									<?php
									
									}
									
									?>
									<input type="hidden" value="<?php echo $_POST['examtype']; ?>" name="examtype1">
									<input type="hidden" value="afds" name="subexam">
									<div class="row" >
										<div class="mx-auto" >
											<button style="width:auto;" class="btn btn-primary" type="submit">Submit Exam</button>
											<button style="width:auto;" class="btn btn-danger" type='reset'>Reset</button>
										</div>
									</div>
								</form>	
									
									
								<?php
							}
							else if(isset($_POST['subexam']))
							{
								$sql1 = "select * from quizstart ";
								
								$abcxyz = 0	;
								
								$q1 = $conn->query($sql1);
								
								for($j=0;$j<$q1->num_rows;$j++)
								{
								
									$res1 = $q1->fetch_assoc();
									
									if($_SESSION['quiz_id'] == $res1['user_id'] && $res1['quizdone'] == 0 && date("Y-m-d") == date("Y-m-d", strtotime($res1['date']))  )
									
									{
								
										$abcxyz = 1 ;
										
										break; 
										
									}
						
								}
								
								if($abcxyz == 1)
								
								{	
								
									$sql2 = "update quizstart set quizdone=1 where user_id='".$_SESSION['quiz_id']."' and date='".date("d-m-Y")."'";
								
									$conn->query($sql2);
									
									$kg = 0;
									
									$sql3 = "select * from question where examtype='".$_POST['examtype1']."' and date='".date('Y-m-d')."'";
									
									$q3 = $conn->query($sql3);
									
									for($i=0;$i<$q3->num_rows;$i++)
									
									{
									
										$res3 = $q3->fetch_assoc();
										
										$ans = $res3['ques_id'];
										
										$sql4 = "insert into answers (user_id, ques_id, answer, date) values('".$_SESSION['quiz_id']."', '".$res3['ques_id']."', '".$_POST[$ans]."', '".date('Y-m-d')."')";
										
										$conn->query($sql4);
										
										unset($_SESSION['start_time']);
										
										unset($_SESSION['end_time']);
										
										if($_POST[$ans] != '')
											
										{
												
											$kg++;	
												
										}
										
									}
									
								?>
									
									<div class="w3-card-4 w3-white animated zoomIn">
										<header class="w3-container w3-light-grey">
										  <h1>Result</h1>
										</header>
										<div class="w3-container" style="padding-top:15px; padding-bottom:15px; text-transform:capitalize;">
											Today You have Attempted <?php echo $kg; ?> Questions.<br> Results will be declared at 12am every night.<br>
											Come Back Tomorrow For More. <br><br>You can check your previous results in the <a href='results.php' style='color:#0980FF;'>results section.</a>
										</div>
									</div>
									
								<?php
								
								}
								else
								{
									
									echo "<div class='w3-card-4 w3-white'><div class='w3-container' style='padding-top:15px; padding-bottom:15px;'>You have refreshed the page.</div></div>";
									
								}

							}
							else
							{
								?>
									<div class="w3-card-4 w3-white animated zoomIn">
										<header class="w3-container w3-light-grey">
										  <h1>Rules</h1>
										</header>
										
										<div class="w3-container" style="padding-top:15px; padding-bottom:15px;">
											<div class="row">
												<div class="col-1" style="text-align:right;">
													1.
												</div>
												<div class="col">
													The quiz will consist of 10 questions in the form of multiple choices for each category. 
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													2.	
												</div>
												<div class="col">
													Each student will allowed to attend quiz only on any one category per day.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													3.
												</div>
												<div class="col">
													Time limit for quiz is 15 minutes.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													4.
												</div>
												<div class="col">
													If the user is not able to complete quiz on time, quiz will be automatically submitted after the time limit.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													 5.
												</div>
												<div class="col">
													 No negative marks for wrong answer.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													 6.
												</div>
												<div class="col">
													 Once the quiz is started it can’t be paused/Reassumed. If you fail to submit the quiz it will not be considered.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													 7.
												</div>
												<div class="col">
													 The result of quiz along with your chosen options and correct answers will be released at 12.00 AM every night.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													 8.
												</div>
												<div class="col">
													 Ten points will be awarded for each correct answer. Which will reflect on leaderboard after every 12.00 AM.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													 9.
												</div>
												<div class="col">
													 Quiz questions will be changed every day.
												</div>
											</div>
											<div class="row">
												<div class="col-1"  style="text-align:right;">
													10.
												</div>
												<div class="col">
													 Winners of every month will be informed by e-mail.
												</div>
											</div>
											
										</div>
									
									</div>
										
									<div class="w3-card-4 w3-white animated zoomIn" style="margin-top:30px;">
										<?php
											$sql1 = "select * from quizstart ";
												
											$abcxyz = 0;
												
											$q1 = $conn->query($sql1);
											
											for($j=0;$j<$q1->num_rows;$j++)
											{
												$res1 = $q1->fetch_assoc();
												
												if($_SESSION['quiz_id']==$res1['user_id'] && date("Y-m-d") == date("Y-m-d", strtotime($res1['date'])))
												{
													echo "<div class='w3-container' style='padding-top:15px; padding-bottom:15px; text-transform:capitalize;'>You have already given one exam today.<br> Results will be declared at 12am every night.<br> Come back tomorrow for more.<br><br>You can check your previous results in the <a href='results.php' style='color:#0980FF;'>results section.</a></div>";
													$abcxyz = 1;
													break;
												}
												
											}
											
											if($abcxyz == 0)
											{
												?>
												<header class="w3-container w3-light-grey">
												  <h1>Select Quiz Category</h1>
												</header>

												<div class="w3-container" style="padding-top:15px; padding-bottom:15px;">
												<?php
												
												$sql = "select distinct examtype from question where date='".date('Y-m-d')."'";
												
												$q = $conn->query($sql);
												
												if($q->num_rows==0)
												{
													?> <option >No Quiz Today</option><?php
												}
												
												else

												{
												
												?>										
												<form action='startquiz.php' method="post">
														<div class="form-group">
															<label for="sel1">Select from list:</label>
															<select class="form-control" name="examtype" id="sel1" required>
																<option></option>
																
																<?php
																
																	for($i=0;$i<$q->num_rows;$i++)
																		
																	{
																		$res=$q->fetch_assoc();
																		
																		?> <option value="<?php echo $res['examtype']; ?>"><?php echo $res['examtype']; ?></option><?php
																		
																	}
																		
																?>
															</select>
														</div>
														<button type="submit" class="btn btn-primary" style="border-radius:0; width:100%;">Submit</button>
													</form>
												<?php
												}
												?>
												</div>
												<?php
											}
										?>
									</div>
								<?php
							}
						?>
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
							</div><div class="col-lg-12" >
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

	<script type="text/javascript">
        setInterval(function(){
                
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.open("GET","php/countdown.php",false);
			xmlhttp.send(null);
			document.getElementById("countdown").innerHTML=xmlhttp.responseText;

			if(document.getElementById("countdown").innerHTML=='00:00')
			{ 
			  alert("Time Up");
			  $("#subquiz").submit();
			}
		},1000);

		if($(window).width() < 767)
		{
		   $("#aquiz").addClass("text-center");
		   $("#aquiz1").addClass("text-center");
		   $("#aquiz1").removeClass("text-right");
		}
		
    </script>
</body>


</html>