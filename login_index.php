<?php require 'database/conexion.php'; ?>
<?php session_start(); ?>
<?php 
if (isset($_SESSION['user_id'])) {
  header('location:portal.php');
  exit();
  die();
}?>
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


  <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <form action="database/login.php" method="post" class="">
            <h2 class="my-4">Inicia Sesión</h2>

  <?php if (isset($_SESSION['error_login'])) {?>
   <div class="alert alert-<?= $_SESSION['color-error'] ?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['error_login'] ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php session_unset(); }?>

            <div class="form-group">
            <label for="user"> <strong> Nombre de usuario o email</strong></label>
            <input type="text" class="form-control" name="user" id="user" placeholder="ingrese el usuario o el correo" value="">
            
            </div>

          <div class="form-group">
          <label for="password"> <strong>Contraseña</strong> </label>
            <input type="password" class="form-control" id="password" name="password" placeholder="ingrese la contraseña" value="">
          
          </div>

          <button type="submit" name="submit_login" class="btn btn-info form-control">enviar</button>

        </form>
        </div>
      </div>
    </div>
  </form>
    




  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>