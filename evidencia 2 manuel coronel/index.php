<?php
session_start();
if($_POST){


if($_POST['usuario']=='develoteca'&& $_POST['password']=='admin'){
  $_SESSION['usuario']=$_POST['usuario'];
  header('location:registro.php');
//echo "login correcto";
}
}else
{
$mensaje='Usuario o contraseña incorrecto';
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container">
    <div class="row">
    <div class="col-md-4">

</div>
<div class= "col-md-4">
<br>
<form action= "section/registro.php" method="post"></div>

<div class="card">
  <div class="card-header">
    login
  </div>
   <div class="card-body">






    <div class="mb-3">
      <label for="" class="form-label">usuario</label>
      <input type="text"
        class="form-control"
        name="usuario"
        id="usuario"
        aria-describedby="helpId" placeholder="usuario"
      />
      <small id="helpId" class="form-text text-muted">type user</small>
    </div>
    
   <div class="mb-3">
    <label for="" class="form-label">contraseña</label>
    <input type="password"
      class="form-control"
      name="password"
      id="contraseña"
      placeholder="password"
    />
    <small id="helpId" class="form-text text-muted">type code</small>
   </div>
   <button type ="submit" class="btn btn-primary"> iniciar sesion </button>
   </form>
   <button type ="submit" class="btn btn-secundary"> registrarse  </button>




  </div>
  
</div>

    
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
