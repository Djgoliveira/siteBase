<?php
include_once ('pdoconfig.php');
require_once 'pdoconfig.php';  
$servername = "127.0.0.1";
$database = "futreal_db";
$username = "root";
$password = "root";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection com $database failed: " . mysqli_connect_error());
}
 
echo "$database Connected successfully";


function test_input($data) {
      
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  if ($_SERVER["REQUEST_METHOD"]== "POST"){
      $nome = 'adicionarUsuario';
      $senha = 'passwordUsuario';
}
$sql = "INSERT INTO tb_usuarios ( nome_usuario, senha) VALUES ('$nome', '$senha')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>