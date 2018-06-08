<?php
	include('config.php');	
	
	// check if data exist in featured list for li & lm list
	if (isset($_POST['idIT'])){
		
		$id = $_POST['idIT'];
		$sqlsel = "SELECT * FROM featured_it WHERE itID = '$id'";
		$resultsel = mysqli_query($link, $sqlsel);
		
		// if exist
		if(mysqli_num_rows($resultsel) == 1){
			echo '<script type="text/javascript">
					alert("Please remove this record from featured list before removing it from directory.");
					window.location.href="FTlist.php";
				 </script>';
		}
		// if not delete
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
	
	// delete featured li & lm
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
			echo "ERROR: Could not able to execute $sqlDel. " . mysqli_error($link);
		}
	}
	
	// del featured ent list
	if (isset($_POST['idFeatEnt'])){
		
		$idFeatEnt = $_POST['idFeatEnt'];
		$sqlDel = "DELETE FROM featured_ent WHERE feat_ent_id = '$idFeatEnt'";
		
		if(mysqli_query($link, $sqlDel)){
			echo '<script type="text/javascript">
					alert("Record sucessfully removed from entrepreneur featured list.");
					window.location.href="FTENTlist.php";
				 </script>';
		}
		else{
			echo "ERROR: Could not able to execute $sqlDel. " . mysqli_error($link);
		}
	}
	
	// del ent list directory record
	if (isset($_POST['delENT'])){
		
		$idENT = $_POST['idENT'];
		$sqlDel = "SELECT * FROM featured_ent WHERE id_ent = '$idENT'";
		$featent = mysqli_query($link, $sqlDel);
		
		// check if record exist on featured ent list
		if(mysqli_num_rows($featent) == 1){
			echo '<script type="text/javascript">
					alert("Please remove this record from featured list before removing it from directory.");
					window.location.href="FTENTlist.php";
				 </script>';
		}
		
		// if not delete
		else{	
			
			$sql = "DELETE FROM entlist WHERE id_ent = '$idENT'";
			if(mysqli_query($link, $sql)){
				echo '<script type="text/javascript">
						alert("Record sucessfully removed from directory");
						window.location.href="ENTlist.php";
					 </script>';
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}
	}
	
	// del upsipreneur list
	if (isset($_POST['delUP'])){
		
		$idUP = $_POST['idUP'];
		
		$sql = "DELETE FROM upsipreneur WHERE id = '$idUP'";
		
		if(mysqli_query($link, $sql)){
			echo '<script type="text/javascript">
					alert("Record sucessfully removed from directory");
					window.location.href="UPlist.php";
				 </script>';
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
	}
	
	if (isset($_POST['delCM'])){
		
		$delCM = $_POST['delCM'];
		
		$sql = "DELETE FROM `coach-mentor` WHERE idcm = '$delCM'";
		
		if(mysqli_query($link, $sql)){
			echo '<script type="text/javascript">
					alert("Record sucessfully removed from coach/mentoring directory");
					window.location.href="CMlist.php";
				 </script>';
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
	}
	
	
	
	mysqli_close($link);
?>