<?php
	$link = mysqli_connect("syazwan.jkomp.my","syazwan_admin","onepixel123456789","syazwan_tasdb");
	// Check connection
	if (mysqli_connect_errno())
	  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  } 
?>
