<?php
$host= "localhost";
$user="root";
$pass="";
$db="act1";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
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
<?php
  if(isset($POST['registrarse'])){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $registro = "INSERT INTO users VALUES('$email','$password')";
    $ejecutar_registro= mysqli_query($conn, $registro);
  }
?>
