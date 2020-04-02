<?php
//index.php
//include autoloader

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();





$page ='<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<div style="width:80%; margin:auto;  background-color:#F1F1F1; padding: 20px ;">
				 <h1 style="margin:0; text-transform:uppercase; text-align:center;" class="text-primary">Result of Date:  '.date("d F Y",strtotime($_GET['date'])).' </h1> 
				</div>';

	
	 


		
		include('php/dbconnect.php');
		include('php/checklogin.php');
		
		$xy = 0;
		
		$sql3 = "select * from question where date='".$_GET['date']."'";
		
		$q3 = $conn->query($sql3);
		
		for($i=0;$i<$q3->num_rows;$i++)
		
		{
		
		$res3 = $q3->fetch_assoc();
		
		$sql1 = "select * from answers where user_id='".$_SESSION['quiz_id']."' and ques_id = '".$res3['ques_id']."' and date = '".$res3['date']."' ";
														
		$q1 = $conn->query($sql1);
		
		for($j=0;$j<$q1->num_rows;$j++)
		
		{
			$res1 = $q1->fetch_assoc();
		
		
			
$page .='		<div style="width:80%; margin: 20px auto;  border-bottom: 1px solid #888888; box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);">
				<div style="  background-color:#F1F1F1; padding: 15px ;">
				 <div style="overflow:hidden; float:left;"><h3 style="margin:0;">'. ++$xy ."]" .'</h3></div><div style="margin-left:30px;"><h3 style="margin:0;"> '. $res3['quesname'] .'</h3></div>
				</div>';
			
							 
					
		

		$ab = 0;
		
		$page .='
				<div class="w3-container" style="padding:10px 15px 20px 15px; ">
					<div class="row" style="margin-top:10px;">
						<div class="col-lg-1">
							
							<div style="overflow:hidden; float:left; "><input type="radio" name="'. $res3['ques_id'] .'" value="'. $res3['option1'] .'" ';  if($res3['option1']==$res1['answer']){ $page .= ' checked'; }  $page .=' disabled> </div>
							<div style="margin-left:30px;"> <label  >'. $res3['option1'] .'</label> '; if($res3['option1']==$res1['answer']){ if($res1['answer']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>'; }else{ $page .= '<i class="fa fa-times" style="color:red; font-size:20px; margin-top:5px;"></i>';  $ab = 1;} } else if($res1['answer']=='' && $res3['option1']==$res3['answer']){$page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';}else if($ab == 1 && $res3['option1']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';} 
							 
						$page .='</div></div>
					</div>
		
					<div class="row" style="margin-top:10px;">
						<div class="col-lg-1">
							
							<div style="overflow:hidden; float:left; "><input type="radio" name="'. $res3['ques_id'] .'" value="'. $res3['option2'] .'" ';  if($res3['option2']==$res1['answer']){ $page .= 'checked'; }  $page .=' disabled></div>
							<div style="margin-left:30px;"> <label  >'. $res3['option2'] .'</label> '; if($res3['option2']==$res1['answer']){ if($res1['answer']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>'; }else{ $page .= '<i class="fa fa-times" style="color:red; font-size:20px; margin-top:5px;"></i>';  $ab = 1;} } else if($res1['answer']=='' && $res3['option2']==$res3['answer']){$page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';}else if($ab == 1 && $res3['option2']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';} 
							 
						$page .='</div></div>
					</div>
		
					<div class="row" style="margin-top:10px;">
						<div class="col-lg-1">
							
							<div style="overflow:hidden; float:left; "><input type="radio" name="'. $res3['ques_id'] .'" value="'. $res3['option3'] .'" ';  if($res3['option3']==$res1['answer']){ $page .= 'checked'; }  $page .=' disabled></div>
							<div style="margin-left:30px;"> <label  >'. $res3['option3'] .'</label> '; if($res3['option3']==$res1['answer']){ if($res1['answer']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>'; }else{ $page .= '<i class="fa fa-times" style="color:red; font-size:20px; margin-top:5px;"></i>';  $ab = 1;} } else if($res1['answer']=='' && $res3['option3']==$res3['answer']){$page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';}else if($ab == 1 && $res3['option3']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';} 
							 
						$page .='</div></div>
					</div>
		
					<div class="row" style="margin-top:10px;">
						<div class="col-lg-1">
							
							<div style="overflow:hidden; float:left; "><input type="radio" name="'. $res3['ques_id'] .'" value="'. $res3['option4'] .'" ';  if($res3['option4']==$res1['answer']){ $page .= 'checked'; }  $page .=' disabled></div>
							<div style="margin-left:30px;"> <label  >'. $res3['option4'] .'</label> '; if($res3['option4']==$res1['answer']){ if($res1['answer']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>'; }else{ $page .= '<i class="fa fa-times" style="color:red; font-size:20px; margin-top:5px;"></i>';  $ab = 1;} } else if($res1['answer']=='' && $res3['option4']==$res3['answer']){$page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';}else if($ab == 1 && $res3['option4']==$res3['answer']){ $page .= '<i class="fa fa-check" style="color:green; font-size:20px; margin-top:5px;"></i>';} 
							 
						$page .='</div></div>
					</div>';
					
					if($res3['solution']!='')
					{
					$page .='
					<div style=" background-color:#F1F1F1; padding: 10px; margin:20px 0 0 10px;">
					 <h4 style="margin:0; text-transform:uppercase; text-align:center;" class="text-primary">Solution </h4> 
					</div>
					<div class="row" style="margin:10px;">
						<div class="col-lg-1">
						'. $res3['solution'] .'
						</div></div>
					</div>';
					}
				$page .='	
				</div>
			</div>';
			
		
		
		$page .='</div>';
		
		}
		}
		
		
	

$document->loadHtml($page);
//echo $page;


//set page size and orientation

$document->setPaper('A4', 'potrait');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream($_SESSION['fname'].' '.$_GET['date'], array("Attachment"=>1));
//1  = Download
//0 = Preview


?>