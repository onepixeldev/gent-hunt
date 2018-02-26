<?php
include("auth.php");
?>
<html>

<style>
/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
    width: 50%;
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
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding:10px 5px 15px 20px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}



</style>
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
	
	<!-- Export PDF -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- HEADER SECTION -->
        <header class="main-header" >
            <!-- Logo -->
            <a href="dashboard.php" class="logo" style="background-color: #3CBCB5; color: #3CBCB5;">
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
                                        <a href="logout.php" style="background-color: #f44336; width:auto; font-size: 12px; font-weight: bold;" class="btn btn-warning btn-lg">Log keluar</a>
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
                        <a href="dashboard.php">
                            <i class="fa fa-dashboard"></i>  <span>Paparan utama</span>
                        </a>
                    </li>
					<li class="treeview">
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
                                <a href="teacherList.php">
                                    <i class="fa fa-long-arrow-right"></i>Senarai Guru</a>
                            </li>
                            <li class="">
                                <a href="addUser.php">
                                    <i class="fa fa-long-arrow-right"></i>Tambah Guru</a>
                            </li>

                        </ul>
                    </li>
					<li class="treeview active">
                        <a href="report.php">
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
                <h1>
            Laporan kehadiran guru            
        </h1> 
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
							<div class="col-md-12">
								<div class="box box-info">
									<div class="box-header with-border">
											<h3 class="box-title">Senarai</h3>
											
									</div>
										<div class="box-body">
										
										<form action="" method="POST">
											<label>Tarikh Mula</label>
											<br>
											<input name="startdate" type="date" id="txtUser" maxlength="12" class="form-control input-lg" placeholder="YYYY-MM-DD" style="top: 150px; margin-left:50px;font-size:30px;width:400px;text-align:center;" required>
											<br>
											
											<label>Tarikh Tamat</label>
											<br>
											<input name="enddate" type="date" id="txtPassword" maxlength="12" class="form-control input-lg" placeholder="YYYY-MM-DD" style="margin-left:50px;font-size:30px;width:400px;text-align:center;" required>
											
											<button id="btnClock" class="btn btn-warning btn-lg" style="width:150px; margin-left:600px; margin-top: -80px; background-color: #4CAF50;">HANTAR</button>
										</form>	
											<table id="exportTable" class="table table-bordered table-hover">
												<thead>
													<tr>
														<th style="width: 10px" class="text-center">No</th>
														<th class="text-center">NamaGuru</th>
														<th class="text-center">IDGuru</th>
														<th class="text-center">Tarikh</th>
														<th class="text-center">MasaMasuk</th>
														<th class="text-center">MasaKeluar</th>
														<th class="text-center">DaftarMasuk</th>
														<th class="text-center">DaftarKeluar</th>
													</tr>
												</thead>
												<tbody>
													
													<?php
													require('config.php');	

													if (isset($_POST['startdate'])){
															$counter = 1;
															//$username = $row['username'];
															
															//removes backslashes
															$startdate = stripslashes($_REQUEST['startdate']);
															//escapes special characters in a string
															$startdate = mysqli_real_escape_string($link, $startdate);
															$enddate = stripslashes($_REQUEST['enddate']);
															$enddate = mysqli_real_escape_string($link, $enddate);
													
															$sql = "SELECT teacherID, teacherName, date_in_out, timeIN, timeOUT, tickIN, tickOUT FROM clockin WHERE date_in_out >= '$startdate' AND date_in_out <= '$enddate' ORDER BY date_in_out ASC";
															$result = mysqli_query($link, $sql);

															if (mysqli_num_rows($result) > 0) {
																// output data of each row
																while($row = mysqli_fetch_assoc($result)) {
																	
																	echo '<tr>';
																	echo '<td class="text-center" >'.$counter.'</td>';
																	echo '<td class="text-center" >'.$row["teacherName"].'</td>';
																	echo '<td class="text-center" >'.$row["teacherID"].'</td>';
																	echo '<td class="text-center" >'.$row["date_in_out"].'</td>';
																	echo '<td class="text-center" >'.$row["timeIN"].'</td>';
																	echo '<td class="text-center" >'.$row["timeOUT"].'</td>';
																	echo '<td class="text-center" >'.$row["tickIN"].'</td>';
																	echo '<td class="text-center" >'.$row["tickOUT"].'</td>';
																	echo '</tr>';
																	$counter ++;
																}
															} else {
																echo "Tiada rekod";
															}
													}		
													else {}		
													mysqli_close($link);
													?>			
												</tbody>
											</table>
										</div>
										
										<button id="exportButton" class="btn btn-lg btn-danger clearfix" style=" display: block; margin: auto;"><span class="fa fa-file-pdf-o"></span> Eksport PDF</button>
										<div class="overlay" id="overlay" style="display: none;">
											<i class="fa fa-spinner fa-spin"></i>
										</div>
									</div>
							</div>
                    <!-- /.col -->
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


<!-- you need to include the shieldui css and js assets in order for the components to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        No: { type: Number },
                        NamaGuru: { type: String },
                        IDGuru: { type: Number },
						Tarikh: { type: String },
						MasaMasuk: { type: String },
						MasaKeluar: { type: String },
						DaftarMasuk: { type: String },
						DaftarKeluar: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "Laporan Kehadiran",
                    created: new Date()
                });

                pdf.addPage("a4", "landscape");

                pdf.table(
                    20,
                    20,
                    data,
                    [
                        { field: "No", title: "No", width: 30 },
                        { field: "NamaGuru", title: "Nama Guru", width: 200 },
                        { field: "IDGuru", title: "ID Guru", width: 100 },
						{ field: "Tarikh", title: "Tarikh", width: 80 },
                        { field: "MasaMasuk", title: "Masa Masuk", width: 80 },
                        { field: "MasaKeluar", title: "Masa Keluar", width: 80 },
						{ field: "DaftarMasuk", title: "Daftar Masuk", width: 80 },
                        { field: "DaftarKeluar", title: "Daftar Keluar", width: 80 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "LaporanKehadiran"
                });
            });
        });
    });
</script>

<style>
    #exportButton {
        border-radius: 0;
    }
</style>

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