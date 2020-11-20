<?php
session_start();

if(isset($_SESSION["email"]) && $_SESSION["email"] === true){
  header("location: welcome.php");
  exit;
}

require_once "db.php";

$email = "";
$password = "";
/*$user_err = "";
$passwd_err = "";

  if(empty($_POST["email"])){
    $username_err = "Please enter username.";
  }else{
    $user = $_POST["email"];
  }
  if(empty($_POST["password"])){
    $password_err = "Please enter your password.";
  }else{
    $password = $_POST["password"];
  }
*/
  if(isset($_POST['login'])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $info = "SELECT * FROM users WHERE email =:email";
    $ejecutar_info= mysqli_query($conn, $info);
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
