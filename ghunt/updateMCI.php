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
					<li class="treeview active">
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
													
													$sql = "SELECT * FROM contact_info";
													
													$result = mysqli_query($link, $sql);
													$mci = mysqli_fetch_assoc($result);
														
													echo
														'
														<form action="updateMCI.php" method="POST">
															<div class="col-lg-12">
																<br>
																	<div class="jobs-list-item _old">
																		<div class="panel panel-default">
																			<div class="panel-body">
																				<div class="job-details" style="width: 100%; float: left; text-align:left">
																					<div>
																						<span style=" display:inline-block; width: 50%;">
																								<strong>Location :</strong> 
																								<p> 
																								<textarea rows="6" cols="50" name="locUP">'.$mci['location'].'
																								</textarea></p>
																							
																								<p> <strong>Phone Number :</strong> 
																								<input type="text" name="telNO" style="width: 45%;" value="'.$mci['tel_no'].'"> </p>
																							
																								<p> <strong>Email <span style="display:inline-block; width: 63px;"></span>:</strong> 
																								<input type="text" name="emel" style="width: 45%;" value="'.$mci['email'].'"> </p>
																							
																								<p> <strong>Fax <span style="display:inline-block; width: 75px;"></span>:</strong> 
																								<input type="text" name="fax" style="width: 45%;" value="'.$mci['fax'].'"> </p>
																						</span>
																					</div>
																				</div>
																				
																			</div>
																		</div>
																	</div>
																</div>
																
															<div>
															<button type="button" class="signupbtn" style="background-color:red; width:10%" onclick="window.location.href=\'mci.php\';">Cancel</button>
															<button type="submit" class="signupbtn" name="updateMCI" style="width:20%">Update Details</button>
															</div>
														</form>
														';
												
											?>
										</div>
											<?PHP
											require ('config.php');

												if (isset($_POST['updateMCI'])){
													$locUP = $_POST['locUP'];
													$telNO = $_POST['telNO'];
													$emel = $_POST['emel'];
													$fax = $_POST['fax'];
													
													// update details
													$sql = "UPDATE contact_info SET location='$locUP', tel_no='$telNO', email='$emel', fax='$fax'";
													
													if(mysqli_query($link, $sql)){
														
														echo '<script type="text/javascript">
																	alert("Contact information sucessfully updated");
															 </script>';
														
														echo '<script type="text/javascript">
																window.location.href="mci.php";
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

	<!-- Include Editor JS files. -->
    <script type="text/javascript" src="./froala_editor_2.8.0/js/froala_editor.pkgd.min.js"></script>
	
	<!-- Initialize the f-editor. -->
    <script> $(function() { $('textarea#froala-editor').froalaEditor() }); </script>



</body>

</html>