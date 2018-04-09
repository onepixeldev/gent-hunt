<?php
	
	require('config.php');
	
	if (isset($_POST['ftd'])) {
		$ftd = $_POST["ftd"];
		$sql = "SELECT * FROM li_lm_list WHERE id = '$ftd'";
	}
	
	if (isset($_POST['idCN'])) {
		$idCN = $_POST["idCN"];
		$sql = "SELECT * FROM li_lm_list WHERE id = '$idCN'";
	}
	
	if (isset($_POST['more'])) {
		$idIT = $_POST["idIT"];
		$sql = "SELECT * FROM li_lm_list WHERE id = '$idIT'";
	}
	
	$result = mysqli_query($link, $sql);
		
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo
						'<div class="col-lg-12">
								<div class="jobs-list-item _old">
									<div class="panel panel-default">
										<div class="panel-body">
											<div style="width: 70%; float: left">
												<span>
													<img src="images/logo/office-building-icon.png" alt="Company logo" width="128" height="128" style="float: left; border:3px solid grey">
													<p class="position" style="padding-left:3em; padding-bottom:60px; width: 40%; float: left"><strong>'.$row["name"].'</strong></p>
												</span>
											</div>
											<div style="width: 30%; float: right;"">
												<div class="job-details">
														<span>
															<i class="fa fa-map-marker" style="color: #5BC0DE;"></i>&nbsp; '.$row["alamat"].', '.$row["poskod"].'
														<br>
														<br>
														<br>
															<i class="fa fa-globe" style="color: #5BC0DE;"></i>&nbsp; '.$row["negeri"].' 
														<br>
															<i class="fa fa-tag" style="color: #5BC0DE;"></i>&nbsp; '.$row["category"].'
														</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="col-lg-12" style="width: 50%; float: left">
								<div class="jobs-list-item _old">
									<div class="panel panel-default">
										<div class="panel-body">
											<div style="float: left;"">
												<div class="job-details">
														<span>
															<p><strong>Phone Number:</strong>&nbsp; '.$row["phone"].'</p> 
															<p><strong>Email:</strong>&nbsp; '.$row["email"].'</p>
															<p><strong>Website:</strong>&nbsp; '.$row["website"].'</p>
														</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-12" style="width: 50%; float: right">
								<div class="jobs-list-item _old">
									<div class="panel panel-default">
										<div class="panel-body">
											<div style="width: 70%; float: left">
												<span>
													<img src="paris.jpg" alt="Logo" width="128" height="128" style="float: left">
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						';
				}
				} else {
					echo '<div class="col-xs-12 col-md-9 col-lg-9 col-custom-right right row-2 search-result-container col-md-push-3 col-lg-push-3">
							<p style="font-weight: bold;">Tiada rekod</p>
						  </div>';
				}
				
	mysqli_close($link);
?>