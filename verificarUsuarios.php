<?php
require_once './php/pdoconfig.php'; 
//include_once 'login.php' ;

//include_once 'login.php';
//require_once './php/pdoconfig.php'; 

function test_input($data) {
      
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $adicionarUsuario = test_input($_POST["adicionarUsuario"]);
    $passwordUsuario = test_input($_POST["passwordUsuario"]);
    $sql = $conn->prepare("SELECT * FROM tb_usuarios");  
    $sql->execute();
    $users = $sql->fetchAll();
    print_r($users);
  

      foreach($users as $user) {
          
        if(($user['nome_usuario'] == $adicionarUsuario) && ($user['senha']== $passwordUsuario)) {
                header("Location: adminpage.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('Usuário ou Senha inválida!')";
            echo "</script>";
            die();
        }
    }
}
?>