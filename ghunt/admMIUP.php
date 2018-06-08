<?php
include("auth.php");
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>gHunt | Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="./style-file/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="./style-file/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="./style-file/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- DATA TABLES -->
    <link href="./style-file/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="./style-file/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="./style-file/_all-skins.min.css" rel="stylesheet" type="text/css">
    <!-- iCheck -->
    <link href="./style-file/blue.css" rel="stylesheet" type="text/css">
    <link href="./style-file/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./style-file/datepicker3.css" type="text/css">
	
	<!-- fonr awesome -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	
    <style>
		
		.searchBtn{
			margin-top: -1px;
			width:3%;
			float:right;
		}
		
		.button2:hover{
			background-color: #008CBA;
			color: white;
		}
	
		/* Full-width input fields */
		input[type=text], input[type=password], input[type=email], select[name=sortC], input[name=locf], select[name=catf] {	
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for all buttons */
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 54%;
		}

		button:hover {
			opacity: 0.8;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the image and position the close button */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 80px;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 60px;
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 43%; /* Could be more or less, depending on screen size */
		}

		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 100%;
			}
		}
	</style>
</head>
<div id="id01" class="modal">
<form class="modal-content animate" action="updateAdmin.php" method="POST">
	

	<div class="container">
	  <label><b>ID</b></label>
	  <br>
	  <input type="text" placeholder="Nombor kad pengenalan" name="adminID" maxlength="12" value="<?PHP echo $fn['id_admin']; ?>" required>
	  <br>

	  <label><b>Fullname</b></label>
	  <br>
	  <input type="text" placeholder="Nama penuh" name="adminName" value="<?PHP echo $fn['name']; ?>"  required>
	  <br>
	  
	  <label><b>Email</b></label>
	  <br>
	  <input type="email" placeholder="Email" name="adminEmail" value="<?PHP echo $fn['email']; ?>" required>
	  <br>
	  
	  <label><b>Phone Number</b></label>
	  <br>
	  <input type="text" placeholder="" name="adminTel" value="<?PHP echo $fn['phone']; ?>" required>
	  <br>
	  
	  <label><b>Password</b></label>
	  <br>
	  <input type="text" placeholder="" name="adminPwd" value="<?PHP echo $fn['password']; ?>">
	  <br>
	  
	  <label><b>Repeat password</b></label>
	  <br>
	  <input type="text" placeholder="" name="adminPwd2" value="<?PHP echo $fn['password']; ?>">
	  <br>
		
	  <button type="submit">Update</button>
	  <br>
	  
	</div>

	<div  style="background-color:#f1f1f1">
	  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="margin-left:15px;">Cancel</button>
	  
	</div>
	</form>
</div>
<body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- HEADER SECTION -->
        <header class="main-header" >
            <!-- Logo -->
            <a href="dashboard.php" class="logo" style="background-color: #179BD7; color: #179BD7;">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                <!--<img src="" width="50px"></img>-->            
            </span>
                <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">                  
<!--                <img src="template/images/jata.png" width="50px"></img>
                &nbsp;&nbsp;-->
                <img src="assets/img/logo_gh.png" width="60px" height="45px">
                &nbsp;&nbsp;&nbsp;
                <!--<img src="template/images/eSmartBlue.png" width="60px" height="50px"></img>-->
            </span>

            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="background-color: #179BD7;"> 
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    <div style="font-style: italic; font-family: 'Open Sans', sans-serif; font-size:large;font-weight:bold;color: white;margin-left:45px;margin-top:-20px;position:absolute;z-index:1;">
                        <p>gHunt Management</p>
                    </div>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/logo/adminLogo.png" class="user-image" alt="">
                                <span class="hidden-xs"><?PHP echo $fn['name']; ?></span>
                            </a>
                            <ul class="dropdown-menu" >
                                <!-- User image -->
                                <li class="user-header" style="background-color: #179BD7; height: 151px;">
                                    <img src="images/logo/adminLogo.png" class="user-image" alt="">
                                    <p style="color: white;">
                                       <?PHP echo $fn['name']; ?>
                                    </p>
                                </li>
								<li class="user-body">
									<p>
									   Email: <strong style="color: #3c763d;"><?PHP echo $fn['email']; ?></strong>
									   <br>
									   Phone Number: <strong style="color: #3c763d;"><?PHP echo $fn['phone']; ?></strong>

                                    </p>
								<li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="logout.php" style="background-color: #ce1a1a; width:auto; font-size: 12px; font-weight: bold;" class="btn btn-warning btn-lg">Logout</a>
                                    </div>
									<div class="pull-left">
                                        <a onclick="document.getElementById('id01').style.display='block'" style="background-color: #00A65A; width:auto; font-size: 12px; font-weight: bold;" class="btn btn-warning btn-lg">Edit Info</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER SECTION -->

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <!-- MENU SECTION -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
                <!-- Sidebar user panel -->
                <div class="logo">
                    <span class="logo-lg">
                    <b>
                        <font color="white">                                    
                        <div id="date" align="center"></div>
                        <div id="txt" align="center"></div>
                        </font>
                    </b>
                </span>

                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN MENU</li>

                    <li class="treeview">
                        <a href="dashboard.php">
                            <i class="fa fa-dashboard"></i><span>Dashboard</span>
                        </a>
                    </li>
					<li class="treeview">
                        <a href="#">
                            <i class="fa fa-briefcase"></i>  <span>IT Directory</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="ITlist.php">
                                    <i class="fa fa-long-arrow-right"></i>Manage directory</a>
                            </li>
                            <li class="">
                                <a href="ITadd.php">
                                    <i class="fa fa-long-arrow-right"></i>Add new record</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i><span>Ent Directory</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="">
                                <a href="ENTlist.php">
                                    <i class="fa fa-long-arrow-right"></i>Manage directory</a>
                            </li>
                            <li class="">
                                <a href="ENTadd.php">
                                    <i class="fa fa-long-arrow-right"></i>Add new record</a>
                            </li>

                        </ul>
                    </li>
					<li class="treeview active">
                        <a href="#">
                            <i class="fa fa-id-card-o"></i><span>UPSIPRENEUR</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li class="active">
                                <a href="UPlist.php">
                                    <i class="fa fa-long-arrow-right"></i>Manage directory</a>
                            </li>
                            <li class="">
                                <a href="UPadd.php">
                                    <i class="fa fa-long-arrow-right"></i>Add new record</a>
                            </li>

                        </ul>
                    </li>
					<li class="treeview">
                        <a href="#">
                            <i class="fa fa-id-badge"></i><span>Coaching & Mentoring</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="">
                                <a href="CMlist.php">
                                    <i class="fa fa-long-arrow-right"></i>Manage directory</a>
                            </li>
                            <li class="">
                                <a href="CMadd.php">
                                    <i class="fa fa-long-arrow-right"></i>Add new record</a>
                            </li>

                        </ul>
                    </li>
					<li class="treeview">
                        <a href="mci.php">
                            <i class="fa fa-info-circle"></i><span>Manage contact information</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!--END MENU SECTION -->
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <!--PAGE CONTENT -->
        <div class="content-wrapper" style="min-height: 652px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
					UPSIPRENEUR details
				</h1> 
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
							<div class="col-md-12" style="float: left">
                        <!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<div class="tab-content">
										
										<div class="tab-pane active" id="tab_1">
											<div class="box-body">
											
													<div id="div_tab1" class="col-md-12">
													
										<div>
											<?php
													require('config.php');	
													
													if (isset($_POST['submitMDUP'])){
													$id_up = $_POST["id"];
													
													// display directory list
													$sql = "SELECT * FROM upsipreneur WHERE id = '$id_up'";
													
													$result = mysqli_query($link, $sql);
													$MDres = mysqli_fetch_assoc($result);
													
													if (mysqli_num_rows($result) > 0) {
														
														echo
															'<div class="col-lg-12">
																<form action="updateUP.php" method="post"> 
																	<input type="hidden" name="ideditUP" value="'.$MDres["id"].'">
																	<button type="submit" name="editUP" class="btn btn-warning btn-lg" style="background-color: #179BD7; width: 5%; height: 4%; font-size: 10px; padding: 0px 0px 0px 0px;">Edit info</button>
																</form>
																<br>
																	<div class="jobs-list-item _old">
																		<div class="panel panel-default">
																			<div class="panel-body">
																				<div class="job-details" style="width: 100%; float: left; text-align:left">
																					<div> 
																						<span class="thumbnail no-bottom-margin" style="width: 55px;">
																							<i class="fa fa-user fa-4x icon-round-border"></i>
																						</span>
																					
																					<div>
																						<span style=" display:inline-block; width: 50%;">
																								<p> <strong>ID <span style="display:inline-block; width: 140px;"></span>:</strong> '.$MDres['id'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Name<span style="display:inline-block; width: 119px;"></span>:</strong> '.$MDres['nama'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Matric No. <span style="display:inline-block; width: 84px;"></span>:</strong> '.$MDres['no_matrik'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Semester <span style="display:inline-block; width: 89px;"></span>:</strong> '.$MDres['semester'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>MyKad No.<span style="display:inline-block; width: 83px;"></span>:</strong> '.$MDres['no_mykad'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Phone No. <span style="display:inline-block; width: 82px;"></span>:</strong> '.$MDres['no_telefon'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Bumiputera/Not <span style="display:inline-block; width: 46px;"></span>:</strong> '.$MDres['bp_bukan'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Gender <span style="display:inline-block; width: 102px;"></span>:</strong> '.$MDres['jantina'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Field of study<span style="display:inline-block; width: 63px;"></span>:</strong> '.$MDres['bidang_p'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Business name <span style="display:inline-block; width: 47px;"></span>:</strong> '.$MDres['nama_p'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Main product <span style="display:inline-block; width: 62px;"></span>:</strong> '.$MDres['produk_utama'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>IPT SSM No. <span style="display:inline-block; width: 67px;"></span>:</strong> '.$MDres['no_ssm_ipt'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Owned business<span style="display:inline-block; width: 42px;"></span>:</strong> '.$MDres['milikan_p'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Business type<span style="display:inline-block; width: 58px;"></span>:</strong> '.$MDres['jenis_p'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Fund source<span style="display:inline-block; width: 68px;"></span>:</strong> '.$MDres['punca_m'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Business location<span style="display:inline-block; width: 33px;"></span>:</strong> '.$MDres['lokasi_p'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Business start date<span style="display:inline-block; width: 24px;"></span>:</strong> '.$MDres['tarikh_mp'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							
																								<p> <strong>Email<span style="display:inline-block; width: 115px;"></span>:</strong> '.$MDres['emel'].' </p>
																							<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																								
																						</span>
																					</div>
																				</div>
																				
																			</div>
																		</div>
																	</div>
																</div>';
													}
													else {
														echo '<div class="col-xs-12 col-md-9 col-lg-9 col-custom-right right row-2 search-result-container col-md-push-3 col-lg-push-3">
																<p style="font-weight: bold;">Tiada rekod</p>
															  </div>';
														}
													}
													mysqli_close($link);
													?>
										</div>
													
																
												
												</div>
											</div>
										</div>
										<!-- /.tab-pane -->

										<div class="tab-pane" id="tab_2">
											
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>
                    <!-- /.col -->
                </div>
				
            </section>
            <!-- /.content -->
        </div>
        <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
    </div>
    <!-- ./wrapper -->
	
	
    <!-- jQuery 2.1.4 -->
    <script src="./style-file/jQuery-2.1.4.min.js.download"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="./style-file/bootstrap.min.js.download" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="./style-file/jquery.dataTables.min.js.download" type="text/javascript"></script>
    <script src="./style-file/dataTables.bootstrap.min.js.download" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="./style-file/jquery.slimscroll.min.js.download" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="./style-file/fastclick.min.js.download"></script>
    <!-- AdminLTE App -->
    <script src="./style-file/app.min.js.download" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="./style-file/icheck.min.js.download" type="text/javascript"></script>
    <script src="./style-file/highcharts.js.download"></script>
    <script src="./style-file/highcharts-3d.js.download"></script>
    <script src="./style-file/exporting.js.download"></script>
    <!-- datepicker -->
    <script src="./style-file/bootstrap-datepicker.js.download"></script>
    <!-- Demo -->
    <script src="./style-file/demo.js.download" type="text/javascript"></script>
	
	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	</script>

</body>

</html>