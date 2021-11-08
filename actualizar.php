<?php	
	require "inc/config.php";

	$id = $_POST['editar_id'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];

	$query = "UPDATE empleados SET Nombre='{$nombre}',Identificacion='{$id}',Email='{$email}' WHERE Identificacion='{$id}'";
	if ($con->query($query)) {
		echo 1;
	}else{
		echo 0;
	}
?>