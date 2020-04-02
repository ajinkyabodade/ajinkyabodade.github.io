<!DOCTYPE html>


<?php
include("dbconnect.php");
if($_SESSION['checkid']=='1')
{

 
$email = $_SESSION['email'];
$privatekey=$_SESSION['pkey'];
$id=$_SESSION['id'];
$color=$_SESSION['color'];


	$result = $conn->query("SELECT * FROM user where id= '$id' ");
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()){

         $efname =  $row["efname" ];
     
         $emobno =  $row["emobno" ];
         $epassword =  $row["epassword" ];

	 
	}}
	
			openssl_private_decrypt($efname, $fname, $privatekey);
	openssl_private_decrypt($emobno, $mobno, $privatekey);
	openssl_private_decrypt($epassword, $password, $privatekey);

	
	
	
	
	?>
	
	
	
	
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>User Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}

    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact" style="width:100%; height:710px; ">
			<div class="section-content">
				<h1 class="section-header"> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> User Dashboard</span></h1>
				<h2>The user information will decrypt from database, Only when user Login's to his account</h2>
			</div>
			<div class="contact-section">
			<div class="container" style="font-size:20px">
				
					<div class="col-md-12">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Full Name: <?php echo $fname; ?></label>
					    	
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address: <?php echo $email; ?></label>
					    	
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.: <?php echo $mobno; ?></label>
					    	
			  			</div>
						
						<div>
						<div class="form-group">
					    	<label for="telephone">Password Color:<?php echo $color; ?> </label>
					    	
			  			</div>
						<div class="form-group">
					    	<label for="telephone">Password:<?php echo $password; ?></label>
					    	
			  			</div>
			  				<a href="logout.php" class="btn btn-default submit"><i class="fa"></i> Logout</a>
			  			</div>
			  			
			  		</div>
			  		
			  			
					
				
			</div>
		</section>
<script type="text/javascript">

</script>
</body>
</html>
<?php
}else
{
?><script>window.location.href = "logout.php";</script>
<?php
}
?>
