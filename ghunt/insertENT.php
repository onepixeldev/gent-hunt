<?php
		require('config.php');
		
		
		$entName = mysqli_real_escape_string($link, $_REQUEST['entName']);
		$entLocation = mysqli_real_escape_string($link, $_REQUEST['entLocation']);
		$comName = mysqli_real_escape_string($link, $_REQUEST['comName']);
		$pos = mysqli_real_escape_string($link, $_REQUEST['pos']);
		$cDetails = mysqli_real_escape_string($link, $_REQUEST['cDetails']);
		$sProfile = mysqli_real_escape_string($link, $_REQUEST['sProfile']);
		
		$image = $_FILES['image']['name'];
		$filename = $_FILES['image']['tmp_name'];
		$target_dir = "uploads/";
		$target = $target_dir .basename($_FILES['image']['name']);
		$uploadOk = 1;
		
		$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
		
		
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			echo '<script type="text/javascript">
					alert("Sorry, only JPG, JPEG, & PNG files are allowed.");
				 </script>';
			$uploadOk = 0;
		}
		
		if ($_FILES["image"]["size"] > 500000) {
			echo '<script type="text/javascript">
					alert("Sorry, your file is too large.");
				 </script>';
			$uploadOk = 0;
		}
		
		//$content = file_get_contents($image);
		
		if($uploadOk == 1){
			$sql = "INSERT into `entlist` (name_ent, location, businessName, Position, career, on_social_pro, pic, image_name) 
					VALUES ('$entName', '$entLocation', '$comName', '$pos', '$cDetails', '$sProfile', '$target', '$image')";
			
			move_uploaded_file($filename,$target);	
				
			if(mysqli_query($link, $sql)){
			echo '<script type="text/javascript">
					alert("New ENT record succesfully added to directory");
					
				</script>';	 
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}
		
		mysqli_close($link);
?>