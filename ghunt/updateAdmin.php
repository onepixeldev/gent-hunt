
<?PHP
require ('auth.php');
require ('config.php');

	if (isset($_POST['adminID'])){
	$adminIDreal = $fn['id_admin'];	
		
	$adminID = $_POST['adminID'];
	
	$adminName = $_POST['adminName'];
	$adminName = stripslashes($_REQUEST['adminName']);
	$adminName = mysqli_real_escape_string($link, $adminName);
	
	$adminEmail = $_POST['adminEmail'];
	$adminTel = $_POST['adminTel'];
	$adminPwd = $_POST['adminPwd'];

	$sql = "UPDATE admin SET id_admin='$adminID', name='$adminName', email='$adminEmail', phone='$adminTel', password='$adminPwd' WHERE id_admin='$adminIDreal'";
		if(mysqli_query($link, $sql)){
			echo '<script type="text/javascript">
						alert("Admin details updated!");
						window.location.href="dashboard.php";
				 </script>';
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
	mysqli_close($link);
?>