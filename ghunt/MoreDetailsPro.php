<?php
	
	require('config.php');
	
	if (isset($_POST['ftd'])) {
		$ftd = $_POST["ftd"];
		$sql = "SELECT * FROM li_lm_list WHERE id = '$ftd'";
		
		
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
	}
	
	/*if (isset($_POST['idCN'])) {
		$idCN = $_POST["idCN"];
		$sql = "SELECT * FROM li_lm_list WHERE id = '$idCN'";
	}*/
	
	if (isset($_POST['more'])) {
		$idIT = $_POST["idIT"];
		$sql = "SELECT * FROM li_lm_list WHERE id = '$idIT'";
		
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
	}
	
	if (isset($_POST['idENT'])) {
		$idENT = $_POST["idENT"];
		$sql = "SELECT * FROM entlist WHERE id_ent = '$idENT'";
		
		$result = mysqli_query($link, $sql);
		
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo
						'<div class="col-lg-12">
							<div class="jobs-list-item _old">
								<div class="panel panel-default">
									<div class="panel-body">
										
										<div class="job-details" style="width: 100%; float: left; text-align:left">
											<div> 
													<img src="'.$row['pic'].'" alt="Profile image" width="194" height="194" style="float: left; border:3px solid grey; margin-right: 10px">
											</div>
											
											<div>
												<span style=" display:inline-block; width: 75%;">
														<p> <strong>Nama <span style="display:inline-block; width: 151px;"></span>:</strong> '.$row['name_ent'].' </p>
													<hr style="height:1px; background-color: #DDDDDD; margin-top: 0; margin-left: 200;">
													
														<p> <strong>Nama Perniagaan/Syarikat <span style="display:inline-block; width: 4px;"></span>:</strong> '.$row['businessName'].' </p>
													<hr style="height:1px; background-color: #DDDDDD; margin-top: 0; margin-left: 200;">
													
														<p> <strong>Pangkat <span style="display:inline-block; width: 135px;"></span>:</strong> '.$row['Position'].' </p>
													<hr style="height:1px; background-color: #DDDDDD; margin-top: 0; margin-left: 200;">
													
														<p> <strong>Profil sosial <span style="display:inline-block; width: 111px;"></span>:</strong> '.$row['on_social_pro'].' </p>
													<hr style="height:1px; background-color: #DDDDDD; margin-top: 0; margin-left: 200;">
												</span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-lg-12" style="width: 100%; float: left">
							<div class="jobs-list-item _old">
								<div class="panel panel-default">
									<div class="panel-body">
										<div style="float: left;"">
											<div class="job-details">
													<span>
													<p><strong>Career Details</strong></p>
													<div class="fr-view">
													  '.$row['career'].'
													</div>
													</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>';
				}
				} else {
					echo '<div class="col-xs-12 col-md-9 col-lg-9 col-custom-right right row-2 search-result-container col-md-push-3 col-lg-push-3">
							<p style="font-weight: bold;">Tiada rekod</p>
						  </div>';
				}
	}
				
	mysqli_close($link);
?>