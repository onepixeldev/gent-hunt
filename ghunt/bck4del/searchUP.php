<?php
	require('config.php');
	
		if (isset($_POST['UPsearch'])){
			$no_mat = $_POST['no_mat'];
			$sql = "SELECT * FROM upsipreneur where no_matrik LIKE '%$no_mat%'";
			$result = mysqli_query($link, $sql);
		
			$counter = 1;
		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo
					'<div class="col-lg-11">
							<div class="jobs-list-item _old">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-05 job-img hidden-xs ng-scope">
												<span class="thumbnail no-bottom-margin" style="width: 110px;">
													<i class="fa fa-user fa-4x icon-round-border"></i>
													<!--/<img  src="assets/img/edge_logo.png" alt="">-->
												</span>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lg-75 job-listing-info">
												<h3 class="position" style="color: #5BC0DE;">
													<span style="color:black">'.$counter.'.</span> 
													'.$row["nama"].'
												</h3>
												
											<div class="job-details">
												<hr>
												<span>
													<p><strong>No. ID:</strong> '.$row["id"].'</p>
												</span>
												<span>
													<p><strong>No. matrik:</strong> '.$row["no_matrik"].'</p>
												</span>
												<span>
													<p><strong>Semester:</strong> '.$row["semester"].'</p>
												</span>
												<span>
													<p><strong>No. MyKad:</strong> '.$row["no_mykad"].'</p>
												</span>
												<span>
													<p><strong>No. telefon:</strong> '.$row["no_telefon"].'</p>
												</span>
												<span>
													<p><strong>Bumiputera/bukan:</strong> '.$row["bp_bukan"].'</p>
												</span>
												<span>
													<p><strong>Jantina:</strong> '.$row["jantina"].'</p>
												</span>
												<span>
													<p><strong>Bidang pengajian:</strong> '.$row["bidang_p"].'</p>
												</span>
												<span>
													<p><strong>Semester:</strong> '.$row["semester"].'</p>
												</span>
												<hr>
												<i class="fa fa-tag"></i>
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
			echo '<center><p style="font-weight: bold;">Tiada rekod</p></center>';
		}
		mysqli_close($link);
		}
?>