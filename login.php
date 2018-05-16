<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilo_login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
  </head>


  <body>

    <?php require_once('./header.php'); ?>
    
        <?php

    $email = '';
    $errores = [];

    if ($_POST) {

      $email = trim($_POST['email']);

      if ($email == '') {
          $errores['email'] = 'Ingrese de nuevo su correo electrónico';
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errores['email'] = 'Ingrese su correo electrónico con un formato válido';
      }
    }

    ?>

    <form class="login" method="post">
      <fieldset>

        <h2>eCommerce</h2>


        <input type="text" name="email" value="<?= $email ?>" placeholder="Correo electrónico">
        
        <br>
        <div class="separador1"></div>

        <input type="password" name="password" placeholder="password">


        <div class="separador"></div>

        <a href="#" class="boton">Inicia sesión</a>

          <div class="preguntas">
          <p>
          <input type="checkbox" name="Recordarme" value=""> Recordarme </p>

          <div class="separador"></div>

          <a href="#">¿Olvidó su contraseña?</a>

          <br><br>

          <a href="formulario2.html">¿No tienes una cuenta? <b>Regístrate</b></a>
        </div>


      </fieldset>
    </form>

    <?php require_once('./footer.php') ?>
  </body>
</html>
