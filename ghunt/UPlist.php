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
                        <ul class="treeview-menu" style="display: none;">
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
					Industrial and Teaching training directory
				</h1> 
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
							<div class="col-md-12" style="float: left">
                        <!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#" data-toggle="tab" aria-expanded="true">Directory</a>
										</li>
										<li class=""><a href="FTlist.php" onclick="window.location.href = 'FTlist.php';" data-toggle="tab" aria-expanded="false">Featured</a>
										</li>
									</ul>
									<div class="tab-content">
										
										<div class="tab-pane active" id="tab_1">
											<div class="box-body">
											
													<div id="div_tab1" class="col-md-12">
													
										<div>
											<form action="ITlist.php" method="POST" style="float: right;">
												<input placeholder="Search directory" name="searchdir" style="float:left">
												<button type="submit" name="search" class="btn btn-info searchBtn button2" style="float: right; width: 16%"><i class="fa fa-search"></i></button>
											</form>
											
											<div style="float: left; width: 16%">
											<p><font color="#428bca">Sort directory list</font></p>
											<form action="" method="post" >
												<select type="text" name="sortC" onchange="submit()" >
												  <option value="" selected>Select sort option</option>
												  <option value="alpA" onchange="submit()" >alphabetically</option>
												  <option value="latestR">by latest added record</option>
												</select>
											</form>
											<form action="" method="POST">
												<p><font color="#428bca">Filter</font></p>
												<p>Location</p>
												<input type="text" placeholder="Location" name="locf">
												<p style="font-style: semi-bold;">Category</p>
												<select name="catf">
												  <option value="" selected>Choose category</option>
												  <option value="Latihan Industri">Latihan Industri</option>
												  <option value="Latihan Mengajar">Latihan Mengajar</option>
												</select>
												<br>
												<button type="submit" class="btn btn-info button2" style="float:left; width: auto" name="submitf">Filter</button>
											</form>
											<br>
											<br>
											</div>
										</div>
													
											<table class="table table-bordered table-hover" style="float: left; box-sizing: border-box;">
												<tbody>
													<tr>
														<th style="width: 10px" class="text-center">No</th>
														<th class="text-center" style="width: 70%">Record information</th>
														<th class="text-center">Selection</th>
													</tr>
												</tbody>
												<tbody id="table" >
													
													<?php
													require('config.php');	
													
													// display directory list
													$sql = "SELECT * FROM li_lm_list ORDER BY id DESC";
													
													// search query
													if (isset($_POST['search'])){
														$search = $_POST['searchdir'];
														$sql = "SELECT * FROM li_lm_list WHERE name LIKE '%$search%' OR negeri LIKE '%$search%' OR alamat LIKE '%$search%' OR poskod LIKE '%$search%' OR category LIKE '%$search%' ORDER BY id DESC";
													}
													
													// sort query
													elseif (isset($_POST['sortC'])){
														$sortC = $_POST['sortC'];
														if ($sortC == "alpA"){
															$sql = "SELECT * FROM li_lm_list ORDER BY name ASC";
														}
														elseif ($sortC == "latestR"){
															$sql = "SELECT * FROM li_lm_list ORDER BY id DESC";
														}
													}
													
													// filter query
													elseif (isset($_POST['submitf'])) {
														// Capture that in a variable by that name
														$location = $_POST['locf'];
														$catf = $_POST['catf'];
														// filter condition
														if (!empty($catf) && empty($location)) {
															$sql = "SELECT * FROM li_lm_list WHERE category LIKE '%$catf%' ORDER BY name ASC";
														}
														if (empty($catf) && !empty($location)) {
															$sql = "SELECT * FROM li_lm_list WHERE poskod LIKE '%$location%' OR alamat LIKE '%$location%' OR negeri LIKE '%$location%' ORDER BY name ASC";
														}
														if (!empty($catf) && !empty($location)) {
															$sql = "SELECT * FROM li_lm_list WHERE category LIKE '%$catf%' AND (poskod LIKE '%$location%' OR alamat LIKE '%$location%' OR negeri LIKE '%$location%') ORDER BY name ASC";
														}
													}
													
													// add to featured list
													elseif (isset($_POST['submitfeat'])){
														
														$sql = "SELECT * FROM featured_it";
														
														$resultft = mysqli_query($link, $sql);
														
														// featured list limit
														if (mysqli_num_rows($resultft) >= 3) {
														
															echo '<script>
																alert("Featured list already reaching limit.");
																window.location.href="Itlist.php";
																</script>';
														} 
														elseif (mysqli_num_rows($resultft) < 3) {
															
															$idf = $_POST['idf'];
															$namef = $_POST['namef'];
															$addressf = $_POST['addressf'];
															$postcodef = $_POST['postcodef'];
															$statef = $_POST['statef'];
															$phonef = $_POST['phonef'];
															$emailf = $_POST['emailf'];
															$websitef = $_POST['websitef'];
															$categoryf = $_POST['categoryf'];
															
															$sqlcomp = "SELECT * FROM featured_it WHERE itID = '$idf'";
															$resultcomp = mysqli_query($link, $sqlcomp);
																
																// if record already exist on featured
																if (mysqli_num_rows($resultcomp) == 1){
																	echo '<script type="text/javascript">
																				alert("This record already exist on featured list.\\nPlease select another record.");
																				window.location.href="ITlist.php";
																		 </script>';
																}
																else{
																	$sql1 = "INSERT INTO featured_it (itID, name, alamat, poskod, negeri, phone, email, website, category)
																	VALUES ('$idf', '$namef', '$addressf', '$postcodef', '$statef', '$phonef', '$emailf', '$websitef', '$categoryf')";
																	$resultfeat = mysqli_query($link, $sql1);
																	if($resultfeat){
																		echo '<script type="text/javascript">
																				alert("Added to featured list.");
																				window.location.href="ITlist.php";
																			 </script>';
																	} else{
																		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
																	}
																}
														}
													}
													
													// main table
													$result = mysqli_query($link, $sql);
													$counter = 1;
													if (mysqli_num_rows($result) > 0) {
														// output data of each row
														while($row = mysqli_fetch_assoc($result)) {
															echo '<tr>
																	<td class="text-center" ><strong>'.$counter.'</strong></td>
																	<td class="text-left">
																	<p><strong>Name:</strong> '.$row["name"].'</p><br>
																	<p><strong>Address:</strong> '.$row["alamat"].'</p><br>
																	<p><strong>Postcode:</strong> '.$row["poskod"].'</p><br>
																	<p><strong>State:</strong> '.$row["negeri"].'</p><br>
																	<p><strong>Phone number:</strong> '.$row["phone"].'</p><br>
																	<p><strong>Email:</strong> '.$row["email"].'</p><br>
																	<p><strong>Website:</strong> '.$row["website"].'</p><br>
																	<p><strong>Category:</strong> '.$row["category"].'</p></td>
																	<td class="text-center" >
																	<form action="ITlist.php" method="post" onsubmit="return confirm(\'Featured this to homepage?\');"> 
																		<input type="hidden" name="idf" value="'.$row["id"].'">
																		<input type="hidden" name="namef" value="'.$row["name"].'">
																		<input type="hidden" name="addressf" value="'.$row["alamat"].'">
																		<input type="hidden" name="postcodef" value="'.$row["poskod"].'">
																		<input type="hidden" name="statef" value="'.$row["negeri"].'">
																		<input type="hidden" name="phonef" value="'.$row["phone"].'">
																		<input type="hidden" name="emailf" value="'.$row["email"].'">
																		<input type="hidden" name="websitef" value="'.$row["website"].'">
																		<input type="hidden" name="categoryf" value="'.$row["category"].'">
																		<button type="submit" name="submitfeat" class="btn btn-warning btn-lg" style="background-color: #4CAF50; width:auto;">Featured this</button>
																	</form>
																	
																	<form action="updateIT.php" method="POST">
																		<input type="hidden" name="id" value="'.$row["id"].'">
																		<input type="hidden" name="name" value="'.$row["name"].'">
																		<input type="hidden" name="address" value="'.$row["alamat"].'">
																		<input type="hidden" name="postcode" value="'.$row["poskod"].'">
																		<input type="hidden" name="state" value="'.$row["negeri"].'">
																		<input type="hidden" name="phone" value="'.$row["phone"].'">
																		<input type="hidden" name="email" value="'.$row["email"].'">
																		<input type="hidden" name="website" value="'.$row["website"].'">
																		<input type="hidden" name="category" value="'.$row["category"].'">
																		<button type="submit" name="submitUp" style="background-color: #179BD7; width:auto;" class="btn btn-warning btn-lg">Update</button>
																	</form>
																	
																	<form action="removeITrecord.php" method="post" onsubmit="return confirm(\'Delete this record?\');"> 
																		<input type="hidden" name="idIT" value="'.$row["id"].'">
																		<button type="submit" class="btn btn-warning btn-lg" style="background-color: #f44336; width:auto;">Remove</button>
																	</form>
																 </tr>';
																 $counter++;
														}
													} else {
														echo "No record";
													}
													mysqli_close($link);
													?>			
												</tbody>
											</table>
													</div>
											</div>
										</div>
										<!-- /.tab-pane -->

										<div class="tab-pane" id="tab_2">
											<div class="box-body">
												<h1 style="color: #f44336; margin-left:130px;">Kehadiran Keluar</h1>
											
												<div id="div_tab2" class="col-md-12">
													<table class="table table-bordered table-hover">
													<tbody>
														<tr>
															<th style="width: 10px" class="text-center">No</th>
															<th class="text-center">Featured information</th>
															<th class="text-center">Remove from featured list</th>
														</tr>
													</tbody>
													<tbody id="table">
														
															<?php
															require('config.php');	

															$sql = "SELECT * FROM featured_it ORDER BY featID DESC";
															
															$result = mysqli_query($link, $sql);
															$counter = 1;
															if (mysqli_num_rows($result) > 0) {
																// output data of each row
																while($row = mysqli_fetch_assoc($result)) {
																	echo '<tr>
																			<td class="text-center" ><strong>'.$counter.'</strong></td>
																			<td class="text-left">
																			<p><strong>Name:</strong> '.$row["name"].'</p><br>
																			<p><strong>Address:</strong> '.$row["alamat"].'</p><br>
																			<p><strong>Postcode:</strong> '.$row["poskod"].'</p><br>
																			<p><strong>State:</strong> '.$row["negeri"].'</p><br>
																			<p><strong>Phone number:</strong> '.$row["phone"].'</p><br>
																			<p><strong>Email:</strong> '.$row["email"].'</p><br>
																			<p><strong>Website:</strong> '.$row["website"].'</p><br>
																			<p><strong>Category:</strong> '.$row["category"].'</p></td>
																			<td class="text-center" >
																				<form action="removeITrecord.php" method="post" onsubmit="return confirm(\'Delete this record?\');"> 
																					<input type="hidden" name="idIT" value="'.$row["itID"].'">
																					<button type="submit" class="btn btn-warning btn-lg" style="background-color: #f44336; width:auto;">Remove</button>
																				</form>
																			</td>
																		 </tr>';
																		 $counter++;
																}
															} else {
																echo "No record";
															}
															mysqli_close($link);
															?>			
														</tbody>
													</table>
												</div>
											</div>
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