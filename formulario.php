<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}

require_once "db.php";

$user = "";
$passwd = "";
$user_err = "";
$passwd_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty($_POST["user"])){
    $username_err = "Please enter username.";
  }else{
    $user = $_POST["user"];
  }
  if(empty($_POST["passwd"])){
    $passwd_err = "Please enter your password.";
  }else{
    $passwd = $_POST["passwd"];
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
  <label for="Email">Email:</label><br>
  <input type="text" name="user" value="Email"><br>
  <label for="Password">Password:</label><br>
  <input type="text" name="passwd" value="Password"><br><br>
  <input type="submit" value="Submit">
</form>
  </body>
</html>
