<?php
include './php/pdoconfig.php';  
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


function test_input($data) {
      
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $nomeJogador = test_input($_POST["nomeJogador"]);
    $data_nascimento = test_input($_POST["data_nascimento"]);
    $posicaoJogador = test_input($_POST["posicaoJogador"]);
    $tipoJogador = test_input($_POST["tipoJogador"]);
    $genero = test_input($_POST["genero"]);
    $sql = ("INSERT INTO tb_jogadores (jogador_nome, jogador_data_nasc, jogador_posicao, jogador_tipo,jogador_sexo) VALUES ('$nomeJogador', '$data_nascimento' ,'$posicaoJogador', '$tipoJogador','$genero')");  
}

if (mysqli_query($conn, $sql)) {
      echo  "alert('Jogador Criado com Sucesso')";
     } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>