<?php
include("auth.php");
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>gHunt | Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
		/* Full-width input fields */
		input[type=text], input[type=password], input[type=email], select[name=category], input[type=number], input[type=date] {
			width: 70%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		
		select[name=category] {
			width: 16%;
		}
		
		/* Set a style for all buttons */
		button {
			background-color: #179BD7;
			color: white;
			padding: 14px 20px;
			margin: 8px 0px;
			border: none;
			cursor: pointer;
			width: 10%;
		}
		
		button[type=up]{
			margin: 8px 340px;
		}
		
		button[type=button]{
			margin: 8px -300px;
			background-color: #e50431;
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
					Update selected UPSIPRENEUR record
				</h1> 
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
							<div class="col-md-12">
								<div class="box box-info">
									<div class="box-header with-border">
											<h3 class="box-title">Update</h3>
											
									</div>
										<div class="box-body">
											<?PHP
											require ('config.php');
											
											if (isset($_POST['ideditUP'])){
												$id = $_POST['ideditUP'];
												
												$sql = "SELECT * FROM upsipreneur WHERE id = '$id'";
													
												$result = mysqli_query($link, $sql);
												$up = mysqli_fetch_assoc($result);
												
												if (mysqli_num_rows($result) > 0) {
													echo '<form action="" method="POST">
															<div class="container">	
															  <label><b>ID</b></label>
															  <br>
															  <input type="text" placeholder="Update ID" name="idUP" value="'.$up["id"].'">
															  <br>

															  <label><b>Name</b></label>
															  <br>
															  <input type="text" placeholder="Update name" name="nameUP" value="'.$up["nama"].'">
															  <br>
															  
															  <label><b>Matric no.</b></label>
															  <br>
															  <input type="text" placeholder="Update matric no." name="matUP" value="'.$up["no_matrik"].'">
															  <br>
															  
															  <label><b>Semester</b></label>
															  <br>
															  <input type="number" placeholder="Update semester" name="semUP" value="'.$up["semester"].'">
															  <br>
															  
															  <label><b>MyKad no.</b></label>
															  <br>
															  <input type="text" placeholder="Update MyKad no." name="kadUP" value="'.$up["no_mykad"].'">
															  <br>
															  
															  <label><b>Phone no.</b></label>
															  <br>
															  <input type="text" placeholder="Update phone no." name="fonUP" value="'.$up["no_telefon"].'">
															  <br>
															  
															  <label><b>Bumiutera/not</b></label>
															  <br>
															  <input type="text" placeholder="Update bumiutera/not" name="bmUP" value="'.$up["bp_bukan"].'">
															  <br>
															  
															  <label><b>Gender</b></label>
															  <br>
															  <input type="text" placeholder="Update gender" name="genUP" value="'.$up["jantina"].'">
															  <br>
															  
															  <label><b>Field of study</b></label>
															  <br>
															  <input type="text" placeholder="Update field of study" name="fosUP" value="'.$up["bidang_p"].'">
															  <br>
															  
															  <label><b>Business name</b></label>
															  <br>
															  <input type="text" placeholder="Update business name" name="bsnUP" value="'.$up["nama_p"].'">
															  <br>
															  
															  <label><b>Main product</b></label>
															  <br>
															  <input type="text" placeholder="Update main product" name="mpUP" value="'.$up["produk_utama"].'">
															  <br>
															  
															  <label><b>IPT SSM no.</b></label>
															  <br>
															  <input type="text" placeholder="Update IPT SSM no." name="isnUP" value="'.$up["no_ssm_ipt"].'">
															  <br>
															  
															  <label><b>Owned business</b></label>
															  <br>
															  <input type="text" placeholder="Update owned business" name="obUP" value="'.$up["milikan_p"].'">
															  <br>
															  
															  <label><b>Business type</b></label>
															  <br>
															  <input type="text" placeholder="Update business type" name="btUP" value="'.$up["jenis_p"].'">
															  <br>
															  
															  <label><b>Fund source</b></label>
															  <br>
															  <input type="text" placeholder="Update fund source" name="fsUP" value="'.$up["punca_m"].'">
															  <br>
															  
															  <label><b>Business location</b></label>
															  <br>
															  <input type="text" placeholder="Update business location" name="blUP" value="'.$up["lokasi_p"].'">
															  <br>
															  
															  <label><b>Business start date</b></label>
															  <br>
															  <input type="date" placeholder="Update business start date" name="bsdUP" value="'.$up["tarikh_mp"].'">
															  <br>
															  
															  <label><b>Email</b></label>
															  <br>
															  <input type="email" placeholder="Update email" name="emUP" value="'.$up["emel"].'">
															  <br>
															  
															  <button type="up" name="submitADUP">Update</button>
															  <button type="button" onclick="window.location.href=\'UPlist.php\';">Cancel</button>
															
															</div>	
														</form>';
												}
											}
											
											mysqli_close($link);
											?>	
											
													
											<?PHP
											require ('config.php');

												if (isset($_POST['submitADUP'])){
													$idUP = $_POST['idUP'];
													$nameUP = $_POST['nameUP'];
													$matUP = $_POST['matUP'];
													$semUP = $_POST['semUP'];
													$kadUP = $_POST['kadUP'];
													$fonUP = $_POST['fonUP'];
													$bmUP = $_POST['bmUP'];
													$genUP = $_POST['genUP'];
													$fosUP = $_POST['fosUP'];
													$bsnUP = $_POST['bsnUP'];
													$mpUP = $_POST['mpUP'];
													$isnUP = $_POST['isnUP'];
													$obUP = $_POST['obUP'];
													$btUP = $_POST['btUP'];
													$fsUP = $_POST['fsUP'];
													$blUP = $_POST['blUP'];
													$bsdUP = $_POST['bsdUP'];
													$emUP = $_POST['emUP'];
													
													$sql = "UPDATE upsipreneur SET
															id='$idUP', nama='$nameUP', no_matrik='$matUP', semester='$semUP', no_mykad='$kadUP', no_telefon='$fonUP', 
															bp_bukan='$bmUP', jantina='$genUP', bidang_p='$fosUP', nama_p='$bsnUP', produk_utama='$mpUP', no_ssm_ipt='$isnUP',
															milikan_p='$obUP', jenis_p='$btUP', punca_m='$fsUP', lokasi_p='$blUP', tarikh_mp='$bsdUP', emel='$emUP' 
															WHERE id = '$idUP'";
															
													if(mysqli_query($link, $sql)){
														
														echo '<script type="text/javascript">
																	alert("UPSIPRENEUR record sucessfully updated");
															 </script>';
														echo '<script type="text/javascript">
																window.location.href="UPlist.php";
															</script>';
													} 
													else{
														echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
													}
												}
												
												mysqli_close($link);
											?>
																	
										</div>
										<div class="overlay" id="overlay" style="display: none;">
											<i class="fa fa-spinner fa-spin"></i>
										</div>
									</div>
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