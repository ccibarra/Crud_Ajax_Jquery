<?php
	require "inc/config.php";
	
	$sql = "SELECT * FROM empleados";
	$query = $con->query($sql);
	if ($query->num_rows  > 0) {
		echo "<table class='table mt-3'>";
		echo "<thead>";
		   echo "<tr>";
		   echo "<th>Nombre</th>";
		   echo "<th>Identificacion</th>";
		   echo "<th>Correo</th>";
		   echo "<th>Aciones</th>";
		 echo "</tr>";
	   echo "</thead>";
		
		
	   
		while ($row = $query->fetch_assoc()) {
		
			echo "<tr>";  
				echo "<td>" . $row['Nombre'] . "</td>";
				echo "<td>" . $row['Identificacion'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
							
					echo "<td> <button type='button' class='btn btn-outline-success mx-3  btn-sm editar-btn' data-id='{$row['Identificacion']}' data-toggle='modal' data-target='#exampleModal'> <i class='fa fa-pencil' aria-hidden='true'></i> Actualizar</button>
					<button  type='button'  class='btn btn-outline-danger , bi bi-trash btn-sm borrar-btn' data-id='{$row['Identificacion']}'> <i class='fa fa-trash-o' aria-hidden='true'></i> Eliminar</button> </td>";
						
						
			echo "</tr>";
			
		}
		echo "</table>";
	}else{
		echo "<h5>Ningún registro fue encontrado</h5>";
	}
	
?>
