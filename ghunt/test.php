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
										<li class="active"><a href="view#tab_1" onclick="homedashboard()" data-toggle="tab" aria-expanded="true">MASUK</a>
										</li>
										<li class=""><a href="view#tab_2" onclick="info()" data-toggle="tab" aria-expanded="false">KELUAR</a>
										</li>
									</ul>
									<div class="tab-content">
										<div>
											<form action="ITlist.php" method="POST">
												<input placeholder="Search directory" name="searchdir" style="float:right">
												<button type="submit" name="search" class="btn btn-info searchBtn button2"><i class="fa fa-search"></i></button>
											</form>
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
												
												<button type="submit" class="btn btn-info button2" style="float:left; width: 4%" name="submitf"><i class="fa fa-filter"></i></button>
											</form>
										</div>
										
										<div class="tab-pane active" id="tab_1">
											<div class="box-body">
													<div id="div_tab1" class="col-md-12">
														<table class="table table-bordered table-hover">
												<tbody>
													<tr>
														<th style="width: 10px" class="text-center">No</th>
														<th class="text-center">Record information</th>
														<th class="text-center">Update record</th>
														<th class="text-center">Add to featured list</th>
														<th class="text-center">Remove record</th>
													</tr>
												</tbody>
												<tbody id="table">
													
													<?php
													require('config.php');	

													$sql = "SELECT * FROM li_lm_list ORDER BY id DESC";
													
													if (isset($_POST['search'])){
														$search = $_POST['searchdir'];
														$sql = "SELECT * FROM li_lm_list WHERE name LIKE '%$search%' OR negeri LIKE '%$search%' OR alamat LIKE '%$search%' OR poskod LIKE '%$search%' OR category LIKE '%$search%' ORDER BY name ASC";
													}
													
													elseif (isset($_POST['sortC'])){
														$sortC = $_POST['sortC'];
														if ($sortC == "alpA"){
															$sql = "SELECT * FROM li_lm_list ORDER BY name ASC";
														}
														elseif ($sortC == "latestR"){
															$sql = "SELECT * FROM li_lm_list ORDER BY id DESC";
														}
													}
													
													elseif (isset($_POST['submitf'])) {
														// Capture that in a variable by that name
														$location = $_POST['locf'];
														$catf = $_POST['catf'];
														
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
													
													//
													elseif (isset($_POST['submitfeat'])){
														
														$sql = "SELECT * FROM featured_it";
														
														$resultft = mysqli_query($link, $sql);
														
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
																		<button type="submit" style="background-color: #179BD7; width:auto;" class="btn btn-warning btn-lg">Update</button>
																	</form>
																	</td>
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
																	</td>
																	<td class="text-center" >
																		<form action="removeITrecord.php" method="post" onsubmit="return confirm(\'Delete this record?\');"> 
																			<input type="hidden" name="idIT" value="'.$row["id"].'">
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

										<div class="tab-pane" id="tab_2">
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