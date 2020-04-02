<?php	
							include('php/dbconnect.php');							
															$sql4 = "select * from user";
																
															$q4 = $conn->query($sql4);
															
															for($i=0;$i<$q4->num_rows;$i++)
															
															{
																$points = 0;
																
																$res4 = $q4->fetch_assoc();
														
																$sql5 = "select * from answers where user_id='".$res4['id']."' and date != '".date('Y-m-d')."' ";
																
																$q5 = $conn->query($sql5);
																
																for($j=0;$j<$q5->num_rows;$j++)
																
																{
																	
																	$res5 = $q5->fetch_assoc();
																
																	$sql6 = "select * from question where ques_id=".$res5['ques_id'];
																	
																	$q6 = $conn->query($sql6);
																
																	if($q6->num_rows == 1)
																	
																	{
																		
																		$res6 = $q6->fetch_assoc();
																		
																		if($res6['answer'] == $res5['answer'])
																			
																		{
																			
																			$points++;
																			
																		}
																		
																	}
																	
																}
																
																$sql7 = "select * from points where user_id=".$res4['id'];
																
																$q7 = $conn->query($sql7);
																
																if($q7->num_rows == 1)
																{
																	
																	$sql8 = "update points set allpoints ='".$points*10 ."' where user_id='".$res4['id']."'" ;
																	
																	$conn->query($sql8);
																	
																}
																else if($q7->num_rows == 0)
																{
																	
																	$sql8 = "insert into points (user_id, allpoints) values('".$res4['id']."', '".$points*10 ."')" ;
																	
																	$conn->query($sql8);
																	
																}
																
															}
															
															
															
															
															
															
															
															
															
															
															
															
															
															$sql4 = "select * from user";
																
															$q4 = $conn->query($sql4);
															
															for($i=0;$i<$q4->num_rows;$i++)
															
															{
																$points = 0;
																
																$res4 = $q4->fetch_assoc();
														
																$sql5 = "select * from answers where user_id='".$res4['id']."' and date != '".date('Y-m-d')."' ";
																
																$q5 = $conn->query($sql5);
																
																for($j=0;$j<$q5->num_rows;$j++)
																
																{
																	
																	$res5 = $q5->fetch_assoc();
																		
																	if(date("m-Y",strtotime($res5['date'])) == date("m-Y"))

																	{
																		
																		$sql6 = "select * from question where ques_id=".$res5['ques_id'];
																		
																		$q6 = $conn->query($sql6);
																	
																		if($q6->num_rows == 1)
																		
																		{
																			
																			$res6 = $q6->fetch_assoc();
																			
																			if($res6['answer'] == $res5['answer'])
																				
																			{
																				
																				$points++;
																				
																			}
																			
																		}
																	
																	}
																	
																}
																
																$sql7 = "select * from points where user_id=".$res4['id'];
																
																$q7 = $conn->query($sql7);
																
																if($q7->num_rows == 1)
																{
																	
																	$sql8 = "update points set mpoints ='".$points*10 ."' where user_id='".$res4['id']."'" ;
																	
																	$conn->query($sql8);
																	
																}
																else if($q7->num_rows == 0)
																{
																	
																	$sql8 = "insert into points (user_id, mpoints) values('".$res4['id']."', '".$points*10 ."')" ;
																	
																	$conn->query($sql8);
																	
																}
																
															}
															
															
															
															
															
															
															$sql4 = "select * from user";
																
															$q4 = $conn->query($sql4);
															
															for($i=0;$i<$q4->num_rows;$i++)
															
															{
																$res4 = $q4->fetch_assoc();
																
																$sql1 = "select distinct DATE_FORMAT(date,'%M-%Y') as date from answers";
																
																$q1 = $conn->query($sql1);
																
																for($i1=0;$i1<$q1->num_rows;$i1++)
																
																{
																	
																	$points = 0;
																
																	$res1 = $q1->fetch_assoc();
															
																	if(date("m-Y",strtotime($res1['date'])) != date("m-Y"))
																	{
															
																		$sql5 = "select * from answers where user_id='".$res4['id']."' ";
																		
																		$q5 = $conn->query($sql5);
																		
																		for($j=0;$j<$q5->num_rows;$j++)
																		
																		{
																			
																			$res5 = $q5->fetch_assoc();
																				
																			if(date("M-Y",strtotime($res5['date'])) == date("M-Y",strtotime($res1['date'])))
																			{	
																				$sql6 = "select * from question where ques_id=".$res5['ques_id'];
																				
																				$q6 = $conn->query($sql6);
																			
																				if($q6->num_rows == 1)
																				
																				{
																					
																					$res6 = $q6->fetch_assoc();
																					
																					if($res6['answer'] == $res5['answer'])
																						
																					{
																						
																						$points++;
																						
																					}
																					
																				}
																			
																			}
																			
																		}
																	
																		$sql7 = "select * from winner where month = '".date("M-Y",strtotime($res1['date']))."'";
																		
																		$q7 = $conn->query($sql7);
																		
																		$res7 = $q7->fetch_assoc();
																		
																		if($points*10 > $res7['points'])
																		{
																			if($q7->num_rows == 1)
																			{
																				
																				$sql8 = "update winner set user_id ='".$res4['id']."', points = '".$points*10 ."' where month='".date("M-Y",strtotime($res1['date']))."'" ;
																				
																				$conn->query($sql8);
																				
																			}
																			else if($q7->num_rows == 0)
																			{
																				
																				$sql8 = "insert into winner (user_id, month, points) values('".$res4['id']."', '".date("M-Y",strtotime($res1['date']))."', '".$points*10 ."')" ;
																				
																				$conn->query($sql8);
																				
																			}
																		
																		}
																		
																	}
																
																}
															}
															?>