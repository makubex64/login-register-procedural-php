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
        <a class="nav-link active text-white" href="#"><strong>Intro</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="login_index.php"><strong>Login</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><strong>Register</strong></a>
      </li>
      
      </ul>
      </div>
    </nav>

  
    <div class="container">
    <div class="section">
       <h1>Hello, world!</h1>
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non veniam, quia animi porro at quis ad et eaque ex libero, minus fuga vel iste hic perferendis eligendi magni excepturi cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex cupiditate praesentium. Aut doloremque nemo molestias quaerat officia magnam, reiciendis ad, neque, ducimus quisquam obcaecati. Officia cumque nesciunt, dignissimos beatae?</p>
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non veniam, quia animi porro at quis ad et eaque ex libero, minus fuga vel iste hic perferendis eligendi magni excepturi cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex cupiditate praesentium. Aut doloremque nemo molestias quaerat officia magnam, reiciendis ad, neque, ducimus quisquam obcaecati. Officia cumque nesciunt, dignissimos beatae?</p>
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non veniam, quia animi porro at quis ad et eaque ex libero, minus fuga vel iste hic perferendis eligendi magni excepturi cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex cupiditate praesentium. Aut doloremque nemo molestias quaerat officia magnam, reiciendis ad, neque, ducimus quisquam obcaecati. Officia cumque nesciunt, dignissimos beatae?</p>
    </div>
    </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>