<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
                <a class="navbar-brand" href="#">
                    <img class="logo-custom" src="assets/img/logo_gh.png" alt="" height="60" width="65">
                </a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hv"><a href="index-user.php">UTAMA</a>
                    </li>
                    <li class="hv"><a href="#features-sec">DIREKTORI LATIHAN INDUSTRI & MENGAJAR</a>
                    </li>
                    <li class="hv"><a href="#faculty-sec">IDOLA KEUSAHAWANAN</a>
                    </li>
                    <li>
                    </li>
                    <li class="hv"><a href="#contact-sec">MENGENAI KAMI</a>
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
		
        <div class="row">
            <div class="data-scroll-reveal="enter from the bottom after 0.4s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
				<div style="position: absolute;">
					<p><font color="#428bca">Search</font></p>
					<div style=" overflow: hidden; white-space: nowrap;">
						<form action="d-list.php" method="POST">
							<input class="form-control" type="text" placeholder="Search.." name="search">
							<br>
							<button type="submit" class="btn btn-info" style="margin: auto;"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<form action="d-list.php" method="POST">
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
				
				<?php
					require('config.php');
					require('searchP.php');
				?>
				
				
            </div>
			
			
        </div>
		
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