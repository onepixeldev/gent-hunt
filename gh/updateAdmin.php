
<?PHP
require ('auth.php');
require ('config.php');

	if (isset($_POST['adminID'])){
	$adminIDreal = $fn['username'];	
		
	$adminID = $_POST['adminID'];
	
	$adminName = $_POST['adminName'];
	$adminName = stripslashes($_REQUEST['adminName']);
	$adminName = mysqli_real_escape_string($link, $adminName);
	
	$adminEmail = $_POST['adminEmail'];
	$adminTel = $_POST['adminTel'];
	$adminPwd = $_POST['adminPwd'];

	$sql = "UPDATE admin SET username='$adminID', fullname='$adminName', email='$adminEmail', phone='$adminTel', password='$adminPwd' WHERE username='$adminIDreal'";
	if(mysqli_query($link, $sql)){
		echo '<script type="text/javascript">
					alert("Rekod berjaya dikemaskini");
					alert("Sila Log Masuk Semula");
					window.location.href="logout.php";
			 </script>';
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	}
	mysqli_close($link);
?>