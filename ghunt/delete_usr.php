<?php
	include('config.php');	
		
	if (isset($_POST['iduser'])){
		
		$iduser = $_POST['iduser'];
		//$iduser = mysqli_real_escape_string($link, $iduser);
		
		// attempt insert query execution
		$sql = "DELETE FROM teacher WHERE iduser = '$iduser'";
		if(mysqli_query($link, $sql)){
			echo '<script type="text/javascript">
					alert("Rekod berjaya dipadam");
					window.location.href="teacherList.php";
				 </script>';
			//header("Location: teacherList.php");
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
	
	mysqli_close($link);
?>