<?php
include("auth.php");
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>TeacAttSys | SRITI</title>
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
		input[type=text], input[type=password], input[type=email] {
			width: 54%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
	</style>
</head>
<body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- HEADER SECTION -->
        <header class="main-header" >
            <!-- Logo -->
            <a href="" class="logo" style="background-color: #3CBCB5; color: #3CBCB5;">
                <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                <!--<img src="" width="50px"></img>-->            
            </span>
                <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">                  
<!--                <img src="template/images/jata.png" width="50px"></img>
                &nbsp;&nbsp;-->
                <img src="images/logo/sriti_png_logo.png" width="50px" height="45px">
                &nbsp;&nbsp;&nbsp;
                <!--<img src="template/images/eSmartBlue.png" width="60px" height="50px"></img>-->
            </span>

            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="background-color: #3CBCB5;"> 
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    <div style="font-size:large;font-weight:bold;color: #d8e4fd;margin-left:45px;margin-top:-20px;position:absolute;z-index:1;">
                        <font color="white"><strong>Sistem Kehadiran Guru</strong></font>
                    </div>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/logo/adminLogo.png" class="user-image" alt="">
                                <span class="hidden-xs"><?PHP echo $fn['fullname']; ?></span>
                            </a>
                           <ul class="dropdown-menu" >
                                <!-- User image -->
                                <li class="user-header" style="background-color: #3CBCB5; height: 151px;">
                                    <img src="images/logo/adminLogo.png" class="user-image" alt="">
                                    <p style="color: white;">
                                       <?PHP echo $fn['fullname']; ?>
                                    </p>
                                </li>
								<li class="user-body">
									<p>
									   Email: <strong style="color: #3c763d;"><?PHP echo $fn['email']; ?></strong>
									   <br>
									   Nombor Telefon: <strong style="color: #3c763d;"><?PHP echo $fn['phone']; ?></strong>

                                    </p>
								<li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a onclick="passLO()" style="background-color: #f44336; width:auto; font-size: 12px; font-weight: bold;" class="btn btn-warning btn-lg">Log keluar</a>
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
                    <li class="header">MENU UTAMA</li>

                    <li class="treeview">
                        <a href="" onClick="passD()">
                            <i class="fa fa-dashboard"></i>  <span>Paparan utama</span>
                        </a>
                    </li>
					<li class="treeview active">
                        <a href="takeAttend.php">
                            <i class="fa fa-dashboard"></i>  <span>Kehadiran</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>  <span>Pengurusan</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="">
                                <a href="" onClick="passWord()">
                                    <i class="fa fa-long-arrow-right"></i>Senarai Guru</a>
                            </li>
                            <li class="">
                                <a href="" onClick="passAU()">
                                    <i class="fa fa-long-arrow-right"></i>Tambah Guru</a>
                            </li>

                        </ul>
                    </li>
					<li class="treeview">
                        <a href="" onClick="passR()">
                            <i class="fa fa-dashboard"></i>  <span>Laporan Kehadiran</span>
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
                <strong style=" color: #; font-size: 30px">
					KEHADIRAN GURU          
				</strong>
				<br>
				<strong id="date1"></strong>
				<br>
				<strong id="time1"></strong>
				
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
							<div class="col-md-12">
                        <!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class=""><a href="view#tab_1" onclick="homedashboard()" data-toggle="tab" aria-expanded="true">MASUK</a>
										</li>
										<li class="active"><a href="view#tab_2" onclick="info()" data-toggle="tab" aria-expanded="false">KELUAR</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane" id="tab_1">
											<div class="box-body">
												<h1 style="color: #4CAF50; margin-left:130px;">Kehadiran Masuk</h1>
													<div id="div_tab1" class="col-md-12">
														<form action="clock-in.php" method="POST">
															<input name="username" type="text" id="txtUser" maxlength="12" class="form-control input-lg" placeholder="ID guru" style="top: 150px; margin-left:50px;font-size:30px;line-height:22px;width:400px;text-align:center;" required>
															<span style="margin-bottom:10px;">&nbsp;</span><br>
															<input name="password" type="password" id="txtPassword" maxlength="12" class="form-control input-lg" placeholder="Kata laluan" style="margin-left:50px;font-size:30px;line-height:22px;width:400px;text-align:center;" required>
															<span style="margin-left:375px; margin-bottom:10px;">&nbsp;</span>
															<button id="btnClock" class="btn btn-warning btn-lg" style="width:150px; margin-left: -200px; margin-top: -80px; background-color: #4CAF50;">MASUK</button>
														</form>	
													</div>
											</div>
										</div>
										<!-- /.tab-pane -->

										<div class="tab-pane active" id="tab_2">
											<div class="box-body">
												<h1 style="color: #f44336; margin-left:130px;">Kehadiran Keluar</h1>
											
													<div id="div_tab2" class="col-md-12">
														<form action="clock-out.php" method="POST">
															<input name="username" type="text" id="txtUser" maxlength="12" class="form-control input-lg" placeholder="ID guru" style="top: 150px; margin-left:50px;font-size:30px;line-height:22px;width:400px;text-align:center;" required>
															<span style="margin-bottom:10px;">&nbsp;</span><br>
															<input name="password" type="password" id="txtPassword" maxlength="12" class="form-control input-lg" placeholder="Kata laluan" style="margin-left:50px;font-size:30px;line-height:22px;width:400px;text-align:center;" required>
															<span style="margin-left:375px; margin-bottom:10px;">&nbsp;</span>
															<button id="btnClock" class="btn btn-warning btn-lg" style="width:150px; margin-left: -200px; margin-top: -80px; background-color: #f44336;">KELUAR</button>
														</form>	
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
	
	<!-- Date -->
	<script>
		var months = ["Januari", "Februari", "Mac", "April", "Mei", "Jun", "Julai", "Ogos", "September", "Oktober", "November", "Disember"];
		var n = new Date();
		var y = n.getFullYear();
		var m = n.getMonth();
		var d = n.getDate();
		document.getElementById("date1").innerHTML = d + " " + months[m] + " " + y;
	</script>
	
	<script>
		var dt = new Date();
		document.getElementById("time1").innerHTML = dt.toLocaleTimeString();
	</script>
	
	<SCRIPT>
	//dashboard auth
		function passD() {
		var pass1 = prompt('Sila masukkan kata laluan');
			
			if (pass1 !== "<?PHP echo $fn['password'];?>")
			{
				alert('Sila masukkan kata laluan yang betul');
				
			}
			if (pass1 == "<?PHP echo $fn['password'];?>")
			{
				window.open('dashboard.php');
			}
		} 
	</SCRIPT>
	
	<SCRIPT>
	//teacher list auth
		function passWord() {
		var pass1 = prompt('Sila masukkan kata laluan');
			
			if (pass1 !== "<?PHP echo $fn['password'];?>")
			{
				alert('Sila masukkan kata laluan yang betul');
				
			}
			if (pass1 == "<?PHP echo $fn['password'];?>")
			{
				window.open('teacherList.php');
			}
		} 
	</SCRIPT>
	
	<SCRIPT>
	//add teacher auth
		function passAU() {
		var pass1 = prompt('Sila masukkan kata laluan');
			
			if (pass1 !== "<?PHP echo $fn['password'];?>")
			{
				alert('Sila masukkan kata laluan yang betul');
				
			}
			if (pass1 == "<?PHP echo $fn['password'];?>")
			{
				window.open('addUser.php');
			}
		} 
	</SCRIPT>
	
	<SCRIPT>
	//report auth
		function passR() {
			var pass1 = prompt('Sila masukkan kata laluan');
			
			if (pass1 !== "<?PHP echo $fn['password'];?>")
			{
				alert('Sila masukkan kata laluan yang betul');
				
			}
			if (pass1 == "<?PHP echo $fn['password'];?>")
			{
				window.open('report.php');
			}
		} 
	</SCRIPT>
	
	<SCRIPT>
	//logout auth
		function passLO() {
		var pass1 = prompt('Sila masukkan kata laluan');
			
			if (pass1 !== "<?PHP echo $fn['password'];?>")
			{
				alert('Sila masukkan kata laluan yang betul');
				
			}
			if (pass1 == "<?PHP echo $fn['password'];?>")
			{
				window.location.assign("logout.php")
			}
		} 
	</SCRIPT>



</body>

</html>