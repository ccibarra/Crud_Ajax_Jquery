<?php
	require "inc/config.php";

	if (isset($_POST['borrarId'])) {
		$borrarId = $_POST['borrarId'];
	}

	$sql = "SELECT * FROM empleados WHERE Identificacion = {$borrarId}";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
	
		$query = "DELETE FROM empleados WHERE Identificacion = {$borrarId}";

		if ($con->query($query)) {
			echo 1;
			exit;
		}else{
			echo 0;
			exit;
		}
	}
	
?>