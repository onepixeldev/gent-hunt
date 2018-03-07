<?php
	include('config.php');	
		
	if (isset($_POST['idIT'])){
		
		$id = $_POST['idIT'];
		
		// attempt insert query execution
		$sql = "DELETE FROM li_lm_list WHERE id = '$id'";
		if(mysqli_query($link, $sql)){
			echo '<script type="text/javascript">
					alert("Record sucessfully removed from directory");
					window.location.href="ITlist.php";
				 </script>';
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
	
	mysqli_close($link);
?>