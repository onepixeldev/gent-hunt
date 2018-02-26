<html>
<body>
<?php
		require('config.php');
		
		$username = mysqli_real_escape_string($link, $_REQUEST['iduser']);
		$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
		$password = mysqli_real_escape_string($link, $_REQUEST['password']);
		 
		// attempt insert query execution
		$sql = "INSERT into `teacher` (iduser, fullname, password) VALUES ('$username', '$fullname', '$password')";
		if(mysqli_query($link, $sql)){
			echo '<script type="text/javascript">
					alert("Akaun kehadiran berjaya ditambah");
					window.location.href="teacherList.php";
				 </script>';
			//header("Location: teacherList.php");	 
			
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
		mysqli_close($link);
?>
</body>
</html>