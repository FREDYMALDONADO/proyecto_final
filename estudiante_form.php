<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Estudiantes</title>
<?php require_once"menu.php" ?>
  </head>
  <body>
  
<div class="container"><br>
<div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
    <h3>Formulario estudiante</h3>
<form method="post" action="Proceso.php">
    <div class="form-group">
        <label for="id_estudiante">ide_estudiante</label>
        <input id="id_estudiante" class="form-control" type="text" name="estudiante">

    </div>
    
    <div class="form-group">
        <label for="codigo">Codigo</label>
        <input id="codigo" class="form-control" type="text" name="codigo">

        

    <div class="form-group">
        <label for="primer_nombre">Primer nombre</label>
        <input id="primer_nombre" class="form-control" type="text" name="primer_nombre">

    </div>

    <div class="form-group">
        <label for="segundo_nombre">Segundo nombre</label>
        <input id="segundo_nombre" class="form-control" type="text" name="segundo_nombre">

    </div>

    <div class="form-group">
        <label for="primer_apellido">Primer apellido</label>
        <input id="primer_apellido" class="form-control" type="text" name="primer_apellido">

    </div>

    <div class="form-group">
        <label for="segundo_apellido">Segundo apellido</label>
        <input id="segundo_apellido" class="form-control" type="text" name="segundo_apellido">

    </div>

    <div class="form-group">
        <label for="fecha">Fecha de nacimiento/label>
        <input id="fecha" class="form-control" type="text" name="fecha">

    </div>

    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input id="direccion" class="form-control" type="text" name="direccion">

    </div>
    
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input id="telefono" class="form-control" type="text" name="telefono">

    </div>

    <div class="form-group">
        <label for="celular">Celular</label>
        <input id="celular" class="form-control" type="text" name="celular">

    </div>

    <div class="form-group">
        <label for="email">Correo</label>
        <input id="emial" class="form-control" type="email" name="email">

    </div>

    <div class="form-group">
        <label for="contra">Contraseña</label>
        <input id="primer_apellido" class="form-control" type="password" name="contra">

    </div>

    <div class="form-group">
        <label for="activo">Activo</label>
        <input id="activo" class="form-control" type="text" name="activo">

    </div>

    <div class="form-group">
        <label for="id_iglesia">Id_iglesia</label>
        <input id="id_iglesia" class="form-control" type="text" name="id_iglesia">

    </div>
    <br>
   


    <div class="form-groupcontent-center">
  <button class="btn btn-secondary" type="submit">Enviar</button>
  </div>
</form>

    </div>
</div>


 </div>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>