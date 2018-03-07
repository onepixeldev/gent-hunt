<html>
<body>
<?php
		require('config.php');
		
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
		
		mysqli_close($link);
?>
</body>
</html>