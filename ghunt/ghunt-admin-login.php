<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="apple-itunes-app" content="app-id=1188352635">
    <title>gHunt Admin</title>

    <!-- EXTERNAL CSS -->
    <link href="./assets/login/open_sans.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/login/style_v2_optimized.css" rel="stylesheet" type="text/css">
</head>
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
							window.location.href="ghunt-admin-login.php";
					 </script>';
			}
    }
	
	else
	{
?>		
<body class="cp">

    <div id="login-wrapper" class="group " style="opacity: 1; visibility: visible;">
        <div class="wrapper">
            <div id="notify">
                <br>
				<br>
				<br>
				<br>
				<br>
				<br>
            </div>

            
            <div id="content-container">
                <div id="login-container">

                    <div id="login-sub-container">
                        <div id="login-sub-header">

                            <img class="main-logo" src="./assets/login/ghunt-admin-logo.png" alt="logo">

                        </div>
                        <div id="login-sub">
                            <div id="forms">
                                <form id="login_form" action="" method="post">
                                    <div class="input-req-login">
                                        <label for="user">Username</label>
                                    </div>
                                    <div class="input-field-login icon">
										<i class="fa fa-user" style="position: absolute; left: 9px; top: 29px; font-size:29px;"></i><input name="id_admin" autofocus="autofocus" placeholder="Enter username." class="std_textbox" type="text" required>
                                    </div>
                                    <div class="input-req-login login-password-field-label">
                                        <label for="pass">Password</label>
                                    </div>
                                    <div class="input-field-login icon">
                                        <i class="fa fa-unlock-alt" style="position: absolute; left: 9px; top: 122px; font-size:29px;"></i><input name="password" placeholder="Enter password." class="std_textbox" type="password" required>
                                    </div>
                                    <div class="controls">
                                        <div class="login-btn">
                                            <button name="submit" type="submit" id="login_submit" tabindex="3">Log in</button>
                                        </div>

                                    </div>
                                    <div class="clear" id="push"></div>
                                </form>
                                <!--CLOSE forms -->
                            </div>
                            <!--CLOSE login-sub -->
                        </div>
                        <!--CLOSE wrapper -->
                    </div>
                    <!--CLOSE login-sub-container -->
                </div>
                <!--CLOSE login-container -->
            </div>
        </div>
        <!--Close login-wrapper -->
    </div>
</body>
<?php } ?>
</html>