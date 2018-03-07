<?PHP 
		session_start(); 
		require('config.php');

		// If form submitted, insert values into the database.
		if (isset($_POST['submit'])){
			
			//removes backslashes
			$username = stripslashes($_REQUEST['id_admin']);
			//escapes special characters in a string
			$username = mysqli_real_escape_string($link, $username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($link, $password);
			//Checking is user existing in the database or not
			$fullname = stripslashes($_REQUEST['$name']);
			$fullname = mysqli_real_escape_string($link, $_REQUEST['$name']);
			
			$query = "SELECT * FROM admin WHERE id_admin='$username'and password='$password'";
			
			$result = mysqli_query($link, $query);
			$rows = mysqli_num_rows($result);

			if($rows == 1){
				$_SESSION['username'] = $username;
				//$query2 = "SELECT fullname FROM admin WHERE username='$username'and password='$password'";
				$_SESSION['fullname'] = $fullname;
				// Redirect user to index.php
				header("Location: dashboard.php");
			}
			
			else{
				echo '<script type="text/javascript">
							alert("Incorrect username or password");
							window.location.href="login-admin.php";
					 </script>';
			}
    }
	
	else
	{
?>
		<html><head><title>Teacher Attendance System Login Page</title>
		<form action="" method="POST" name="login">
			<center>
			<br><br><br>
			<img src="images/logo/sriti_logo.jpg" alt="" width="550" height="290" border="\&quot;0\&quot;"><table border="0" cellpadding="0" cellspacing="0" width="40%">
			<tbody><tr>
				<td align="center"></td>
			</tr>
			<tr>
				<td align="center">
			<br><br>
			<table border="0" cellspacing="1" cellpadding="0" width="98%">
						<tbody><tr>
			 <td align="right">Username</td><td align="center"><input name="id_admin" type="text" required></td>
			</tr>
			<tr>
			 <td align="right">Password</td><td align="center"><input name="password" type="password" required></td>
			</tr>
			<tr><td>&nbsp;</td><td></td></tr>                         
			<tr>
			<td align="center" colspan="3">                         
			<input type="submit" style="background:" value=" E N T E R " name="submit"> 
			<input type="reset" style="background:" value=" R E S E T " name="reset">
			<br>
			<p>
			E-mel bantuan Sistem Kehadiran Guru : xenotime94@gmail.com
			<br>
			<br>
			IT Servis : 011-3329 5442
			</p>
		</center></form></body></html>
<?php } ?>
