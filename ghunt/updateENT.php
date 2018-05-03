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
	
	<!-- Flora-editor css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
	<link href="./froala_editor_2.8.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="./froala_editor_2.8.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
	
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
                    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-user"></i><span>Ent Directory</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li class="active">
                                <a href="ENTlist.php">
                                    <i class="fa fa-long-arrow-right"></i>Manage directory</a>
                            </li>
                            <li class="">
                                <a href="ENTadd.php">
                                    <i class="fa fa-long-arrow-right"></i>Add new record</a>
                            </li>
                        </ul>
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
					Edit entrepreneur details
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
													
													if (isset($_POST['editENT'])){
														
													$id_ent = $_POST["ideditENT"];
													
													// display directory list
													$sql = "SELECT * FROM entlist WHERE id_ent = '$id_ent'";
													
													$result = mysqli_query($link, $sql);
													$MDres = mysqli_fetch_assoc($result);
													
													if (mysqli_num_rows($result) > 0) {
														
														echo
															'
															<form action="updateENT.php" method="POST" enctype="multipart/form-data">
																<input type="hidden" name="idENT" value="'.$MDres['id_ent'].'">
																<div class="col-lg-12">
																	<br>
																		<div class="jobs-list-item _old">
																			<div class="panel panel-default">
																				<div class="panel-body">
																					<div class="job-details" style="width: 100%; float: left; text-align:left">
																						<div> 
																								Update profile image:
																								<input class="btn btn-warning btn-lg" style="width: 25%" type="file" name="imageUP" value="'.$MDres['pic'].'">
																							<br>
																							<img src="'.$MDres['pic'].'" alt="Profile image" width="194" height="194" style="float: left; border:3px solid grey; margin-right: 10px">
																						</div>
																						
																						<div>
																							<span style=" display:inline-block; width: 50%;">
																									<p> <strong>Name <span style="display:inline-block; width: 114px;"></span>:</strong> 
																									<input type="text" name="nameUP" value="'.$MDres['name_ent'].'"> </p>
																								<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																								
																									<p> <strong>Location <span style="display:inline-block; width: 96px;"></span>:</strong> 
																									<input type="text" name="locUP" value="'.$MDres['location'].'"> </p>
																								<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																								
																									<p> <strong>Business name <span style="display:inline-block; width: 49px;"></span>:</strong> 
																									<input type="text" name="bnUP" value="'.$MDres['businessName'].'"> </p>
																								<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																								
																									<p> <strong>Position <span style="display:inline-block; width: 96px;"></span>:</strong> 
																									<input type="text" name="posUP" value="'.$MDres['Position'].'"> </p>
																								<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																								
																									<p> <strong>Online social profile <span style="display:inline-block; width: 18px;"></span>:</strong> 
																									<input type="text" name="ospUP" value="'.$MDres['on_social_pro'].'"> </p>
																								<hr style="height:1px; background-color: #31B0D5; margin-top: 0; margin-left: 160; width:130%">
																							</span>
																						</div>
																					</div>
																					
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	
																	<div class="col-lg-12" style="width: 100%; float: left">
																		<div class="jobs-list-item _old">
																			<div class="panel panel-default">
																				<div class="panel-body">
																					<div style="float: left;"">
																						<div class="job-details">
																								<span>
																								<p><strong>Career Details</strong></p>
																								  <textarea id="froala-editor" name="cdUP">'.$MDres['career'].'</textarea>
																								</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																		<center>
																		  <button type="submit" class="signupbtn" name="updateDetails" style="width:20%">Update Details</button>
																		</center>
															</form>
															';
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
											<?PHP
											require ('config.php');

												if (isset($_POST['updateDetails'])){
													$idENT = $_POST['idENT'];	
													$entName = mysqli_real_escape_string($link, $_POST['nameUP']);
													$entLocation = mysqli_real_escape_string($link, $_POST['locUP']);
													$comName = mysqli_real_escape_string($link, $_POST['bnUP']);
													$pos = mysqli_real_escape_string($link, $_POST['posUP']);
													$sProfile = mysqli_real_escape_string($link, $_POST['ospUP']);
													$cDetails = mysqli_real_escape_string($link, $_POST['cdUP']);
													
													$image = $_FILES['imageUP']['name'];
													$filename = $_FILES['imageUP']['tmp_name'];
													$fileSize = $_FILES["imageUP"]["size"];
													$target_dir = "uploads/";
													$target = $target_dir .basename($_FILES['imageUP']['name']);
													$uploadOk = 1;
													
													$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
													
													if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
														echo '<script type="text/javascript">
																alert("Sorry, only JPG, JPEG, & PNG files are allowed.");
															 </script>';
														$uploadOk = 0;
													}
													
													if ($fileSize > 500000) {
														echo '<script type="text/javascript">
																alert("Sorry, image size must not more than 500kb");
															 </script>';
														$uploadOk = 0;
													}
													
													//$content = file_get_contents($image);
													
													if($uploadOk == 1){
														$sql = "UPDATE entlist SET pic='$target' WHERE id_ent = '$idENT'";
														
														move_uploaded_file($filename,$target);	
															
														if(mysqli_query($link, $sql)){
														echo '<script type="text/javascript">
																alert("Profile image updated.");
															</script>';	
														// check if exist in featured list
														$sqlUPF = "SELECT * FROM featured_ent WHERE id_ent = '$idENT'";
														$resultUPF = mysqli_query($link, $sqlUPF);
														
														if(mysqli_num_rows($resultUPF) == 1){
															$sqlupF = "UPDATE featured_ent SET pic='$target' WHERE id_ent = '$idENT'";
															if(mysqli_query($link, $sqlupF)){
																echo '<script type="text/javascript">
																		alert("Profile image updated on featured list.");
																	 </script>';
																} else{
																	echo "ERROR: Could not able to execute $sqlupF. " . mysqli_error($link);
																}
															
															} 
															else {
																echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
															}
														}
													}
													
													// update details
													$sql = "UPDATE entlist SET name_ent='$entName', location='$entLocation', businessName='$comName', Position='$pos',
															on_social_pro='$sProfile', career='$cDetails' WHERE id_ent = '$idENT'";
													
													if(mysqli_query($link, $sql)){
														
														echo '<script type="text/javascript">
																	alert("Entrepreneur directory record sucessfully updated");
															 </script>';
														
														// check if exist in featured list
														$sqlSelF = "SELECT * FROM featured_ent WHERE id_ent = '$idENT'";
													
														$resultselF = mysqli_query($link, $sqlSelF);
															
														if(mysqli_num_rows($resultselF) == 1){
															
															// attempt insert query execution
															$sqlupF = "UPDATE featured_ent SET name_ent='$entName', location='$entLocation', businessName='$comName', Position='$pos' WHERE id_ent = '$idENT'";
															if(mysqli_query($link, $sqlupF)){
																echo '<script type="text/javascript">
																		alert("Record information on entrepreneur featured list succesfully updated");
																	 </script>';
															} else{
																echo "ERROR: Could not able to execute $sqlupF. " . mysqli_error($link);
															}
														}
														
														echo '<script type="text/javascript">
																window.location.href="ENTlist.php";
															</script>';
													} 
													
													else{
															echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
													}
												}
												
												mysqli_close($link);
											?>	
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
	
	
	<!-- Include Editor JS files. -->
    <script type="text/javascript" src="./froala_editor_2.8.0/js/froala_editor.pkgd.min.js"></script>
	
	<!-- Initialize the f-editor. -->
    <script> $(function() { $('textarea#froala-editor').froalaEditor() }); </script>



</body>

</html>