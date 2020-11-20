<?php

  session_start();

  if (isset($_SESSION['email'])) {
    header('location: welcome.php');
  }

  require 'db.php';

  if(!empty($_POST['email']) && !empty($_POST['password'])){
    $consulta = $conn->prepare('SELECT email, password FROM users WHERE email=:email');
    $consulta->bindParam(':email',$_POST['email']);
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    $message = '';
    if (count($resultado) > 0 && password_verify($_POST['password'],$resultado['password'])) {
      $_SESSION['email'] = $resultado['email'];
      header('location:  welcome.php');
    } else {
      $message = 'Lo sentimos, tus credenciales no coinciden';
    }

  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ACCESO</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>


    <h1>ACCEDE</h1>


    <?php if(!empty($message)): ?>
      <p><?= $message ?></p>
    <?php endif; ?>


    <form action="test.php" method="post">
      <input type="text" name="email" placeholder="Escribe tu email">
      <input type="password" name="password" placeholder="Ingresa tu contraseña">
      <input type="submit" value="ENVIAR">

    </form>
  </body>
    <footer style="margin-top:400px;">POWERED BY MAIKOL</footer>
</html>
