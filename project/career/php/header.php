<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<div id="main-wrapper" >
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="padding:0 20px;">
                        <!-- Logo icon -->
                        <b><h1 class="hidden-sm-down" style="margin:auto; font-family: 'Abril Fatface', cursive; padding:10px; "/>Career Zone</h1></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0" style="padding:10px;">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu" style="position:absolute; left:20px; top:10px; font-size:40px;"></i></a> </li>
                        <li class="nav-item"> <h1  class="hidden-md-up" style=" margin:auto auto auto 25px; font-family: 'Abril Fatface', cursive;  "/>Career Zone</h1></li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0 hidden-sm-down">
						
                       
                        <!-- End Messages -->
                        <!-- Profile -->
                        
                                    <li ><a class="btn btn-outline-primary" href="javascript:void(0)">Hi, <?php echo $_SESSION['fname']; ?>!</a></li>
                                    <li style="margin:0 10px;"><a class="btn btn-outline-primary" href="profile.php"><i class="ti-user"></i> Profile</a></li>
                                    <li><a class="btn btn-outline-primary" href="php/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar" ">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
							<li class="hidden-md-up"><a href="profile.php"><i class="ti-user"></i><span class="hide-menu">Hi, <?php echo $_SESSION['fname']; ?>!</span></a></li>
							<li class="nav-devider hidden-md-up"></li>
							<li><a href="index.php"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
							<li class="nav-devider"></li>
							<li><a href="startquiz.php"><i class="fa fa-edit"></i><span class="hide-menu">Take Quiz</a></span></li>
							<li class="nav-devider"></li>
							<li><a href="leaderboard.php"><i class="fa fa-user"></i><span class="hide-menu">LeaderBoard</span></a></li>
							<li class="nav-devider"></li>
							<li><a href="results.php"><i class="fa fa-list-alt"></i><span class="hide-menu">Results</span></a></li>
							<li class="nav-devider"></li>
							<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Notes</span></a>
								<ul aria-expanded="false" class="collapse">
									<li><a href="notesengineeringgate.php">Quantitative Aptitude</a></li>
									<small>More Notes Coming Soon.</small>
								</ul>
							</li>
							<li class="nav-devider"></li>
							<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-address-card"></i><span class="hide-menu">Jobs</span></a>
								<ul aria-expanded="false" class="collapse">
									<?php 
									$sql101 = "select distinct cat from jobs";
									$q101 = $conn->query($sql101);
									for($i=0;$i<$q101->num_rows;$i++)
									{
									$res101 = $q101->fetch_assoc();
									?>
									<li><a href="job.php?jobcategory=<?php echo $res101['cat']; ?>"><?php echo $res101['cat']; ?></a></li>
									<?php 
									}
									?>
									<small>More Jobs Uploading Soon.</small>
								</ul>
							</li>
							<li class="nav-devider"></li>
							<li><a href="android.php"><i class="fa fa-android"></i><span class="hide-menu">Download App</span></a></li>
							<li class="nav-devider"></li>
							<li class="hidden-md-up"><a href="profile.php"><i class="ti-user"></i><span class="hide-menu">Profile</span></a></li>
							<li class="nav-devider hidden-md-up"></li>
							<li class="hidden-md-up"><a href="php/logout.php"><i class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a></li>
							<li class="nav-devider hidden-md-up"></li>
							
							<!--<li><a href=".php"><i class="fa fa-envelope"></i><span class="hide-menu">Message</span></a></li>
							<li class="nav-devider"></li>-->
							
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>