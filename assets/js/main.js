	$(document).ready(function(){
		
		// funcion recuperar datos 
		
	   	function loadTableData(){
	       $.ajax({
	           url : "ver.php",
	           type : "POST",
	           success:function(data){
	              $("#tableData").html(data);
	           }
	       });
	   	}
	   	loadTableData();
		$("#registro").click(function(e){
			e.preventDefault();
			var nombre = $("#nombre").val();
			var email = $("#email").val();
			var id = $("#ident").val();
			
			if(nombre !=="" && email !=="" ){
				$.ajax({
					url : "accion.php",
					type: "POST",
					data : {nombre:nombre,email:email,ident:id},
					success:function(data){
						alert("Datos insertados correctamente");
						$("#clienteForm")[0].reset();
						loadTableData();
					},
				});
			}else{
				alert("Todos los campos son obligatorios");
			}
		});	

		// Eliminar registros
		$(document).on("click",".borrar-btn",function(){
			if (confirm("¿Estás seguro de eliminar esto?")) {
				var id = $(this).data('id');
				console.log(id);
				var element = this;
				$.ajax({
					url :"borrar.php",
					type:"POST",
					data:{'borrarId':id},
					success:function(data){
						
							$(element).closest("tr").fadeOut();
							alert("Registro de usuario eliminado correctamente");	
						
						
					}
				});
			}
		});

		// Editar el registro
		$(document).on("click",".editar-btn",function(){
			var id = $(this).data('id');
			$.ajax({
				url :"extraer.php",
				type:"POST",
				data:{editarId:id},
				success:function(data){
					$("#editarForm").html(data);
				},
			});
		});

		//  update
		$(document).on("click","#editarSubmit", function(){

			

			var editar_id = $("#editarId").val();
			console.log ("--->"+editar_id);
			var nombre = $("#editarNombre").val();
			var email = $("#editarEmail").val();
			
			
			$.ajax({
				url:"actualizar.php",
				type:"POST",
				data:{'editar_id':editar_id,nombre:nombre,email:email},
				success:function(data){					
						alert("Registro de usuario actualizado correctamente");
						loadTableData();
					
				}
			});
		});
	});