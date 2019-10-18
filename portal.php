
<?php session_start(); ?>
<?php
   if (!isset($_SESSION['user_id'])) {
     header('location:login_index.php');
     exit();
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
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active text-white" href="">Intro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-white" href="">Portafolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-white" href="">Sobre Nosotros</a>
      </li>
        
      </ul>
      </div>
    <form action="database/logout.php" method="post">
      <button type="submit" name="logout-submit" class="btn btn-info">logout</button>
    </form>


    </nav>


  <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
        
        </div>
      </div>
    </div>
  <div class="container">
    
    <div class="section">
      <p class="text-justify"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nobis omnis sapiente beatae fugit modi saepe fugiat optio aliquid harum rem dolorum, ipsa aperiam iure necessitatibus nostrum rerum debitis amet?</span>
      <span>Repellat earum iste voluptatum! Inventore similique ipsum, sint, suscipit iste dolores? Eum consequatur alias consequuntur ut? Iste, distinctio ut officiis, rem voluptatibus, sit harum suscipit quae repellendus quam fugiat esse!</span>
      <span>Inventore architecto recusandae provident, dolorem ex explicabo nobis, molestiae numquam aperiam vero nesciunt, nisi dolorum atque, cupiditate sint aspernatur illum illo corporis iste ullam possimus quod ea doloremque. Voluptates, aperiam!</span>
      <span>Quas rem placeat, debitis eaque cum accusamus, incidunt tenetur natus error dolore nulla sint illum libero soluta quidem facere praesentium sed excepturi neque numquam repudiandae? Culpa vero quia labore aliquid.</span></p>

      <p class="text-justify"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nobis omnis sapiente beatae fugit modi saepe fugiat optio aliquid harum rem dolorum, ipsa aperiam iure necessitatibus nostrum rerum debitis amet?</span>
      <span>Repellat earum iste voluptatum! Inventore similique ipsum, sint, suscipit iste dolores? Eum consequatur alias consequuntur ut? Iste, distinctio ut officiis, rem voluptatibus, sit harum suscipit quae repellendus quam fugiat esse!</span>
      <span>Inventore architecto recusandae provident, dolorem ex explicabo nobis, molestiae numquam aperiam vero nesciunt, nisi dolorum atque, cupiditate sint aspernatur illum illo corporis iste ullam possimus quod ea doloremque. Voluptates, aperiam!</span>
      <span>Quas rem placeat, debitis eaque cum accusamus, incidunt tenetur natus error dolore nulla sint illum libero soluta quidem facere praesentium sed excepturi neque numquam repudiandae? Culpa vero quia labore aliquid.</span></p>
    </div>
  </div>
    




  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>