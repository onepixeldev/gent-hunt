<?php
		require('config.php');
		
		// If form submitted, insert values into the database.
		if (isset($_POST['username'])){
			
			//$username = $row['username'];
			
			//removes backslashes
			$username = stripslashes($_REQUEST['username']);
			//escapes special characters in a string
			$username = mysqli_real_escape_string($link, $username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($link, $password);
			//Checking is user existing in the database or not
			$query = "SELECT * FROM teacher WHERE iduser='$username'and password='$password'";
			
			$result = mysqli_query($link, $query);
			$rows = mysqli_num_rows($result);

			if($rows == 1){
				$sql = "UPDATE clockin SET timeOUT=curtime(), tickOUT='KELUAR' WHERE TeacherID='$username' AND date_in_out=curdate();";
				
				if(mysqli_query($link, $sql)){
					echo '<script type="text/javascript">
							alert("Kehadiran keluar berjaya direkod.");
							window.location.href="takeAttendOut.php";
						 </script>';
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				// Redirect user to index.php
				//header("Location: dashboard.php");
			}
			
			else{
				echo '<script type="text/javascript">
							alert("ID atau kata laluan salah!");
							window.location.href="takeAttend.php";
					 </script>';
			}
    }
?>