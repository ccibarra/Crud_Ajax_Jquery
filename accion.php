<?php
	require "inc/config.php";

	$name = $_POST['nombre'];
    $ident  = $_POST['ident'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO empleados (Nombre,Identificacion,Email)
	VALUES ('$name', '$ident','$email')";
    
	if ($con->query($query)) {  
        return true;
    }else{
        return false;
    }

?>