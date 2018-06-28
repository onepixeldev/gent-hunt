<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GENT-HUNT</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
	
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Google	Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600" rel="stylesheet" type="text/css">
    
	<style>
	* {
		box-sizing: border-box;
	}
		.hv:hover {
			background-color: #080808;
		}
	</style>
	
<style></style><style></style><style></style><style></style><style></style><style></style><style></style><style></style></head>

<body style="">

    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img class="logo-custom" src="assets/img/logo_gh.png" alt="" height="60" width="65">
                </a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hv"><a href="index.php">UTAMA</a>
                    </li>
                    <li class="hv"><a href="d-list.php">DIREKTORI LATIHAN INDUSTRI & MENGAJAR</a>
                    </li>
                    <li class="hv"><a href="ent-list.php">IDOLA KEUSAHAWANAN</a>
                    </li>
					<li class="hv"><a href="UPsearch.php">UPSIPRENEUR</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--NAVBAR SECTION END-->
   
    <!--HOME SECTION END-->

    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">DIREKTORI LATIHAN INDUSTRI & LATIHAN MENGAJAR</h1>
            </div>

        </div>
        <!--/.HEADER LINE END-->
		
        <div style="box-sizing: border-box; width: 20%; float: left;">
	
				<p><font color="#428bca">Carian</font></p>
				<div style=" overflow: hidden; white-space: nowrap;">
					<form action="d-listS.php" method="POST">
						<input class="form-control" type="text" placeholder="Cari.." name="search">
						<br>
						<button type="submit" class="btn btn-info" style="margin: auto;"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<form action="d-listF.php" method="POST">
					<hr style="height:2px;border:none;background-color:#e0e0d1;" />
					<p><font color="#428bca">Filter</font></p>
					<p>Lokasi</p>
					<input type="text" class="form-control" placeholder="Lokasi" name="locf">
					<p style="font-style: semi-bold;">Kategori</p>
					<select class="form-control" name="catf">
					  <option value="" selected>Pilih kategori</option>
					  <option value="Latihan Industri">Latihan Industri</option>
					  <option value="Latihan Mengajar">Latihan Mengajar</option>
					</select>
					<br>
					
					<button type="submit" class="btn btn-info" style="margin: auto;" name="submitf"><i class="fa fa-filter"></i></button>
				</form>
        </div>
		<div style="box-sizing: border-box; width: 80%; float: left;">
				<?php
					require('paginationF.php');
					
				if (mysqli_num_rows($nquery) > 0) {	
					
					while($crow = mysqli_fetch_array($nquery)) {
					echo
						'<div class="col-lg-11">
								<div class="jobs-list-item _old">
									<div class="panel panel-default">
										<div class="panel-body">
											<div class="col-xs-12 col-sm-3 col-md-2 col-lg-05 job-img hidden-xs ng-scope">
													<span class="thumbnail no-bottom-margin" style="width: 110px;">
														<i class="fa fa-briefcase fa-4x icon-round-border"></i>
														<!--/<img  src="assets/img/edge_logo.png" alt="">-->
													</span>
											</div>

											<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lg-75 job-listing-info">
													<h3 class="position" style="color: #5BC0DE;">
														'.$crow["name"].'
														
													</h3>
												<div class="job-details">
													<hr>
													<div class="address">
														<span>
															<i class="fa fa-map-marker"></i> '.$crow["alamat"].', '.$crow["poskod"].'
														</span>
													</div>
													<br>
													<span>
														<i class="fa fa-globe"></i> '.$crow["negeri"].' 
													</span>
													<hr>
													<i class="fa fa-tag"></i> '.$crow["category"].'
												</div>
											</div>

											<div style="float: right;">
												<div class="col-apply">
													<form action="details.php" method="post"> 
														<input type="hidden" name="idIT" value="'.$crow["id"].'">
														<button type="submit" name="more" class="btn btn-info" style="background-color: #31B0D5; width:auto;">Maklumat Lanjut</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>';
					}
				}
				else {
					echo '<br>
					<center><strong>Tiada Rekod</strong></center>';
				}
					
				?>
				
		</div>
		<center><div id="pagination_controls"><?php echo $paginationCtrls; ?></div></center>
		<br>
    </div>
    <!-- FEATURES SECTION END-->
    
    <!-- FACULTY SECTION END-->
    
    <!-- COURSES SECTION END-->
    
    <!-- CONTACT SECTION END-->
    <div id="footer ">

    </div>
    
    
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js "></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js "></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js "></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js "></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js "></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js "></script>


</body>
</html>