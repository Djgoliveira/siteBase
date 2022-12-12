<?php
include_once ('./php/pdoconfig.php');
require_once './php/pdoconfig.php';  
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
 
//echo "$database Connected successfully";
//header("Location: login.php");


function test_input($data) {
      
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }


  if ($_SERVER["REQUEST_METHOD"]== "POST"){
      $adicionarUsuario = test_input($_POST["adicionarUsuario"]);
      $passwordUsuario = test_input($_POST["passwordUsuario"]);
      $sql = ("INSERT INTO tb_usuarios (nome_usuario, senha) VALUES ('$adicionarUsuario', '$passwordUsuario')");  
  }
  
  if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript'>";
      echo  "alert('Usuário Criado com Sucesso')";      
      echo "</script>";
      header("Location: login.php");
      sleep(2);
       
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
 
  mysqli_close($conn);
?>