<?php
	require('paginationIT.php');

	//$sql = "SELECT * FROM li_lm_list ORDER BY id DESC";
					
	if (isset($_POST['submitf'])) {
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
	
	if (isset($_POST['search'])){
		$counter = 1;
		$search = $_POST['search'];
		$sql = "SELECT * FROM li_lm_list WHERE name LIKE '%$search%' OR negeri LIKE '%$search%' OR alamat LIKE '%$search%' OR poskod LIKE '%$search%' OR category LIKE '%$search%' ORDER BY name ASC";
	}
	//$result = mysqli_query($link, $sql);
	
	$counter = 1;
	
	//if (mysqli_num_rows($result) > 0) {
		// output data of each row
		//while($row = mysqli_fetch_assoc($result)) 
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
												<span style="color:black">'.$crow["id"].'.</span> 
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
				$counter ++;
		}
		echo 'gg';
		echo '<br>';
		echo'<div id="pagination_controls">'.$paginationCtrls.'</div>';
	/*} else {
		echo '<div class="col-xs-12 col-md-9 col-lg-9 col-custom-right right row-2 search-result-container col-md-push-3 col-lg-push-3">
				<p style="font-weight: bold;">Tiada rekod</p>
			  </div>';
	}*/
	mysqli_close($link);
?>