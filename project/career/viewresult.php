
<div class="row page-titles" >
	<div class="col-md-7 align-self-center">
		<h3 class="text-primary">Result of Date: <?php echo date("d F Y",strtotime($_POST['date'])); ?></h3> 
	</div>
	<div class="col-md-5 text-right" >
		<!--<a href="pdfresult.php?date=<?php echo $_POST['date']; ?>" class="btn btn-outline-primary" id="download" data-value="<?php echo $_POST['date']; ?>">
         Download
		</a>-->
		<button id="back" class="btn btn-outline-primary">Back</button>						
	</div>
</div>
<?php

		
		include('php/dbconnect.php');
		include('php/checklogin.php');
		
		$xy=0;
		
		$sql3 = "select * from question where date='".$_POST['date']."'";
		
		$q3 = $conn->query($sql3);
		
		for($i=0;$i<$q3->num_rows;$i++)
		
		{
		
		$res3 = $q3->fetch_assoc();
		
		$sql1 = "select * from answers where user_id='".$_SESSION['quiz_id']."' and ques_id = '".$res3['ques_id']."' and date = '".$res3['date']."' ";
														
		$q1 = $conn->query($sql1);
		
		for($j=0;$j<$q1->num_rows;$j++)
		
		{
			$res1 = $q1->fetch_assoc();
		
		?>
			
			<div class="w3-card-4 w3-white" style="margin-bottom:30px;">
				<header class="w3-container w3-light-grey">
					<div class="row">
						<div class="col-1">
							 <h3><?php echo ++$xy ."]"; ?></h3>
						</div>
						<div class="col">
							 <h3><?php echo $res3['quesname']; ?></h3>
						</div>
					</div>
				</header>
		<?php

		$ab = 0;
		
		?>
				<div class="w3-container" style="padding-top:15px; padding-bottom:15px;">
					<div class="row">
						<div class="col-1">
							 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option1']; ?>" <?php if($res3['option1']==$res1['answer']){ echo "checked"; } ?> id="option_<?php echo $res3['ques_id']."_".$j;?>" disabled>
						</div>
						<div class="col">
							 <label for="option_<?php echo $res3['ques_id']."_".$j;?>" ><?php echo $res3['option1']; ?></label> <?php if($res3['option1']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>'; } ?>
						</div>
					</div>
		
					<div class="row">
						<div class="col-1">
							 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option2']; ?>" <?php if( $res3['option2']==$res1['answer']){ echo "checked"; } ?> id="option_<?php echo $res3['ques_id']."_".$j;?>" disabled>
						</div>
						<div class="col">
							 <label for="option_<?php echo $res3['ques_id']."_".$j;?>" ><?php echo $res3['option2']; ?></label> <?php if($res3['option2']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>'; } ?>
						</div>
					</div>
		
					<div class="row">
						<div class="col-1">
							 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option3']; ?>" <?php if( $res3['option3']==$res1['answer']){ echo "checked"; } ?> id="option_<?php echo $res3['ques_id']."_".$j;?>" disabled>
						</div>
						<div class="col">
							 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option3']; ?></label> <?php if($res3['option3']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>'; } ?>
						</div>
					</div>
		
					<div class="row">
						<div class="col-1">
							 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option4']; ?>" <?php if( $res3['option4']==$res1['answer']){ echo "checked"; } ?> id="option_<?php echo $res3['ques_id']."_".$j;?>" disabled>
						</div>
						<div class="col">
							 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option4']; ?></label> <?php if($res3['option4']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>'; } ?>
						</div>
					</div>
					
					<?php if($res3['solution']!='')
					{
					?>
					<div class="row page-titles w3-card-2" style="background-color:#F1F1F1; padding:10px; margin-bottom:10px;">
						<div class="col-md-12 text-center" >
							<h3 class="text-primary" style="margin:0;">Solution</h3> 
						</div>
					</div>
					<div class="row">
						<div class="col-1">
							  
						</div>
						<div class="col">
							 <?php echo $res3['solution']; ?>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
			
		<?php
		
		}
		}
		
		?>
		
		<script>
		$("#back").click(function(){
			$("#allresult").css("display", "block");
			$("#dateresult").css("display", "none");
			
		});
		
		
		</script>
		
		