<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1>Agregar Registro</h1>
     <div class="row">
       <div class="col-sm-12">
         <form action=" ">
           <label for="nombre">Nombre:</label>
           <input type="text" id="nombre" name="nombre" class="form-control" required>
           <label for="apaterno">Apellido Paterno:</label>
           <input type="text" id="apaterno" name="apaterno" class="form-control" required>
           <label for="amaterno">Apellido Materno:</label>
           <input type="text" id="amaterno" name="amaterno" class="form-control" required>
           <button class="btn btn-primary form-control">Guardar</button>
         </form>
       </div>
      </div>
       <div class="row">
         <div class="col-sm-12">
            <div class="table table=resonsive">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido paterno</th>
                  <th>Apellido materno</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                <?php foreach($datos as $dato): ?>
                <tr> 
                  <th><?php echo $dato->nombre ?></th>
                  <th><?php echo $dato->apellido_paterno ?></th>
                  <th><?php echo $dato->apellido_materno ?></th>
                  <th> <a href="<?php base_url('/index.php/editar') ?>" class="btn btn-sm btn-warning">Editar</a> </th>
                  <th> <a href="<?php base_url('/index.php/eliminar') ?>" class="btn btn-sm btn-danger">Eliminar</a> </th>
                </tr>
                <?php endforeach ?>
              </table>
           </div>
         </div>
      </div>
                  
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
