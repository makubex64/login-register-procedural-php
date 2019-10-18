<?php require 'database/conexion.php'; ?>
<?php session_start(); ?>
<?php
if (isset($_SESSION['user_id'])) {
  header('location:portal.php');
  exit();
  die();
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <title>Hello, world!</title>
  </head>
  <body>
   

    <nav class="navbar navbar-dark bg-dark" role="navigation">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active text-white" href="index.php"><strong>Intro</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="login_index.php"><strong>Login</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="register_index.php"><strong>Register</strong></a>
      </li>
      
      </ul>
      </div>
    </nav>


<div class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <h2>Formulario de Registro</h2>

<?php if (isset($_SESSION['error'])) {?>
   <div class="alert alert-<?= $_SESSION['color-error'] ?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['error'] ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php session_unset(); }?>


      <form role="form" action="database/registro.php" id="formulario" method="post" name="registro">

      
      <div class="form-group">
        <label for="user"><strong>Ingresa el usuario</strong></label>
        <input type="text" name="user" id="user" placeholder="usuario" class="form-control">
      </div>
      <div class="form-group">
        <label for="nombre_completo"><strong>Nombre y Apellido</strong></label>
        <input type="text" name="nombre_completo" id="nombre" placeholder="ingresa nombre y apellido" class="form-control">
      </div>
      <div class="form-group">
        <label for="email"><strong>Correo/mail</strong></label>
        <input type="email" name="email" id="email" placeholder="ingresa el correo" class="form-control" >
      </div>
      <div class="form-group">
        <label for="password"><strong>Contraseña</strong></label>
        <input type="password" name="password" id="password" placeholder="ingresa la contraseña" class="form-control">
      </div>
      <div class="form-group">
        <label for="password2"><strong>Repita la Contraseña</strong></label>
        <input type="password" name="password2" id="password2" placeholder="ingresa la contraseña" class="form-control">
      </div>
      <button type="submit" name="register" class="form-control btn btn-info">enviar</button>
    </form>
    </div>
  </div>
</div>











  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script src="js/bootstrap.min.js"></script>
</html>