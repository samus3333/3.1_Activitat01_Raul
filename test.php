<?php
session_start();

if(isset($_SESSION['id'])&& $_SESSION['id'] === true){
    header('Location: welcome.php');
}
require_once "db.php";

if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
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
    <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
    <div>Site<span>Random</span></div>
    </div>
    <br>
    <div class="login">
    <form action="formulario.php" method="POST">
  <label for="Email">Email:</label><br>
  <input type="text" name="email" placeholder="Email"><br>
  <label for="Password">Password:</label><br>
  <input type="text" name="password" placeholder="Password"><br><br>
  <input type="submit" name="login" value="Login">
</form>
</div>
  </body>
</html>
