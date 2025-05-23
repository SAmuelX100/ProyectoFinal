<?php 
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Acceso</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">


<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="../php/check.php" method="post">
    <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='logout'){
      ?>
      <div class="alert alert-success text-center" role="alert">
      ¡Cierre de sesión exitoso!
</div>
      <?php
  }  
  if($_GET['msg']=='iuser'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
      ¡Correo o Contraseña Incorrectos!
</div>
      <?php
  } } 
?> 

  <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
  <label for="inputEmail" class="sr-only">Correo Electrónico</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo Electrónico" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name="rm" value="remember-me"> Remember me
    </label>
  </div>
  <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Iniciar Sesión">
</form>
</body>
</html>