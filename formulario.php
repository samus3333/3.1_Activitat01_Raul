<?php
error_reporting(0);
session_start();

if(isset($_SESSION['id'])&& $_SESSION['id'] === true){
    header('Location: welcome.php');
}
require_once "database.php";

if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
  if(!empty($email) && !empty($password)){
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  }
  if($final= $conn->query($sql)){
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
    <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="body"></div>
    <div class="header">
    <div ><a href="registro.php">SIGNUP </a><span class="login_registro">LOGIN</span></div>
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
