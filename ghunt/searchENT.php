<?php
	$sql = "SELECT entlist.id_ent, entlist.name_ent, entlist.location, image_ent.pic, business.BusinessName, 
			business.Position
			FROM entlist
			LEFT JOIN image_ent ON entlist.id_ent=image_ent.id_ent
			LEFT JOIN business ON entlist.id_ent=business.id_ent";
					
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
												<img src="data:image/jpeg;base64,'.base64_encode( $row['pic'] ).'" class="img-rounded">
											</span>
									</div>

									<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lg-75 job-listing-info">
										<form id="clickName" action="details.php" method="post"> 
											<h3 class="position">
												'.$counter.'.
												<input type="hidden" name="idCN" value="'.$row["id_ent"].'">
												<a href="#" onclick="document.getElementById(\'clickName\').submit()" name="subName" class="job-title ng-binding">'.$row["name_ent"].'</a>
											</h3>
										</form>
										<div class="job-details">
											<hr style="height:1px; background-color: #31B0D5;">
											<div class="address">
												<span>
													<i class="fa fa-map-marker"></i> '.$row["location"].'
												</span>
											</div>
											<span>
												<i class="fa fa-building"></i> '.$row["BusinessName"].' 
											</span>
											<hr style="height:0px; background-color: #31B0D5;">
											<i class="fa fa-tag"></i> '.$row["Position"].'
										</div>
									</div>

									<div style="float: right;">
										<div class="col-apply">
											<form action="details.php" method="post"> 
												<input type="hidden" name="idIT" value="'.$row["id_ent"].'">
												<button type="submit" name="more" class="btn btn-info" style="background-color: #31B0D5; width:auto;">Maklumat Lanjut</button>
											</form>
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