<?php
include('php/dbconnect.php');
?>
<?php 
										$sql1 = "select * from notes where id = '".$_POST['topic']."' ";
										$q1 = $conn->query($sql1);
										$res1 = $q1->fetch_assoc();
										?>
<div class="w3-card-4 w3-white animated zoomIn" id="allnotes">
									<header class="w3-container w3-light-grey">
										<div class="row">
											<div class="col-10">
												<h1><?php echo $res1['topicname']; ?></h1>
											</div>
											<div class="col-2">
												<h1 class="small"><a href="notesengineeringgate.php" class="btn btn-outline-primary">Back</a></h1>
											</div>
										</div>
									</header>
									<div class="w3-container" style="padding:10px;">
									<?php
										echo $res1['note'];
									?>
											 
									</div>
								</div>