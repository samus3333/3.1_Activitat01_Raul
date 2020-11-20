<?php
session_start();

if(isset($_SESSION['id'])&& $_SESSION['id'] === true){
    header('Location: welcome.php');
}
require_once "db.php";

if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE email='$email'";
  $final= $conn->query($sql);

  if(count($final)>0){
    session_start();
    $_SESSION['id']=true;
    header('Location: welcome.php');
  }else {
    echo "Lo sentimos, tus credenciales no funcionan.";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="formulario.php" method="POST">
      <p>LOGIN</p><br>
  <label for="Email">Email:</label><br>
  <input type="text" name="email" value="Email"><br>
  <label for="Password">Password:</label><br>
  <input type="text" name="password" value="Password"><br><br>
  <input type="submit" name="login" value="Login">
</form>
  </body>
</html>
