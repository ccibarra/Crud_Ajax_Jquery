<?php
	require "inc/config.php";

		$editarId = $_POST['editarId'];
	
	$sql = "SELECT * FROM empleados WHERE Identificacion = $editarId";
	$query = $con->query($sql);

		$output = " ";
		while ($row = $query->fetch_assoc()) {
	    $output .= "<form>
                      <div class='modal-body'>
                      	<input type='hidden' class='form-control' id='editarId' value='{$row['Identificacion']}'>
                        <div class='form-group'>
						<label class='control-label' for='nombre'>Nombre:</label>
                            <input type='text' class='form-control' id='editarNombre' value='{$row['Nombre']}'>
                        </div>
                        <div class='form-group'>
						<label class='control-label' for='email'>Email:</label>
                            <input type='text' class='form-control' id='editarEmail' value='{$row['Email']}'>
                        </div>
						
                        
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-outline-danger' data-dismiss='modal'> <i class='fa fa-times-circle' aria-hidden='true'></i> Cerrar </button>
                        <button type='button' class='btn btn-outline-success' id='editarSubmit' data-dismiss='modal'> Guardar cambios </button>
                      </div>
                  </form>";         	
	    }
	    $output .="</table>";
	
	echo $output;

?>
