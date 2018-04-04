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
                    <li class="hv"><a href="d-list.php">DIREKTORI LATIHAN INDUSTRI & MENGAJAR</a>
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
				
				<?php
					include('config.php');				
					$id = $_POST['idIT'];
					$sql = "SELECT * FROM li_lm_list WHERE id = '$id'";
					$result = mysqli_query($link, $sql);
					
					$counter = 1;
					
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo
								'<div class="col-xs-12 col-md-9 col-lg-9  col-custom-right right row-2 search-result-container col-md-push-3 col-lg-push-3">
										<div class="jobs-list-item _old">
											<div class="panel panel-default">
												<div class="panel-body">
													<div class="col-xs-12 col-sm-3 col-md-2 col-lg-05 job-img hidden-xs ng-scope">
														<a href="#">
															<span class="thumbnail no-bottom-margin">
																<i class="fa fa-briefcase fa-4x icon-round-border"></i>
																<!--/<img  src="assets/img/edge_logo.png" alt="">-->
															</span>
														</a>
													</div>

													<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lg-75 job-listing-info">
														<h3 class="position">
															'.$counter.'.
															<a class="job-title ng-binding" href="#">'.$row["name"].'</a>
														</h3>
														<div class="job-details">
															<hr>
															<div class="address">
																<span>
																	<i class="fa fa-map-marker"></i> '.$row["alamat"].', '.$row["poskod"].'
																</span>
															</div>
															<br>
															<span>
																<i class="fa fa-globe"></i> '.$row["negeri"].' 
															</span>
															<hr>
															<i class="fa fa-tag"></i> '.$row["category"].'
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								';
								$counter ++;
						}
					} else {
						echo '<div class="col-xs-12 col-md-9 col-lg-9 col-custom-right right row-2 search-result-container col-md-push-3 col-lg-push-3">
								<p style="font-weight: bold;">Tiada rekod</p>
							  </div>';
					}
					mysqli_close($link);
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