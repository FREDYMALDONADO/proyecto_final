<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Materias</title>
    <?php require_once"menu.php" ?>

  </head>
  <body>
  
<div class="container"><br>
<div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
    <h3>Formulario Materia ciclo</h3>
<form method="post" action="">
    <div class="form-group">
        <label for="id_materia_ciclo">id_materia cilclo</label>
        <input id="id_materia_ciclo" class="form-control" type="text" name="id_materia_ciclo">

    </div>
    
    <div class="form-group">
        <label for="id_materia">Id_materia</label>
        <input id="id_materia" class="form-control" type="text" name="id_materia">

    </div>

    <div class="form-group">
        <label for="id_ciclo">Id_ciclo</label>
        <input id="id_ciclo" class="form-control" type="text" name="id_ciclo">

    </div>
        

    <div class="form-group">
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