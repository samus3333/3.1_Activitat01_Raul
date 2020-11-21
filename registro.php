<?php

require_once "db.php";

if (!empty($_POST['email']) && !empty($_POST['password'])){
  if(isset($_POST['registrarse'])){
  $email=$_POST["email"];
  $password=$_POST["password"];
  $registro = "INSERT INTO users VALUES('$email','$password')";
  $ejecutar_registro= mysqli_query($conn, $registro);
}
}
?>
<html lang="en" dir="ltr">
  <head>
    <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="body"></div>
    <div class="header">
    <div><a href="formulario.php">LOGIN </a><span>Registro</span></div>
    </div>
    <br>
    <div class="login">
    <form action="registro.php" method="POST">
  <label for="Email">Email:</label><br>
  <input type="text" name="email" placeholder="Email"><br>
  <label for="Password">Password:</label><br>
  <input type="text" name="password" placeholder="Password"><br><br>
  <input type="submit" name="registrarse" value="Registrarse">
</form>
  </body>
</html>
