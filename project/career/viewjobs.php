<?php
include('php/dbconnect.php');

				 
				$sql1 = "select * from jobs where id = '".$_POST['id']."' ";
				$q1 = $conn->query($sql1);
				
				for($i=0;$i<$q1->num_rows;$i++)
				{
					
					 $res1 = $q1->fetch_assoc();
					 ?>
					<div class="w3-card-4 w3-white animated zoomIn" style="margin-bottom:30px;">
						<header class="w3-container w3-light-grey">
						  
						  <div class="row">
											<div class="col-md-10">
												<h3><?php echo $res1['companyname']; ?></h3>
											</div>
											<div class="col-md-2">
												<h3 class="small" style="margin-bottom:0; text-align:center; padding:20px 0 20px 0;"><a href="job.php?jobcategory=<?php echo $_POST['jobcategory'];?>" class="btn btn-outline-primary">Back</a></h3>
											</div>
										</div>
						</header>
						<div class="w3-container" >
							<div class="row " style="margin:10px; ">
								<div class="col-12" >
									<?php echo $res1['job']; ?>
								</div>
							 </div>
						</div>
					</div>
				<?php
					}
				?>
				
				