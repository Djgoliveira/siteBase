<?php
require_once 'pdoconfig.php';  
$servername = "127.0.0.1";
$database = "futreal_db";
$username = "root";
$password = "root";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$sql = "SELECT * FROM tb_usuarios ( nome_usuario, senha) VALUES ('$nome', '$senha')";
$nome = ['nome_usuario'];
$senha =['senha'];

if ($nome != 'Airton' || $nome != 'Nathan' || $nome != 'Douglas' ||$nome != 'Bianca' || $nome != 'Thiago') {
      echo "Usuário não cadastrado";
}
mysqli_close($conn);
?>