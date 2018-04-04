<?php
	include('config.php');	
		
	if (isset($_POST['idIT'])){
		
		$id = $_POST['idIT'];
		$sqlsel = "SELECT * FROM featured_it WHERE itID = '$id'";
		$resultsel = mysqli_query($link, $sqlsel);
		
		if(mysqli_num_rows($resultsel) == 1){
			echo '<script type="text/javascript">
					alert("Please remove this record on featured list first before removing it from directory.");
					window.location.href="FTlist.php";
				 </script>';
		}
		else{	
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
	}
	
	if (isset($_POST['delFeat'])){
		
		$idFeat = $_POST['idFeat'];
		$sqlDel = "DELETE FROM featured_it WHERE itID = '$idFeat'";
		
		if(mysqli_query($link, $sqlDel)){
			echo '<script type="text/javascript">
					alert("Record sucessfully removed from featured list.");
					window.location.href="FTlist.php";
				 </script>';
		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
	
	
	
	mysqli_close($link);
?>