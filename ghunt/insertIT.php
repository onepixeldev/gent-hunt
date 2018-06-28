<?php
		require('config.php');
		
		if (isset($_POST['addIT'])) {
			$intname = mysqli_real_escape_string($link, $_REQUEST['intname']);
			$location = mysqli_real_escape_string($link, $_REQUEST['location']);
			$postcode = mysqli_real_escape_string($link, $_REQUEST['postcode']);
			$state = mysqli_real_escape_string($link, $_REQUEST['state']);
			$pnumber = mysqli_real_escape_string($link, $_REQUEST['pnumber']);
			$email = mysqli_real_escape_string($link, $_REQUEST['email']);
			$website = mysqli_real_escape_string($link, $_REQUEST['website']);
			$category = mysqli_real_escape_string($link, $_REQUEST['category']);
			 
			// attempt insert query execution
			$sql = "INSERT into `li_lm_list` (name, alamat, poskod, negeri, phone, email, website, category) 
					VALUES ('$intname', '$location', '$postcode', '$state', '$pnumber', '$email', '$website', '$category')";
			if(mysqli_query($link, $sql)){
				echo '<script type="text/javascript">
						alert("New IT record succesfully added to directory");
						window.location.href="ITlist.php";
					 </script>';	 
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}
		
		if (isset($_POST['addUP'])) {
			$idUP = mysqli_real_escape_string($link, $_REQUEST['idUP']);
			$nameUP = mysqli_real_escape_string($link, $_REQUEST['nameUP']);
			$matUP = mysqli_real_escape_string($link, $_REQUEST['matUP']);
			$semUP = mysqli_real_escape_string($link, $_REQUEST['semUP']);
			$kadUP = mysqli_real_escape_string($link, $_REQUEST['kadUP']);
			$fonUP = mysqli_real_escape_string($link, $_REQUEST['fonUP']);
			$bmUP = mysqli_real_escape_string($link, $_REQUEST['bmUP']);
			$genUP = mysqli_real_escape_string($link, $_REQUEST['genUP']);
			$fosUP = mysqli_real_escape_string($link, $_REQUEST['fosUP']);
			$bsnUP = mysqli_real_escape_string($link, $_REQUEST['bsnUP']);
			$mpUP = mysqli_real_escape_string($link, $_REQUEST['mpUP']);
			$isnUP = mysqli_real_escape_string($link, $_REQUEST['isnUP']);
			$obUP = mysqli_real_escape_string($link, $_REQUEST['obUP']);
			$btUP = mysqli_real_escape_string($link, $_REQUEST['btUP']);
			$fsUP = mysqli_real_escape_string($link, $_REQUEST['fsUP']);
			$blUP = mysqli_real_escape_string($link, $_REQUEST['blUP']);
			$bsdUP = mysqli_real_escape_string($link, $_REQUEST['bsdUP']);
			$emUP = mysqli_real_escape_string($link, $_REQUEST['emUP']);
			 
			// attempt insert query execution
			$sql = "INSERT into `upsipreneur` 
					(id, nama, no_matrik, semester, no_mykad, no_telefon, bp_bukan, jantina, 
					bidang_p, nama_p, produk_utama, no_ssm_ipt, milikan_p, jenis_p, punca_m, 
					lokasi_p, tarikh_mp, emel) 
					VALUES 
					('$idUP', '$nameUP', '$matUP', '$semUP', '$kadUP', '$fonUP', 
					'$bmUP', '$genUP', '$fosUP', '$bsnUP', '$mpUP', '$isnUP',
					'$obUP', '$btUP', '$fsUP', '$blUP', '$bsdUP', '$emUP')";
					
			if(mysqli_query($link, $sql)){
				echo '<script type="text/javascript">
						alert("New UPSIPRENEUR record succesfully added to directory");
						window.location.href="UPlist.php";
					 </script>';	 
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}
		
		if (isset($_POST['addCM'])) {
			$cmname = mysqli_real_escape_string($link, $_REQUEST['cmname']);
			$cmphone = mysqli_real_escape_string($link, $_REQUEST['cmphone']);
			$cmfax = mysqli_real_escape_string($link, $_REQUEST['cmfax']);
			$cmemail = mysqli_real_escape_string($link, $_REQUEST['cmemail']);
			$cmpos = mysqli_real_escape_string($link, $_REQUEST['cmpos']);
			 
			// attempt insert query execution
			$sql = "INSERT into `coach-mentor` (name, phone, fax, email, position) 
					VALUES ('$cmname', '$cmphone', '$cmfax', '$cmemail', '$cmpos')";
					
			if(mysqli_query($link, $sql)){
				echo '<script type="text/javascript">
						alert("New coach/mentor record succesfully added to directory");
						window.location.href="CMlist.php";
					 </script>';	 
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}
		
		mysqli_close($link);
?>