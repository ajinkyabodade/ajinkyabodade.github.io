<div class="row">
						<div class="col-lg-1">
							 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option2']; ?>" <?php if( $res3['option2']==$res1['answer']){ echo "checked"; } ?> id="option_<?php echo $res3['ques_id']."_".$j;?>" disabled>
						</div>
						<div class="col-lg-11">
							 <label for="option_<?php echo $res3['ques_id']."_".$j;?>" ><?php echo $res3['option2']; ?></label> <?php if($res3['option2']==$res1['answer']){ if($res1['answer']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>'; }else{ echo '<i class="fa fa-times" style="color:red; font-size:20px;"></i>';  $ab = 1;} } else if($res1['answer']=='' && $res3['option2']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>';} else if($ab == 1 && $res3['option2']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>';} ?>
						</div>
					</div>
		
					<div class="row">
						<div class="col-lg-1">
							 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option3']; ?>" <?php if( $res3['option3']==$res1['answer']){ echo "checked"; } ?> id="option_<?php echo $res3['ques_id']."_".$j;?>" disabled>
						</div>
						<div class="col-lg-11">
							 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option3']; ?></label> <?php if($res3['option3']==$res1['answer']){ if($res1['answer']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>'; }else{ echo '<i class="fa fa-times" style="color:red; font-size:20px;"></i>';  $ab = 1;} } else if($res1['answer']=='' && $res3['option3']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>';}else if($ab == 1 && $res3['option3']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>';}  ?>
						</div>
					</div>
		
					<div class="row">
						<div class="col-lg-1">
							 <input type="radio" name="<?php echo $res3['ques_id']; ?>" value="<?php echo $res3['option4']; ?>" <?php if( $res3['option4']==$res1['answer']){ echo "checked"; } ?> id="option_<?php echo $res3['ques_id']."_".$j;?>" disabled>
						</div>
						<div class="col-lg-11">
							 <label for="option_<?php echo $res3['ques_id']."_".$j;?>"><?php echo $res3['option4']; ?></label> <?php if($res3['option4']==$res1['answer']){ if($res1['answer']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>'; }else{ echo '<i class="fa fa-times" style="color:red; font-size:20px;"></i>'; $ab = 1;} } else if($res1['answer']=='' && $res3['option4']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>';} else if($ab == 1 && $res3['option4']==$res3['answer']){ echo '<i class="fa fa-check" style="color:green; font-size:20px;"></i>';} ?>
						</div>
					</div>
				</div>
			</div>
			
		<?php
		
		}
		}
		
		?>';