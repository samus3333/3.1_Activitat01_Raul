<?php

require_once "db.php";

if(isset($_POST['registrarse'])){
  $email=$_POST["email"];
  $password=$_POST["password"];
  $registro = "INSERT INTO users VALUES('$email','$password')";
  $ejecutar_registro= mysqli_query($conn, $registro);
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="registro.php" method="POST">
      <p>REGISTRO</p><br>
  <label for="Email">Email:</label><br>
  <input type="text" name="email" value="Email"><br>
  <label for="Password">Password:</label><br>
  <input type="text" name="password" value="Password"><br><br>
  <input type="submit" name="registrarse" value="Registrarse">
</form>
  </body>
</html>
