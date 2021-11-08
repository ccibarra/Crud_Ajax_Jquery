<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="assets/js/jquery.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #7952b3;">
    <div class="container-fluid">
      <a style= "color: aliceblue;"class="navbar-brand">Datos de los Empleados</a>
    </div>
  </nav>
  <div id="tableData">
  		
  </div>
 <!-- formulario-->
 
  <div id="ocultar"class="container" style.display='none'>
<br>
<div class="card">
  <div class="card-header">
    Agregar Empleados
  </div>
  <div class="card-body">
  <div id="ocultar">

    <form class="form-horizontal" id="clienteForm"  >

       <div class="form-group row">
         <label class="control-label col-sm-2" for="nombre">Nombre:</label>
         <div class="col-sm-10">          
           <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre">
         </div>
       </div>
        <br>
       <div class="form-group row">
         <label class="control-label col-sm-2" for="nombre">Identificacion:</label>
         <div class="col-sm-10">          
           <input type="number" name="ident" class="form-control" id="ident" placeholder="Ingrese Iditificacion">
         </div>
       </div>
        <br>
       <div class="form-group row">
         <label class="control-label col-sm-2" for="email">Email:</label>
         <div class="col-sm-10">
           <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese Email" name="email">
         </div>
       </div>
       
       <br>
       <div class="form-group row">        
         <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" class="btn btn-outline-info" id="registro"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar Empleado</button>
         </div>

       </div>
     </form>
  </div>

  </div>
</div>
<!-- modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel"><b>actualizar empleado</b></h2>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="editarForm"> 
               
            </div>
          </div>
      </div>
  </div> 
</div>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>