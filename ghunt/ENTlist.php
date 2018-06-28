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
		}
	</style>
</head>
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
					<li class="treeview">
                        <a href="#">
                            <i class="fa fa-id-card-o"></i><span>UPSIPRENEUR</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="">
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
					Entrepreneur idol directory
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
										<li class=""><a href="FTlist.php" onclick="window.location.href = 'FTENTlist.php';" data-toggle="tab" aria-expanded="false">Featured</a>
										</li>
									</ul>
									<div class="tab-content">
										
										<div class="tab-pane active" id="tab_1">
											<div class="box-body">
											
													<div id="div_tab1" class="col-md-12">
													
										<div>
											<form action="ENTSlist.php" method="POST" style="float: right;">
												<input placeholder="Search directory" name="search" style="float:left">
												<button type="submit" name="searchdir" class="btn btn-info searchBtn button2" style="float: right; width: 16%"><i class="fa fa-search"></i></button>
											</form>
										</div>
													
											<table class="table table-bordered table-hover" style="float: left; box-sizing: border-box; width: 60%; clear:left">
												<tbody>
													<tr>
														<th class="text-center" style="width: 10%">Record information</th>
														<th class="text-center" style="width: 4%">Selection</th>
													</tr>
												</tbody>
												<tbody id="table" >
													
													<?php
													require('paginationENT.php');
													
													// add to featured list
													if (isset($_POST['submitfeat'])){
														
														$sql = "SELECT * FROM featured_ent";
														
														$resultft = mysqli_query($link, $sql);
														
														// featured list limit
														if (mysqli_num_rows($resultft) >= 3) {
														
															echo '<script>
																alert("Featured list already reaching limit.");
																window.location.href="FTENTlist.php";
																</script>';
														}
														
														// if less than 3 record
														elseif (mysqli_num_rows($resultft) < 3) {
															
															$idf = $_POST['idf'];
															
															$sqlcomp = "SELECT * FROM featured_ent WHERE id_ent = '$idf'";
															$resultcomp = mysqli_query($link, $sqlcomp);
																
																// if record already exist on featured
																if (mysqli_num_rows($resultcomp) == 1){
																	echo '<script type="text/javascript">
																				alert("This record already exist on featured list.\\nPlease select another record.");
																				window.location.href="ENTlist.php";
																		 </script>';
																}
																else{
																	
																	$sqltab = "SELECT * FROM entlist WHERE id_ent = '$idf'";
																	$resulttab = mysqli_query($link, $sqltab);
																	$reslist = mysqli_fetch_assoc($resulttab);
																	
																	$sql1 = "INSERT INTO featured_ent (id_ent, name_ent, location, businessName, Position, 	pic)
																	VALUES ( '".$reslist['id_ent']."', '".$reslist['name_ent']."', '".$reslist['location']."', '".$reslist['businessName']."', '".$reslist['Position']."', '".$reslist['pic']."')";
																	$resultfeat = mysqli_query($link, $sql1);
																	if($resultfeat){
																		echo '<script type="text/javascript">
																				alert("Added to featured list.");
																				window.location.href="FTENTlist.php";
																			 </script>';
																	} else{
																		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
																	}
																}
														}
													}
													
													// main table
													while($crow = mysqli_fetch_array($nquery)) {
														echo										
															'<tr>
																<td class="text-left">
																
																<div class="col-xs-12 col-sm-3 col-md-2 col-lg-05 job-img hidden-xs ng-scope" style=" padding-right: 115px;">
																		
																			<img src="'.$crow["pic"].'" alt="Profile Image" width="98" height="98" style="float: left; border:3px solid grey; margin-right: 10px">
																		
																</div>
																
																<div style="">
																	<p class="job-details"><strong>Name:</strong>&nbsp;'.$crow["name_ent"].'</strong></p><br>
																</div>
																
																<td class="text-center">
																
																<div>
																	<form action="ENTlist.php" method="post" onsubmit="return confirm(\'Featured this to homepage on Entrepreneur Idol section?\');" style="margin-bottom:0px"> 
																		<input type="hidden" name="idf" value="'.$crow["id_ent"].'">
																		<button type="submit" name="submitfeat" class="btn btn-warning btn-lg" style="background-color: #4CAF50; width: 42%; height: 30px; font-size: 10px; padding: 0px 0px 0px 0px;">Featured this</button>
																	</form>
																	
																	<form action="entMoreInfoAdmin.php" method="POST" style="margin-bottom:0px">
																		<input type="hidden" name="id" value="'.$crow["id_ent"].'">
																		<button type="submit" name="submitMD" style="background-color: #179BD7; width: 42%; height: 30px; font-size: 10px; padding: 0px 0px 0px 0px;" class="btn btn-warning btn-lg">More Details</button>
																	</form>
																	
																	<form action="removeITrecord.php" method="post" onsubmit="return confirm(\'Delete this record?\');" style="margin-bottom:0px"> 
																		<input type="hidden" name="idENT" value="'.$crow["id_ent"].'">
																		<button type="submit" name="delENT" class="btn btn-warning btn-lg" style="background-color: #f44336; width: 42%; height: 30px; font-size: 10px; padding: 0px 0px 0px 0px;">Remove</button>
																	</form>
																</div>
																
															 </tr>';
													}
														
													mysqli_close($link);
													?>			
												</tbody>
											</table>
													</div>
											</div>
											<br>
											<center><div><?php echo $paginationCtrls; ?></div></center>
											<br>
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

</body>

</html>